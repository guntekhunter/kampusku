<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tutorial extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Tutorial';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['tutor'] = $this->db->get('tutorial')->result_array();
        $data['bahasa'] = $this->db->get('tbl_bahasa')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        $this->form_validation->set_rules('namanya', 'Namanya', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('tutorial/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert("user_menu", ["menu" => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                New menu added</div>');
            redirect('menu');
        }
    }
}
