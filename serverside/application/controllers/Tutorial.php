<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tutorial extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Tutorial';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // ambil data dari model tutorial_model dan data dari post nama pada halaman tutorial
        $this->load->model('Tutorial_model');
        $bahasa = $this->input->post('id');
        $getBahasa = $this->Tutorial_model->getTutorial();
        $namanya = $this->Tutorial_model->getNama($bahasa);
        $dapatkan = $this->Tutorial_model->getBahasa($bahasa);
        $id = $this->Tutorial_model->getId($bahasa);
        $data['bahasa'] = $getBahasa;
        $data['coba'] = $namanya;
        $data['dapat'] = $dapatkan;
        $data['id'] = $id;

        $data['tutor'] = $this->db->get('tutorial')->result_array();
        $data['bahasa'] = $this->db->get('tbl_bahasa')->result_array();

        $data['ommaleka'] = $getBahasa;
        $this->form_validation->set_rules('nama', 'Nama', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('tutorial/index', $data);
            $this->load->view('templates/footer');
        } else {
            $nama = $this->input->post('nama');
            $gambar = $_FILES['userfile'];
            if ($gambar = '') {
            } else {
                $config['upload_path']          = './gambar/bahasa';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;

                $this->load->library('upload', $config);


                if (!$this->upload->do_upload('userfile')) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        gambar gagal diupload ganti gambar dengan ukuran lebih kecil dan nama pendek lalu coba lagi</div>');
                    redirect('tutorial');
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }
            $coba = array(
                'nama' => $nama,
                'gambar' => $gambar
            );

            $this->db->insert("tbl_bahasa", $coba);
            // $this->db->insert("tbl_bahasa", ["nama" => $this->input->post('nama')], ["gambar" => $this->input->post('gambar')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Bahasa baru berhasil ditambahkan</div>');
            redirect('tutorial');
        }
    }
    public function materi()
    {
        $data['title'] = 'Tutorial';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('Tutorial_model');
        $bahasa = $this->input->post('id');
        $getBahasa = $this->Tutorial_model->getTutorial();
        $namanya = $this->Tutorial_model->getNama($bahasa);
        $dapatkan = $this->Tutorial_model->getBahasa($bahasa);
        $id = $this->Tutorial_model->getId($bahasa);
        $data['bahasa'] = $getBahasa;
        $data['coba'] = $namanya;
        $data['dapat'] = $dapatkan;
        $data['id'] = $id;

        $data['tutor'] = $this->db->get('tutorial')->result_array();
        $data['bahasa'] = $this->db->get('tbl_bahasa')->result_array();

        $data['ommaleka'] = $getBahasa;
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');



        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('tutorial/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id_bahasa' => htmlspecialchars($this->input->post('id', true)),
                'judul' => htmlspecialchars($this->input->post('nama', true)),
                'url_video' => htmlspecialchars($this->input->post('url', true)),
            ];
            $this->db->insert('tutorial', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    materi baru ditambahkan</div>');
            redirect('tutorial');
        }
    }
}
