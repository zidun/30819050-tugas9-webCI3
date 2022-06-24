<?php
class Auth extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function userLogin($email, $password)
    {
        $query = $this->db->get_where('Pengguna', array('emailPengguna' => $email));
        if ($query->num_rows() > 0) {
            $data_user = $query->row();
            if ($data_user->passPengguna == $password) {
                // menyimpan session degan durasi 5 menit (60detik x 5);
                $this->session->set_tempdata('emailPengguna', $email, 300);
                $this->session->set_tempdata('namaPengguna', $data_user->namaPengguna, 300);
                $this->session->set_tempdata('is_login', TRUE, 300);
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    function cek_login()
    {
        if (empty($this->session->userdata('is_login'))) {
            redirect('login');
        }
    }
}
