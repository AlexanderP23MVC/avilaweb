


<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="row w-100 m-0">
      <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
        <div class="card col-lg-4 mx-auto">
          <div class="card-body px-5 py-5">
            <h3 class="card-title text-left mb-3">Login Avila Web</h3>
            <form id="formulario" action="<?php echo base_url();?>login" method="POST">
              <div class="form-group">
                <label>Username or email *</label>
                <input type="text" name="usuario" class="form-control p_input">
              </div>
              <div class="form-group">
                <label>Password *</label>
                <input type="password" name="password" class="form-control p_input">
              </div>
              <div class="form-group d-flex align-items-center justify-content-between">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"> Remember me </label>
                </div>
                <a href="#" class="forgot-pass">Forgot password</a>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
              </div>
              <div class="text-center">
                <a href="<?php echo base_url(); ?>RegistrarUsuario"><button type="button"
                  class="btn btn-primary btn-block enter-btn">Registrate Aqui</button></a>
              </div>
              <div class="d-flex">


            </form>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- row ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>