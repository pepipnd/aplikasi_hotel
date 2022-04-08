<section class="page-section bg-light" id="profile">
      <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Ganti Password</h2>
                    <h3 class="section-subheading text-muted">Selamat Datang di Sunrise Hotel</h3>

                    <form action="<?= base_url('index.php/profile/proses_ganti_password') ?>" method="post">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td class="text-start" width="15%">Email</td>
                                    <td>:</td>
                                    <td class="text-start"><input type="text" class="form-control" name="email" id="email" value="<?= $user['email']  ?>" readonly></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Password</td>
                                    <td>:</td>
                                    <td class="text-start"><input type="password" class="form-control" name="password1" id="password1"></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Ulangi Password</td>
                                    <td>:</td>
                                    <td class="text-start"><input type="password" class="form-control" name="password2" id="password2"></td>
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