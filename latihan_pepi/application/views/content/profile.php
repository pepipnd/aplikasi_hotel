<section class="page-section bg-light" id="profile">
      <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Profile</h2>
                    <h3 class="section-subheading text-muted">Selamat Datang di Sunrise Hotel</h3>
                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <td class="text-start" width="15%">Email</td>
                                    <td>:</td>
                                    <td class="text-start"><?= $user['email']  ?></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Nama Lengkap</td>
                                    <td>:</td>
                                    <td class="text-start"><?= $user['nama_lengkap']  ?></td>
                                </tr>
                                <tr>
                                    <td class="text-start">No Hp</td>
                                    <td>:</td>
                                    <td class="text-start"><?= $user['no_hp']  ?></td>
                                </tr>
                            </tbody>
                        </table>
                        Klik <a href="<?= base_url('index.php/profile/update_profile') ?>">disini</a> untuk update profile anda
                        <br>
                        Klik <a href="<?= base_url('index.php/profile/ganti_password') ?>">disini</a> untuk mengganti password anda
                        <br>
                  </div>
              </div>
       </div>
</section>