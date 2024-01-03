<div id="containter_regisRuta">
<h1>Registrar Rutas</h1> 

<div class="formRutas" >
  <form class="formulario_rutas" name="formulario_rutas" method="POST" action="<?php echo base_url()?>EnviarRuta">
    <div class="form-group">
      <label for="exampleFormControlInput1">Nombre de la ruta</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre_ruta" placeholder="Nombre">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Nivel de Ruta</label>
      <select class="form-control" id="exampleFormControlSelect1" name="nivel">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1" >Descripción</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="descripcion"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Foto de la ruta</label>
      <input type="file" class="form-control" id="exampleFormControlInput1" name="img_ruta" placeholder="name@example.com">
    </div>
    <div class="form-group">
      <input type="submit" class="form-control" value="enviar">
    </div>
  </form>


</div>





</div>