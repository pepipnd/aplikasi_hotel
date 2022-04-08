<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_kamar extends CI_Controller {
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
        $data['jenisk'] = $this->am->jenisk();
        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/jk/jenis_kamar', $data);
		$this->load->view('admin/footer');
    }
    function hapus_jk($id)
    {
        sleep(2);

        $this->am->hapus_jk($id);
        redirect(base_url("index.php/jenis_kamar"));
    }
    public function tambah_jk()
    {
        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/jk/tambah_jk');
		$this->load->view('admin/footer');
    }
    public function simpan_jk()
    {
        //deklarasi variabel
        $nama_jenis_kamar = $this->input->post('nama_jenis_kamar');
        $keterangan = $this->input->post('keterangan');
        $jumlah_kamar = $this->input->post('jumlah_kamar');
        $harga = $this->input->post('harga');

        //proses upload
        $config['upload_path']          = "./gambarjk/";
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 5000;
 
        $this->load->library('upload', $config);
        sleep(2);
		if (!$this->upload->do_upload('gambarjk')){
            //jika gagal upload
             $data = array(
                'nama_jenis_kamar' => $nama_jenis_kamar,
                'keterangan' => $keterangan,
                'jumlah_kamar' => $jumlah_kamar,
                'harga' => $harga
            );
            $this->db->insert('tbl_jenis_kamar', $data);
            redirect(base_url("index.php/jenis_kamar"));
		}else{
            //proses upload ke folder
			$data = array('upload_data' => $this->upload->data());
            $namafile =  $this->upload->data("file_name");

            //update ke database
            $data = array(
                'nama_jenis_kamar' => $nama_jenis_kamar,
                'keterangan' => $keterangan,
                'jumlah_kamar' => $jumlah_kamar,
                'harga' => $harga,
                'gambarjk' => $namafile
            );
            $this->db->insert('tbl_jenis_kamar', $data);
            redirect(base_url("index.php/jenis_kamar"));
        }
    }
    function edit_jk($id)
    {
        $data['editjk'] = $this->am->edit_jk($id);

        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
        $this->load->view('admin/jk/edit_jk', $data);
        $this->load->view('admin/footer');
    }
    function simpan_editjk()
    {
          //deklarasi variabel
          $id = $this->input->post('id');
          $nama_jenis_kamar = $this->input->post('nama_jenis_kamar');
          $keterangan = $this->input->post('keterangan');
          $jumlah_kamar = $this->input->post('jumlah_kamar');
          $harga = $this->input->post('harga');
      
          //proses upload
          $config['upload_path']          = "./gambarjk/";
          $config['allowed_types']        = 'jpeg|jpg|png';
          $config['max_size']             = 5000;
   
          $this->load->library('upload', $config);
          sleep(2);
          if (!$this->upload->do_upload('gambarjk')){
              //jika gagal upload
               $data = array(
                'nama_jenis_kamar' => $nama_jenis_kamar,
                'keterangan' => $keterangan,
                'jumlah_kamar' => $jumlah_kamar,
                'harga' => $harga
              );
              $where = array( 'id_jenis'=> $id);
              $this->am->updatejk($data, $where);
              redirect(base_url("index.php/jenis_kamar"));
  
          }else{
              //proses upload ke folder
              $data = array('upload_data' => $this->upload->data());
              $namafile =  $this->upload->data("file_name");
  
              //update ke database
              $data = array(
                'nama_jenis_kamar' => $nama_jenis_kamar,
                'keterangan' => $keterangan,
                'jumlah_kamar' => $jumlah_kamar,
                'harga' => $harga,       
                'gambarjk' => $namafile
              );
              $where = array( 'id_jenis'=> $id);
              $this->am->updatejk($data, $where);
              redirect(base_url("index.php/jenis_kamar"));
            }
    }
}