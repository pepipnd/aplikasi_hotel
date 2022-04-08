<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function index()
	{
        $this->load->view('partial_home/header');
		$this->load->view('partial_home/navigasi');
		$this->load->view('content/login');
		$this->load->view('partial_home/footer');
		$this->load->view('partial_home/modals');
		$this->load->view('partial_home/js');
	}		
	// public function proses_login()
	// {
	// 	$email = $this->input->post('email');
	// 	$password = $this->input->post('password');
	// 	$password = md5($password);

	// 	$cek_login = $this->db->get_where('tbl_user', array('email' => $email, 'password' => $password))->num_rows();

	// 	if($cek_login > 0){
	// 		$data_session = array(
	// 			'email' => $email,
	// 			'status' => "login"
	// 		);
	// 		$this->session->set_userdata($data_session);
	// 		redirect(base_url("index.php/home"));
	// 	}else{
	// 		// echo "Username dan Password salah";
	// 		redirect(base_url("index.php/auth"));
	// 	}
	// }
	function proses_login(){
		$email = $this->input->post('email'); 
		$password = $this->input->post('password'); 
		$password = md5($password); 
		$cek_login = $this->db->get_where('tbl_user', 
	   array('email' => $email, 'password' => $password))->row_array(); 
		
		if($cek_login > 0){
		
		$data_session = array(
		'email' => $email,
		'status' => "login",
		'hak_akses' => $cek_login['hak_akses'],
		
		);
		
		$this->session->set_userdata($data_session);
		print_r($data_session);
		if ($data_session['hak_akses'] == 'user'){
		redirect(base_url("index.php/home"));
		}
		else{
		redirect(base_url("index.php/admin"));
		}
		}else{
		echo "Username Atau password salah!";
		redirect(base_url("index.php/auth"));
		}
	}	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url("index.php/home"));
	}
	public function register()
	{
		$this->load->view('partial_home/header');
		$this->load->view('partial_home/navigasi');
		$this->load->view('content/register');
		$this->load->view('partial_home/footer');
		$this->load->view('partial_home/modals');
		$this->load->view('partial_home/js');
	}
	public function proses_register()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$password = md5($password);
		$nama_lengkap = $this->input->post('nama_lengkap');
		$no_hp = $this->input->post('no_hp');

		$data = array(
			'email' => $email,
			'password' => $password,
			'nama_lengkap' => $nama_lengkap,
			'no_hp' => $no_hp,
		);

		$this->db->insert('tbl_user', $data);
		redirect(base_url("index.php/auth"));
	}
}