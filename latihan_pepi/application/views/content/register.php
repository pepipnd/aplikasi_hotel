<section class="page-section bg-light" id="login">
  <div>
      <div class="container">
          <form action="<?= base_url('index.php/auth/proses_register') ?>" method="post">
              <h3>Silahkan Daftar</h3>
              <h6>Sudah punya akun?</h6> <a href="<?= base_url('index.php/auth') ?>">Klik Disini!</a>
              <table class="table">
                  <tbody>
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                    
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">No Hp</label>
                    <input type="text" class="form-control" name="no_hp" id="no_hp">
                  </div>
                  <button type="submit" class="btn btn-primary">Daftar</button>

                  </tbody>
              </table>
          </form>
      </div>
  </div>
</section>