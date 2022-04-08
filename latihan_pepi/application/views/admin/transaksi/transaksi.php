<div class="container-fluid">

<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
                    <a href="<?= base_url('index.php/transaksi/isidataksm');?>">
                          <button class="btn sm-btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</button>
                    </a>
                    <br>
                    <br>
                <form method="POST" action="<?= base_url('index.php/transaksi/search')?>" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" name="search" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
                </div>
                </form>
                <br>
                <br>
                 
                  </h6>
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jenis Kamar</th>
                    <th>Nomor Kamar</th>
                    <th>Atas Nama</th>
                    <th>Harga Permalam</th>
                    <th>Waktu Sewa</th>
                    <th>Total Pembayaran</th>
                    <th>Jenis Pembayaran</th>
                    <th>Aksi</th>
                </thead>             
                <tbody>
                    <?php $no = 1; if (!empty($transaksi)) : ?>
                  <?php foreach ($transaksi as $tr) :
                      $harga = $tr->harga;
                      $waktu_sewa = $tr->waktu_sewa;
                      $total = $harga*$waktu_sewa;
                  ?>
                  <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $tr->tanggal ?></td>
                      <td><?php echo $tr->nama_jenis_kamar ?></td>
                      <td><?php echo $tr->nomor_kamar ?></td>
                      <td><?php echo $tr->atas_nama ?></td>
                      <td><?= "Rp.".number_format($tr->harga); ?></td>
                      <td><?php echo $tr->waktu_sewa. " hari" ?></td>
                      <td><?= "Rp.".number_format($total); ?></td>
                      <td><?php echo $tr->jenis_pembayaran ?></td>
                      <td>
                      <a href="" class="bi bi-pen-fill btn-circle"> <i class="fa fa-edit"></i></a> 
                      <br>
                      <a href="" class="bi bi-info btn-circle"> 
                      <br>
                      <i class="fas fa-info-circle"></i></a>
                      <a href="#modalDelete" data-toggle="modal" onclick="" 
                      class="bi bi-danger btn-circle" ><i class="bi bi-trash"></i></a> 
                      </td>
                  </tr>
                  <?php endforeach ?>
                  <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
</div>



<div class="modal fade" id="modalDelete">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
          <div class="modal-body">
            <div class="alert alert-danger"><p>Apakah anda yakin akan menghapus data ini?</p></div>   
          </div>
        <div class="modal-footer">
        <form id="formDelete" action="" method="post">
            <button type="submit" class="btn btn-danger" onclick="hapusbarang()">Hapus</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        </form>
      </div>
    </div>
</div>
</div>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
                  />
                  <script>
                      function hapusbarang(){
                      Swal.fire({
                      icon: 'success',
                      title: 'Barang Berhasil Dihapus!',
                       showClass: {
                          popup: 'animate__animated animate__fadeInDown'
                      },
                      hideClass: {
                          popup: 'animate__animated animate__fadeInDown'
                      }
                      })
                      }
                  </script>


                    