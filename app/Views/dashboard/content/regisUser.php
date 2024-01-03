<div id="container_regisUser">
  <div class="form_regisUser">
    <h1>Registrar Usuario</h1>
    <form class="formulario_Usuario" name="formulario_Usuario" method="POST"
      action="<?php echo base_url()?>EnviarUsuario">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Apellido</label>
          <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Cedula</label>
          <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cedula">
        </div>

        <div class="form-group col-md-6">
          <label for="inputPassword4">Telefono</label>
          <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Correo</label>
          <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo">
        </div>

        <div class="form-group col-md-6">
          <label for="inputPassword4">Edad</label>
          <input type="text" class="form-control" id="edad" name="edad" placeholder="Edad">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Sexo</label>
          <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Sexo">
        </div>

      </div>
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active"><input type="radio" name="tipoUsuario" id="tipoUsuario" value="1">
                Campista</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><input type="radio" name="tipoUsuario" id="tipoUsuario" value="2">
                Senderista</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><input type="radio" name="tipoUsuario" id="tipoUsuario" value="3"> Guia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><input type="radio" name="tipoUsuario" id="tipoUsuario" value="4"> Guarda
                Parque</a>
            </li>

          </ul>
        </div>
        <div class="card-body">
          <div class="form-group col-md-6">
            <div class="form-group col-md-4">
              <label for="inputState">Ruta de Inicio</label>
              <select id="rutaIni" class="form-control" name="rutaIni">
                <option selected>Ruta Inicio</option>
                <?php foreach($rutas as $key){?>
                <option value="<?php echo $key->id?>"><?php echo $key->nombre_ruta?>
                </option>
                <?php }?>
              </select>
            </div>
          </div>

          <div class="form-group col-md-6">
            <div class="form-group col-md-4">
              <label for="inputState">Ruta de Destino</label>
              <select id="rutaDes" class="form-control" name="rutaDes">
                <option selected>Ruta Destino</option>
                <?php foreach($rutas as $key){?>
                <option value="<?php echo $key->id?>"><?php echo $key->nombre_ruta?>
                </option>
                <?php }?>
              </select>
            </div>
          </div>

          <div class="form-group col-md-6">
            <label for="inputPassword4">Fecha para campistas</label>
            <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha para campistas">
          </div>

        </div>

      </div>
      <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
  </div>


</div>