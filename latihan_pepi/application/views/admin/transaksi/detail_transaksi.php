
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
        </div>
        <div class="box-body">
          <?php 
                            foreach($bukti as $bk): 
                            endforeach; 
                        ?>
        <div class="card mb-8" style="max-width: 700px;">
        <form method="post" action="<?=base_url('index.php/transaksi/print_bukti/'.$bk->id_transaksi)?>" autocomplete="off">
          <div class="row no-gutters">
            <div class="col-md-4">
              <br>
            <img src="<?= base_url('ass_admin/assets/images/sunrise.png'); ?>" class="card-img" width="200" height="220">
            <br>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"> Tanggal Transaksi :<?= $bk->tanggal ?></h5>
                <p class="card-text">Atas Nama : <?= $bk->atas_nama ?></p>
                <p class="card-text">Jenis Kamar : <?= $bk->jenis_id ?></p>
                <p class="card-text">Nomor Kamar : <?= $bk->kamar_id ?></p>
                <p class="card-text">Waktu Sewa : <?= $bk->waktu_sewa ?></p>
                <p class="card-text">Jenis Pembayaran : <?= $bk->jenis_pembayaran ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group col-lg-6">
                            <button type="submit" class="btn btn-info btn-flat" onclick="tambahruang()">
								<i class="fa fa-pencil"></i>Print</button>
						</div>
        </div>
        </form>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

      </section>
        <!-- right col -->

    </section>
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->
