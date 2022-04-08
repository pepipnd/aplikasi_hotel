<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {
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
        $data['kamar'] = $this->am->kamar();
        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/kamar/index', $data);
		$this->load->view('admin/footer');
    }
    public function tambah_kamar()
    {
        $data['jenisk'] = $this->am->jenisk();
        
        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/kamar/tambah_kamar', $data);
		$this->load->view('admin/footer');
    }
    public function simpan_kamar()
    {
        sleep(2);

        $this->am->simpan_kamar();
        redirect(base_url("index.php/kamar"));
    }
    public function edit_kamar($id)
    {
        $kamar  = $this->am->editk($id);
        $data['kamar'] = $kamar[0];
        $data['jenisk'] = $this->am->jenisk();

        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
        $this->load->view('admin/kamar/editk', $data);
        $this->load->view('admin/footer');
    }
    public function simpan_edit_kamar()
    {
        sleep(2);

        $this->am->simpan_edit_kamar();
        redirect(base_url("index.php/kamar"));
    }
    public function hapus_kamar($id)
    {
        sleep(2);

        $this->am->hapus_kamar($id);
        redirect(base_url("index.php/kamar"));
    }
}