  Portfolio Grid
  <section class="page-section bg-dark" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-muted">Jenis Kamar</h2>
                    <h3 class="section-subheading text-muted">Sunrise Hotel</h3>
                </div>
                <?php 
                foreach($jenisk as $jk):
                ?>
                <div class="row">
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                                <img class="img-fluid" src="<?= base_url('assets/'); ?>kamar/kamar1.jpg" alt="..." />
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?= $jk->nama_jenis_kamar ?></div>
                                <div class="portfolio-caption-subheading">Harga : <?= "Rp.".number_format($jk->harga)."/malam" ; ?></div>
                                <div class="portfolio-caption-subheading text-muted"> 
                                    <br>
                                    <?= $jk->keterangan ?></div>
                                    <hr>
                                    <a href="<?= base_url('index.php/pesan_kamar/pesan');?>">
                                        <button class="btn sm-btn btn-primary"><i class="fa fa-shopping-cart"></i>     Pesan Kamar</button>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php 
                endforeach;
                ?>
            </div>
        </section>