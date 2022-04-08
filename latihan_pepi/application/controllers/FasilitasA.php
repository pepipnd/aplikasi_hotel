<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FasilitasA extends CI_Controller {
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
        $data['fasilitas'] = $this->am->fasilitas();
        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/fasilitas/fasilitas', $data);
		$this->load->view('admin/footer');
    }
    public function tambah_fasilitas()
    {
        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/fasilitas/tambah_fasilitas');
		$this->load->view('admin/footer');
    }
    public function simpan_fasilitas()
    {
        sleep(2);

        $this->am->simpan_fasilitas();
        redirect(base_url("index.php/fasilitasA"));
    }
    function edit_fasilitas($id)
    {
        $data['editf'] = $this->am->edit_fasilitas($id);

        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
        $this->load->view('admin/fasilitas/edit_fasilitas', $data);
        $this->load->view('admin/footer');
    }
    function simpan_editf()
    {
        sleep(2);

        $this->am->simpan_editf();
        redirect(base_url("index.php/fasilitasA"));
    }
    function hapus_fasilitas($id)
    {
        sleep(2);

        $this->am->hapus_fasilitas($id);
        redirect(base_url("index.php/fasilitasA"));
    }
}