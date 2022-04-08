<section class="page-section bg-light" id="login">
  <div>
      <div class="container">
          <form action="<?= base_url('index.php/auth/proses_login') ?>" method="post">
              <h3>Silahkan Login</h3>
              <h6>Belum punya akun?</h6> <a href="<?= base_url('index.php/auth/register') ?>">Klik Disini!</a>
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
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                  <button type="submit" class="btn btn-primary">Login</button>

                  </tbody>
              </table>
          </form>
      </div>
  </div>
</section>