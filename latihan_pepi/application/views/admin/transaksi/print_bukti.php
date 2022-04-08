<link rel="stylesheet" href="<?= base_url('ass_admin/'); ?>assets/css/bootstrap.css">
    
    
    <link rel="stylesheet" href="<?= base_url('ass_admin/'); ?>assets/vendors/iconly/bold.css">
    
        <link rel="stylesheet" href="<?= base_url('ass_admin/'); ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" href="<?= base_url('ass_admin/'); ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="<?= base_url('ass_admin/'); ?>assets/css/app.css">
        <link rel="shortcut icon" href="<?= base_url('ass_admin/'); ?>assets/images/favicon.svg" type="image/x-icon">
        <center>

        <html>
<head>
  <title></title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
                            foreach($bukti as $bk): 
                            endforeach; 
                        ?>
<div class="container">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="<?= base_url('ass_admin/assets/images/sunrise.png'); ?>" alt="Card image" style="width:100%">
    <h2>Sunrise Hotel</h2>
  <hr/>
    <div class="card-body">
    <h5 class="card-title"> Tanggal Transaksi :<?= $bk->tanggal ?></h5>
                <p class="card-text">Atas Nama : <?= $bk->atas_nama ?></p>
                <p class="card-text">Jenis Kamar : <?= $bk->jenis_id ?></p>
                <p class="card-text">Nomor Kamar : <?= $bk->kamar_id ?></p>
                <p class="card-text">Waktu Sewa : <?= $bk->waktu_sewa ?></p>
                <p class="card-text">Jenis Pembayaran : <?= $bk->jenis_pembayaran ?></p>
    </div>
  </div>
  <br>
</div>
</body>
</html>


      </section>
        <!-- right col -->

    </section>
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->

      <!-- /.box -->

      </section>
        <!-- right col -->

    </section>
    <!-- /.content -->
  </div>
  </div>
  <script src="<?= base_url('ass_admin/'); ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url('ass_admin/'); ?>assets/js/bootstrap.bundle.min.js"></script>
    
    <script src="<?= base_url('ass_admin/'); ?>assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="<?= base_url('ass_admin/'); ?>assets/js/pages/dashboard.js"></script>

    <script src="<?= base_url('ass_admin/'); ?>assets/js/mazer.js"></script>
  <!-- /.content-wrapper -->
  <script>
  window.print();
</script>
