<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Tambah artikel';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['artikelAdd'] = $this->db->get('artikel')->result_array();
        $data['jenis'] = $this->db->get('jenis_artikel')->result_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('artikel/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id_jenis' => htmlspecialchars($this->input->post('jenis', true)),
                'judul' => htmlspecialchars($this->input->post('judul', true)),
                'isi' => htmlspecialchars($this->input->post('isi', true)),
                'gambar' => 'default.jpg',
            ];
            $this->db->insert('artikel', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                New article added</div>');
            redirect('artikel');
        }
    }
}
// $data=[
//                 'judul' => htmlspecialchars($this->input->post('judul', true)),
//                 'isi' => htmlspecialchars($this->input->post('isi', true)),
//                 'gambar' => 'default.jpg',
//             ]