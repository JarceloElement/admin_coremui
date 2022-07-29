<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.12
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="es">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Kit</title>
    <!-- Icons-->
    <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/pace-progress/css/pace.min.css" rel="stylesheet">


    <!-- MUI STYLE -->
    <link href="node_modules/mui/css/mui.min.css" rel="stylesheet" type="text/css" />
    <!-- <link href="//cdn.muicss.com/mui-latest/css/mui.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="node_modules/mui/personal/style.css" rel="stylesheet" type="text/css" />

    <!-- SweetAlert2 -->
    <!-- <link rel="stylesheet" href="node_modules/sweetalert2-theme-bootstrap-4/bootstrap-4.css"> -->
    <link rel="stylesheet" href="node_modules/sweetalert2/sweetalert2.css">


    
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show" >
    <?php if(isset($_SESSION["user_id"])):?>
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="./">UI-Kit</a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--
      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Settings</a>
        </li>
      </ul>
    -->
    
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i> Usuario
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Usuario</strong>
            </div>

            <a class="dropdown-item" href="./?action=processlogout">
              <i class="fa fa-lock"></i> Salir</a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>

    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">

            <li class="nav-item">
              <a class="nav-link" href="./">
                <i class="nav-icon icon-home"></i> Inicio
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./">
                <i class="nav-icon icon-login"></i> Ejemplo
                <!-- <i class="nav-icon fa fa-user"></i> Ejemplo -->
                <!-- <i class="cui-inbox"></i> -->
                <!-- <span class="flag-icon flag-icon-gr"></span> -->
                <!-- <span class="flag-icon flag-icon-gr flag-icon-squared"></span> -->
              </a>
            </li>

            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-star"></i> Administracion</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="./?view=users" target="_top">
                    <i class="nav-icon fa fa-th-list"></i> Usuarios</a>
                </li>
              </ul>
            </li>

          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>


      <main class="main">

        <?php View::load("index"); ?>

      </main>


      
      <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
              <i class="icon-list"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
              <i class="icon-speech"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
              <i class="icon-settings"></i>
            </a>
          </li>
        </ul>
        <!-- Tab panes-->
        <div class="tab-content">
          <div class="tab-pane active" id="timeline" role="tabpanel">
            <div class="list-group list-group-accent">
              <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Eventos</div>
              <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                <div>Evento 1
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  Hora</small>
                <small class="text-muted">
                  <i class="icon-location-pin"></i>  Lugar</small>
              </div>

            </div>
          </div>
          <div class="tab-pane p-3" id="messages" role="tabpanel">
            
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                </div>
              </div>
              <div>
                <small class="text-muted">Usuario</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Titulo</div>
              <small class="text-muted">Descripcion</small>
            </div>
            <hr>
          </div>
          <div class="tab-pane p-3" id="settings" role="tabpanel">
            <h6>Settings</h6>
            <div class="aside-options">
              <div class="clearfix mt-4">
                <small>
                  <b>Option 1</b>
                </small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox" checked="">
                  <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
              <div>

            <hr>
            <h6>Progressbar</h6>
            <div class="text-uppercase mb-1 mt-4">
              <small>
                <b>Progress 1</b>
              </small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">Descripcion.</small>
            

          </div>
        </div>
      </aside>
    </div>
    <footer class="app-footer">
      <div>
        <a href="http://evilnapsis.com/">Evilnapsis</a>
        <span>&copy; 2019</span>
      </div>
      <div class="ml-auto">
        <span>Version 1.0</span>
      </div>
    </footer>
    <?php else:?>
      <br><br><br>
      
      <!-- FORM -->
      <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                  <div class="mui-container-fluid">
                    <br>
                    <form class="mui-form" method="post" action="./?action=processlogin">
                      <h1>CoreUI-MUI Kit</h1>
                      <legend>Iniaciar sesión</legend>

                      <div class="mui-textfield mui-textfield--float-label">
                        <input type="text" required name="username">
                        <label>Nombre de usuario</label>
                      </div>

                      <div class="mui-textfield mui-textfield--float-label">
                        <input type="password" required name="password">
                        <label>Contraseña</label>
                      </div>
                      
                      <button type="submit" class="mui-btn mui-btn--primary">Iniciar</button>
                    </form>
                  </div>
                  <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php endif; ?>
    <!-- CoreUI and necessary plugins-->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/pace-progress/pace.min.js"></script>
    <script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="node_modules/sweetalert2/sweetalert2.all.min.js"></script>
    <!-- MUI -->
    <script src="node_modules/mui/js/mui.min.js"></script>
    <!-- <script src="//cdn.muicss.com/mui-latest/js/mui.min.js"></script> -->
    <script src="node_modules/mui/personal/jquery-3.2.1.min.js"></script>
    <!-- <script src="//code.jquery.com/jquery-2.1.4.min.js"></script> -->
    <script src="node_modules/mui/personal/script.js"></script>

    <!-- Material Dashboard javascript methods -->


  </body>
</html>

