<div class="row">
  <div class="col-sm-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Senderistas</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <h2 class="mb-0">$32123</h2>
              <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
            </div>
            <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-account-switch text-primary ml-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Guias</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <h2 class="mb-0">$45850</h2>
              <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>
            </div>
            <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-human-handsup text-danger ml-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Lugares</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <h2 class="mb-0">$2039</h2>
              <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p>
            </div>
            <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-map-marker text-success ml-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row ">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Rutas Activas</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>
                  ID
                </th>
                <th> Nombre </th>
                <th> Apellido </th>
                <th> Telefono </th>
                <th> Salida </th>
                <th> Llegada </th>
                <th> Fecha </th>
                <th> Estado </th>
                <th> Progreso</th>

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
                  <img src="assets/images/faces/face1.jpg" alt="image">
                  <span class="pl-2">
                    <?php echo $key->nombre; ?>
                  </span>
                </td>


                <td>
                  <?php echo $key->apellido; ?>
                </td>
                <td>
                  <?php echo $key->telefono; ?>
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
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>


              </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="row">

  <div class="col-md-6 col-xl-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Lugares para visitar</h4>
        <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel owl-loaded owl-drag" id="owl-carousel-basic">
          
          
          
        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-983px, 0px, 0px); transition: all 0.25s ease 0s; width: 2294px;"><div class="owl-item cloned" style="width: 317.688px; margin-right: 10px;"><div class="item">
            <img src="assets/images/dashboard/Img_5.jpg" alt="">
          </div></div><div class="owl-item cloned" style="width: 317.688px; margin-right: 10px;"><div class="item">
            <img src="assets/images/dashboard/img_6.jpg" alt="">
          </div></div><div class="owl-item" style="width: 317.688px; margin-right: 10px;"><div class="item">
            <img src="assets/images/dashboard/Rectangle.jpg" alt="">
          </div></div><div class="owl-item active" style="width: 317.688px; margin-right: 10px;"><div class="item">
            <img src="assets/images/dashboard/Img_5.jpg" alt="">
          </div></div><div class="owl-item" style="width: 317.688px; margin-right: 10px;"><div class="item">
            <img src="assets/images/dashboard/img_6.jpg" alt="">
          </div></div><div class="owl-item cloned" style="width: 317.688px; margin-right: 10px;"><div class="item">
            <img src="assets/images/dashboard/Rectangle.jpg" alt="">
          </div></div><div class="owl-item cloned" style="width: 317.688px; margin-right: 10px;"><div class="item">
            <img src="assets/images/dashboard/Img_5.jpg" alt="">
          </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="mdi mdi-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="mdi mdi-chevron-right"></i></button></div><div class="owl-dots disabled"></div></div>
        <div class="d-flex py-4">
          <div class="preview-list w-100">
            <div class="preview-item p-0">
              <div class="preview-thumbnail">
                <img src="assets/images/faces/face12.jpg" class="rounded-circle" alt="">
              </div>
              <div class="preview-item-content d-flex flex-grow">
                <div class="flex-grow">
                  <div class="d-flex d-md-block d-xl-flex justify-content-between">
                    <h6 class="preview-subject">CeeCee Bass</h6>
                    <p class="text-muted text-small">4 Hours Ago</p>
                  </div>
                  <p class="text-muted">Well, it seems to be working now.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="text-muted">Well, it seems to be working now. </p>
        <div class="progress progress-md portfolio-progress">
          <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12 col-xl-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">To do list</h4>
        <div class="add-items d-flex">
          <input type="text" class="form-control todo-list-input" placeholder="enter task..">
          <button class="add btn btn-primary todo-list-add-btn">Add</button>
        </div>
        <div class="list-wrapper">
          <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
            <li>
              <div class="form-check form-check-primary">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox"> Create invoice <i class="input-helper"></i></label>
              </div>
              <i class="remove mdi mdi-close-box"></i>
            </li>
            <li>
              <div class="form-check form-check-primary">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox"> Meeting with Alita <i class="input-helper"></i></label>
              </div>
              <i class="remove mdi mdi-close-box"></i>
            </li>
            <li class="completed">
              <div class="form-check form-check-primary">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox" checked=""> Prepare for presentation <i class="input-helper"></i></label>
              </div>
              <i class="remove mdi mdi-close-box"></i>
            </li>
            <li>
              <div class="form-check form-check-primary">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox"> Plan weekend outing <i class="input-helper"></i></label>
              </div>
              <i class="remove mdi mdi-close-box"></i>
            </li>
            <li>
              <div class="form-check form-check-primary">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox"> Pick up kids from school <i class="input-helper"></i></label>
              </div>
              <i class="remove mdi mdi-close-box"></i>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>