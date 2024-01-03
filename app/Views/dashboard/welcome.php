<div id="containerDashboard">

  <aside>
    <h3>las rutas que se encuentran programadas </h3>

  </aside>

<main>

  <section>


    <div id="section_tabla">
      <h1>ruta activa</h1>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Ruta Inicio</th>
            <th scope="col">Ruta Destino</th>
            <th scope="col">Fecha</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>
        <tbody>
          <?php 
              
              foreach($usuarios as $key ){
                  
                  ?>
          <tr>
  
            <th scope="row">
              <?php echo $key->id; ?>
            </th>
            <td>
              <?php echo $key->nombre; ?>
            </td>
            <td>
              <?php echo $key->apellido; ?>
            </td>
            <td>
              <?php echo $key->telefono; ?>
            </td>
            <td>
              <?php echo $key->correo; ?>
            </td>
            <td>
              <?php echo $key->nombre_ruta; ?>
            </td>
            <td>
              <?php echo $key->rutaDestino; ?>
            </td>
            <td>
              <?php echo $key->fecha; ?>
            </td>
            <td>
              <?php echo $key->estado; ?>
            </td>
  
  
          </tr>
          <?php }?>
        </tbody>
      </table>
  
  
      </tbody>
      </table>
  
    </div>


  </section>

  <section>
    <div class="section_personas">
      <h1>Personas Registradas</h1>
  
    </div>

  </section>


</main>









</div>