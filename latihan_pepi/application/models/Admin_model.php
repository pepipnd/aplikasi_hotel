<?php 

class Admin_model extends CI_Model {
    public function jenisk()
    {
        return $this->db->get('tbl_jenis_kamar')->result();
    }
    public function fasilitas()
    {
        return $this->db->get('fasilitas')->result();
    }
    public function transaksi()
    {
        @$search = $this->input->post('search'); 

        if(@$search){
            $this->db->select('*');
            $this->db->from('transaksi');
            $this->db->join('tbl_jenis_kamar', 'tbl_jenis_kamar.id_jenis = transaksi.jenis_id');
            $this->db->join('tbl_kamar', 'tbl_kamar.id_kamar = transaksi.kamar_id');
            $this->db->like('atas_nama', $search); 
            return $this->db->get()->result();
        }else
        {
            $this->db->select('*');
            $this->db->from('transaksi');
            $this->db->join('tbl_jenis_kamar', 'tbl_jenis_kamar.id_jenis = transaksi.jenis_id');
            $this->db->join('tbl_kamar', 'tbl_kamar.id_kamar = transaksi.kamar_id');
            return $query = $this->db->get()->result();        
        }   
    }
    public function simpan_jk()
    {
        $nama_jenis_kamar = $this->input->post('nama_jenis_kamar');
        $keterangan = $this->input->post('keterangan');
        $jumlah_kamar = $this->input->post('jumlah_kamar');
        $harga = $this->input->post('harga');
        $gambar = $this->input->post('gambar');
        $data = array(
            'nama_jenis_kamar' => $nama_jenis_kamar,
            'keterangan' => $keterangan,
            'jumlah_kamar' => $jumlah_kamar,
            'harga' => $harga,
            'gambar' => $gambar,
        );
        $this->db->insert('tbl_jenis_kamar', $data);    
    }
    function simpan_fasilitas()
    {
        $nama_fasilitas = $this->input->post('nama_fasilitas');
        $data = array(
            'nama_fasilitas' => $nama_fasilitas,
        );
        $this->db->insert('fasilitas', $data);
    }
    function edit_fasilitas($id)
    {
        return $this->db->get_where('fasilitas', array('id_fasilitas' => $id))->result();
    }
    function simpan_editf()
    {
        $nama_fasilitas = $this->input->post('nama_fasilitas');
        $id = $this->input->post('id');

        $data= array(
            'nama_fasilitas' => $nama_fasilitas
        );
        $this->db->where('id_fasilitas', $id);
        $this->db->update('fasilitas', $data);
    }
    function hapus_fasilitas($id)
    {
        $this->db->delete('fasilitas', array('id_fasilitas' => $id));
    }
    function hapus_jk($id)
    {
        $this->db->delete('tbl_jenis_kamar', array('id_jenis' => $id));
    }
    function edit_jk($id)
    {
        return $this->db->get_where('tbl_jenis_kamar', array('id_jenis' => $id))->result();
    }
    function updatejk($data, $where)
    {
        $this->db->update('tbl_jenis_kamar', $data, $where);
    }
    public function kamar()
    {
        $query = $this->db->query("SELECT * FROM tbl_kamar a left join tbl_jenis_kamar b on a.jenis_id = b.id_jenis");
        return $query->result();   
    }
    public function user()
    {
        return $this->db->get('tbl_user')->result();
    }
    public function konsumen()
    {
        return $this->db->get('tbl_konsumen')->result();
    }
    public function simpan_kamar()
    {
        $nomor_kamar = $this->input->post('nomor_kamar');
        $jenis_kamar = $this->input->post('jenis_kamar');
        $ket_kamar = $this->input->post('ket_kamar');
        $data = array(
            'nomor_kamar' => $nomor_kamar,
            'jenis_id' => $jenis_kamar,
            'ket_kamar' => $ket_kamar,
        );
        $this->db->insert('tbl_kamar', $data);
    }
    function editk($id)
    {
        return $this->db->get_where('tbl_kamar', array('id_kamar' => $id))->result();
    }
    function simpan_edit_kamar()
    {
        $nomor_kamar = $this->input->post('nomor_kamar');
        $jenis_kamar = $this->input->post('jenis_kamar');
        $ket_kamar = $this->input->post('ket_kamar');
        $id = $this->input->post('id');

        $data= array(
            'nomor_kamar' => $nomor_kamar,
            'jenis_id' => $jenis_kamar,
            'ket_kamar' => $ket_kamar
        );
        $this->db->where('id_kamar', $id);
        $this->db->update('tbl_kamar', $data);
    }
    function hapus_kamar($id)
    {
        $this->db->delete('tbl_kamar', array('id_kamar' => $id));
    }
    function simpan_user()
    {
        $nama_lengkap = $this->input->post('nama_lengkap');
        $email = $this->input->post('email');
        $no_hp = $this->input->post('no_hp');
        $hak_akses = $this->input->post('hak_akses');
        $password = $this->input->post('password');
        $data = array(
            'nama_lengkap' => $nama_lengkap,
            'email' => $email,
            'no_hp' => $no_hp,
            'hak_akses' => $hak_akses,
            'password' => $password,
        );
        $this->db->insert('tbl_user', $data);
    }
    function editu($id)
    {
        return $this->db->get_where('tbl_user', array('id_user' => $id))->result();
    }
    function bukti($id)
    {
        return $this->db->get_where('transaksi', array('id_transaksi' => $id))->result();
    }
    function simpan_edit_user()
    {
        $nama_lengkap = $this->input->post('nama_lengkap');
        $email = $this->input->post('email');
        $no_hp = $this->input->post('no_hp');
        $password = $this->input->post('password');
		$password = md5($password);
        $id = $this->input->post('id');

        $data= array(
            'nama_lengkap' => $nama_lengkap,
            'email' => $email,
            'no_hp' => $no_hp,
            'password' => $password,
        );
        $this->db->where('id_user', $id);
        $this->db->update('tbl_user', $data);
    }
    function hapus_user($id)
    {
        $this->db->delete('tbl_user', array('id_user' => $id));
    }
    function kamart()
    {
        return $this->db->get('tbl_kamar')->result();
    }
    function simpan_transaksi()
    {
        $tanggal = $this->input->post('tanggal');
        $jenis_kamar = $this->input->post('jenis_kamar');
        $nomor_kamar = $this->input->post('nomor_kamar');
        $waktu_sewa = $this->input->post('waktu_sewa');
        $atas_nama = $this->input->post('atas_nama');
        $jenis_pembayaran = $this->input->post('jenis_pembayaran');
        $data = array(
            'tanggal' => $tanggal,
            'jenis_id' => $jenis_kamar,
            'kamar_id' => $nomor_kamar,
            'waktu_sewa' => $waktu_sewa,
            'atas_nama' => $atas_nama,
            'jenis_pembayaran' => $jenis_pembayaran,
        );
        $this->db->insert('transaksi', $data);
    }
    function caridata($id)
    {
        return $this->db->get_where('transaksi', array('id_transaksi' => $id))->result();
    }
    function simpan_isidataksm()
    {
        $nama_lengkap = $this->input->post('nama_lengkap');
        $alamat = $this->input->post('alamat');
        $kota = $this->input->post('kota');
        $provinsi = $this->input->post('provinsi');
        $negara = $this->input->post('negara');
        $no_identitas = $this->input->post('no_identitas');
        $no_telepon = $this->input->post('no_telepon');
        $email = $this->input->post('email');
        $data = array(
            'nama_lengkap' => $nama_lengkap,
            'alamat' => $alamat,
            'kota' => $kota,
            'provinsi' => $provinsi,
            'negara' => $negara,
            'no_identitas' => $no_identitas,
            'no_telepon' => $no_telepon,
            'email' => $email,
        );
        $this->db->insert('tbl_konsumen', $data);
    }
    function dtrans($id)
    {
            $this->db->select('*');
            $this->db->from('transaksi');
            $this->db->join('tbl_jenis_kamar', 'tbl_jenis_kamar.id_jenis = transaksi.jenis_id');
            $this->db->join('tbl_kamar', 'tbl_kamar.id_kamar = transaksi.kamar_id');
            $this->db->where($id);
            return $query = $this->db->get()->result(); 
    }
    function hapus_transaksi($id)
    {
        $this->db->delete('transaksi', array('id_transaksi' => $id));
    }
    function hapus_konsumen($id)
    {
        $this->db->delete('tbl_konsumen', array('id_konsumen' => $id));
    }
    function editks($id)
    {
        return $this->db->get_where('tbl_konsumen', array('id_konsumen' => $id))->result();
    }
    function simpan_editks()
    {
        $nama_lengkap = $this->input->post('nama_lengkap');
        $alamat = $this->input->post('alamat');
        $kota = $this->input->post('kota');
        $provinsi = $this->input->post('provinsi');
        $negara = $this->input->post('negara');
        $no_identitas = $this->input->post('no_identitas');
        $no_telepon = $this->input->post('no_telepon');
        $email = $this->input->post('email');
        $id = $this->input->post('id');

        $data= array(
            'nama_lengkap' => $nama_lengkap,
            'alamat' => $alamat,
            'kota' => $kota,
            'provinsi' => $provinsi,
            'negara' => $negara,
            'no_identitas' => $no_identitas,
            'no_telepon' => $no_telepon,
            'email' => $email,
        );
        $this->db->where('id_konsumen', $id);
        $this->db->update('tbl_konsumen', $data);
    }
}