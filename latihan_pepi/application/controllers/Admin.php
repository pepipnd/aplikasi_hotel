<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model','am');

        if($_SESSION['hak_akses'] == '' or $_SESSION['hak_akses'] != 'admin') 
        {
            redirect('/');
        }  
    }
    public function index()
    {
        // $user = $this->session->userdata('email');
        // $data['user'] = $this->db->get_where('tbl_user', ['email' => $user])->row_array();

		$this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
    }
}
