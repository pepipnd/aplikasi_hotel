<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_kamar extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('User_model','um');
 
    }
    public function index()
	{
		$user = $this->session->userdata('email');
        $data['jenisk'] = $this->db->get('tbl_jenis_kamar')->row_array();

        $this->load->view('partial_home/header');
		$this->load->view('partial_home/navigasi');
		$this->load->view('content/pesank', $data);
		$this->load->view('partial_home/footer');
		$this->load->view('partial_home/modals');
		$this->load->view('partial_home/js');	
    }
	function pesanan()
	{
		$user = $this->session->userdata('email');
        $data['jenisk'] = $this->um->jenisk();

        $this->load->view('partial_home/header');
		$this->load->view('partial_home/navigasi');
		$this->load->view('content/pesanan');
		$this->load->view('partial_home/footer');
		$this->load->view('partial_home/modals', $data);
		$this->load->view('partial_home/js');	
	} 
	function pesan()
	{
		$user = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $user])->row_array();

        $this->load->view('partial_home/header');
		$this->load->view('partial_home/navigasi');
		$this->load->view('content/input_pesanan', $data);
		$this->load->view('partial_home/footer');
		$this->load->view('partial_home/modals');
		$this->load->view('partial_home/js');		
	}
	function simpan_input()
	{
		echo "hao";
	}
}