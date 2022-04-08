<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
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
        $data['user'] = $this->am->user();
        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/user/index', $data);
		$this->load->view('admin/footer');
    }
    public function tambah_user()
    {
        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/user/tambah_user');
		$this->load->view('admin/footer');
    }
    public function simpan_user()
    {
        sleep(2);

        $this->am->simpan_user();
        redirect(base_url("index.php/user"));
    }
    public function edit_user($id)
    {
        $data['editu'] = $this->am->editu($id);

        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
        $this->load->view('admin/user/edit_user', $data);
        $this->load->view('admin/footer');
    }
    function simpan_edit_user()
    {
        sleep(2);

        $this->am->simpan_edit_user();
        redirect(base_url("index.php/user"));
    }
    function hapus_user($id)
    {
        sleep(2);

        $this->am->hapus_user($id);
        redirect(base_url("index.php/user"));
    }
}