<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'silahkan isi fild yang tersedia',
            'valid_email' => 'email ini tidak sesuai'

        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'silahkan isi fild yang tersedia'
        ]);
        if ($this->form_validation->run() == false) {
            //untuk membuat judul pada title halaman
            $data['title'] = 'Login user';
            //$data dikirim ke setiap header agar halaman sesuai dengan title masing masing
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //validasi sukses
            //_login() meruapakan method private agar method tidak terlalu panjang
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            //usernya ada
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 1) {
                    redirect('admin');
                } else {
                    redirect('user');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password salah</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email tidak terdaftar</div>');
            redirect('auth');
        }
    }
    public function register()
    {
        //validasi data nama harus diisi didalam form
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        //untuk mengecek validasi data email unik atau tidak, dan emailnya sesuai dengan format email
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'email ini sudah pernah digunakan',
            'required' => 'silahkan isi fild yang tersedia'
        ]);
        //validasi untuk minimal panjang karakter dan kesamaan dengan password satunya 
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password tidak sama!',
            'required' => 'silahkan isi fild yang tersedia',
            'min_length' => 'password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi user';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/register');
            $this->load->view('templates/auth_footer');
        } else {
            $data =
                [
                    'name' => htmlspecialchars($this->input->post('name', true)),
                    'email' => htmlspecialchars($this->input->post('email', true)),
                    'image' => 'default.jpg',
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'role_id' => '1'

                ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            akun anda berhasil dibuat</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Anda telah logout</div>');
        redirect('auth');
    }
}
