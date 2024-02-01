<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="row w-100 m-0">
      <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
         

             
              
              <h4 class="card-title">Horizontal Two column</h4>
              <?php  echo validation_list_errors(); ?>
              <form class="form-sample" action="<?php echo base_url()?>ObtenerUsuario" method="GET" autocomplete="off">
                <p class="card-description"> Personal info </p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nombre</label>
                      <div class="col-sm-9">
                        <input type="text" name="nombre"  class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Apellido</label>
                      <div class="col-sm-9">
                        <input type="text" name="apellido" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Cedula</label>
                      <div class="col-sm-9">
                        <input type="text" name="cedula" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Telefono</label>
                      <div class="col-sm-9">
                        <input type="text" name="telefono" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Edad</label>
                      <div class="col-sm-9">
                        <input type="text" name="edad" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Correo</label>
                      <div class="col-sm-9">
                        <input type="email" name="correo" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Sexo</label>
                      <div class="col-sm-9">
                        <select name="sexo" class="form-control">
                          <option>Masculino</option>
                          <option>Femenino</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Direccion</label>
                      <div class="col-sm-9">
                        <input type="text" name="direccion" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Contraseña</label>
                      <div class="col-sm-9">
                        <input type="password" name="password" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Confirmar Contraseña</label>
                      <div class="col-sm-9">
                        <input type="password" name="configPassword" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit"  class="btn btn-primary btn-block enter-btn" style="width: 100px;">Login</button>
                </div>
              </div>
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