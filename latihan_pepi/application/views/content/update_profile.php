<section class="page-section bg-light" id="profile">
      <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Update Profile</h2>
                    <h3 class="section-subheading text-muted">Selamat Datang di Sunrise Hotel</h3>

                    <form action="<?= base_url('index.php/profile/proses_update_profile') ?>" method="post">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td class="text-start" width="15%">Email</td>
                                    <td>:</td>
                                    <td class="text-start"><input type="text" class="form-control" name="email" id="email" value="<?= $user['email']  ?>" readonly></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Nama Lengkap</td>
                                    <td>:</td>
                                    <td class="text-start"><input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="<?= $user['nama_lengkap']  ?>"></td>
                                </tr>
                                <tr>
                                    <td class="text-start">No Hp</td>
                                    <td>:</td>
                                    <td class="text-start"><input type="text" class="form-control" name="no_hp" id="no_hp" value="<?= $user['no_hp']  ?>"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </form>
                        
                  </div>
              </div>
       </div>
</section>