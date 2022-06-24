<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
    }

    public function index()
    {
        $this->load->view('view_login');
    }

    public function postLogin()
    {
        $username = $this->input->post('emailPengguna');
        $password = $this->input->post('passPengguna');
        if ($this->auth->userLogin($username, $password)) {
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Username & Password salah');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('emailPengguna');
        $this->session->unset_userdata('passPengguna');
        $this->session->unset_userdata('is_login');
        redirect('login');
    }
}
