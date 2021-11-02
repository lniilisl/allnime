<?php $this->includes('navbar'); ?>
<div class="container d-table h-100 login-container">
  <div class="d-table-cell align-middle">
    <div class="row">
      <div class="col-sm-12 col-md-7 col-lg-7">
        <div style="position: relative; height: 100%;">
          <div style="margin: 0; position: absolute; top: 50%; -ms-transform: translateY(-50%); transform: translateY(-50%);">
            <div class="brand text-center mb-3">
              <a href="./">
                <img src="assets/img/logo.svg" alt="Logo" height="50" loading="lazy" />
              </a>
            </div>
            <h4>Gerencie e descubra os seus animes favoritos a poucos clicks de distância.</h4>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-5 col-lg-5 d-table">
        <div class="login-card">
          <div class="card-body text-center">
            <h5 class="card-title">Email</h5>
            <form data-form-type="register" action="./register" method="post">
              <div class="mb-3">
                <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Email"
                  autoComplete="email" data-form-type="email" required />
              </div>
              <h5 class="card-title">Confirme o Email</h5>
              <div class="mb-3">
                <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Email"
                  autoComplete="email" data-form-type="email" required />
              </div>
              <h5 class="card-title"><?php echo lang("password"); ?></h5>
              <div class="mb-3">
                <!--<span class="btn-showpass">
                  <i class="fas fas-eye"></i>
                </span>-->
                <input class="form-control" placeholder="Password" type="password" value={this.state.password}
                  autoComplete="current-password" data-form-type="password" required />
              </div>
              <h5 class="card-title">Confirme a senha</h5>
              <div class="mb-3">
                <!--<span class="btn-showpass">
                  <i class="fas fas-eye"></i>
                </span>-->
                <input class="form-control" placeholder="Password" type="password" value={this.state.password}
                  autoComplete="current-password" data-form-type="password" required />
              </div>
              <button class="btn btn-block btn-green my-1 w-100" type="submit">
                <?php echo lang("signin"); ?>
              </button>
            </form>
            <a href="./forgot-password" class="btn btn-block my-1 w-100 btn-lighter">
              <?php echo lang("forgot_password"); ?>
            </a>
            <hr />
            <a href="./login" class="btn btn-darkgrey btn-block w-100">
              Login
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>