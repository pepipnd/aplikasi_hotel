<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
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
        $data['transaksi'] = $this->am->transaksi();
        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/transaksi/index', $data);
		$this->load->view('admin/footer');
    }
    function tambah_data()
    {
        $data['jenisk'] = $this->am->jenisk();
        $data['kamar'] = $this->am->kamart();

        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/transaksi/tambah_transaksi', $data);
		$this->load->view('admin/footer');
    }
    public function simpan_transaksi()
    {
        sleep(2);
        $this->am->simpan_transaksi();
        // $data['bukti'] = $this->am->caridata($id);

        redirect(base_url("index.php/transaksi"));

        // $this->load->view('admin/transaksi/print_bukti', $data);
        // $this->load->view('admin/header');
		// $this->load->view('admin/navigasi');
		// $this->load->view('admin/transaksi/data_konsumen');
		// $this->load->view('admin/footer');
    }
    function lanjut_pmb($id)
    {
        $data['bukti'] = $this->am->caridata($id);

        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/transaksi/lanjut_pembayaran', $data);
		$this->load->view('admin/footer');
    }
    function isidataksm()
    {
        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/transaksi/data_konsumen');
		$this->load->view('admin/footer');    
    }
    function simpan_isidataksm()
    {
        $this->am->simpan_isidataksm();
        redirect(base_url("index.php/transaksi/tambah_data"));
    }
    function detail_transaksi($id)
    {
        $data['bukti'] = $this->am->bukti($id);
        // $data['bukti'] = $this->am->dtrans($id);

        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/transaksi/detail_transaksi', $data);
		$this->load->view('admin/footer');     
    }
    function print_bukti($id)
    {
        $data['bukti'] = $this->am->bukti($id);

		$this->load->view('admin/transaksi/print_bukti', $data);
    }
    function search()
    {
        $data['transaksi'] = $this->am->transaksi();

        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/transaksi/transaksi', $data);
		$this->load->view('admin/footer'); 
    }
    function hapus_transaksi($id)
    {
        sleep(2);

        $this->am->hapus_transaksi($id);
        redirect(base_url("index.php/transaksi"));
    }
}