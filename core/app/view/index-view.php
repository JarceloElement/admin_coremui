    


<div class="container">
  <br>
    <div class="card_back">
      <div class="card-body">
        <div class="col-md-12">
          <div class="mui-container-fluid">


            <!-- imagen -->
            <div class="container-fluid">
              <div class="animated fadeIn">
                <div class="row">
                  <div class="col-md-12">
                  <img style=" width: 10%; height: auto; z-index: 1;" src="storage/images/bot.png" border="0">
                </div>
                </div>
              </div>
              <br>
            </div>

            <!-- SALUDO -->
            <div class="card">
              <div class="card-header">
                <legend>¡Bienvenid@s a las prácticas de programación!</legend>
              </div>
              <div class="card-body">
                <h6>Este es un kit de desarrollo con la plantilla CoreUI/MUI y el microframework Legobox con PHP y MySQL</h6>
                <h6>Compilado por Jarcelo</h6>
                <legend>Usuarios registrados: <?php echo count(UserData::getAll());?></legend>
              </div>
            </div>

            <div class="container-fluid">
              <div class="animated fadeIn">
                <div class="row">
                
                  <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-primary">
                      <div class="card-body pb-0">

                        <div class="text-value"><?php echo count(UserData::getAll()); ?></div>
                        <div>Usuarios</div>
                      </div>
                      <br>
                    </div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-success">
                      <div class="card-body pb-0">

                        <div class="text-value">0</div>
                        <div>Sin Usar</div>
                      </div>
                      <br>
                    </div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-dark">
                      <div class="card-body pb-0">

                        <div class="text-value">0</div>
                        <div>Sin Usar</div>
                      </div>
                      <br>
                    </div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-secondary">
                      <div class="card-body pb-0">

                        <div class="text-value">0</div>
                        <div>Sin Usar</div>
                      </div>
                      <br>
                    </div>
                  </div>
                  <!-- /.col-->
                </div>
                <!-- /.row-->
              </div>
            </div>


            
            <!-- FORM -->
            <!-- <div class="mui-container-fluid">
              <br>
              <form class="mui-form">
                <legend>Ejemplo de formulario de registro</legend>

                <div class="mui-textfield mui-textfield--float-label">
                  <input type="text">
                  <label>Nombre de usuario</label>
                </div>

                <div class="mui-textfield mui-textfield--float-label">
                  <input type="text" value="">
                  <label>Clave</label>
                </div>

                <div class="mui-textfield mui-textfield--float-label">
                  <textarea>Value on load</textarea>
                  <label>Descripción</label>
                </div>

                <div class="mui-textfield mui-textfield--float-label">
                  <input type="date">
                </div>

                <button type="submit" class="mui-btn mui-btn--raised">Submit</button>
              </form>
            </div>
            <br> -->

          

          </div>
        </div>
      </div>
    </div>
</div>

  <br>
    
    
  
    
    
    
    
    