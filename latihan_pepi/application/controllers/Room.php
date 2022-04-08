<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('User_model','um');
    }
    public function index()
	{
		$data['jenisk'] = $this->um->jenisk();

		$this->load->view('partial_home/header');
		$this->load->view('partial_home/navigasi');
		$this->load->view('content/room', $data);
		$this->load->view('partial_home/footer');
		$this->load->view('partial_home/modals');
		$this->load->view('partial_home/js');
	}
}