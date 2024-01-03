<div class="container_rutas">
<?php foreach($rutas as $key){?>
    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/<?php echo $key->img_ruta?>" alt="Card image">
      <div class="card-body">
        <h4 class="card-title"><?php echo $key->nombre_ruta?></h4>
        <p class="card-text">Nivel de la Ruta: <?php echo $key->nivel?></p>
        <a href="<?php echo $key->id?>" class="btn btn-primary">información</a>
      </div>
    </div>
    <?php } ?>
  

  </div>

  

