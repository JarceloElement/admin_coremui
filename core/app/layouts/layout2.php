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
    <title>CoreUI Kit - Dashboard</title>
    <!-- Icons-->
    <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/pace-progress/css/pace.min.css" rel="stylesheet">

    <!-- MUI STYLE -->
    <link href="mui/css/mui.min.css" rel="stylesheet" type="text/css" />
    <!-- <link href="//cdn.muicss.com/mui-latest/css/mui.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="mui/personal/style.css" rel="stylesheet" type="text/css" />

    <script src="mui/js/mui.min.js"></script>
    <!-- <script src="//cdn.muicss.com/mui-latest/js/mui.min.js"></script> -->
    <script src="mui/personal/jquery-3.2.1.min.js"></script>
    <!-- <script src="//code.jquery.com/jquery-2.1.4.min.js"></script> -->
    <script src="mui/personal/script.js"></script>
  </head>




  <!-- <body> -->
  <body>
    <?php if(isset($_SESSION["user_id"])):?>
    
      <div id="sidedrawer" class="mui--no-user-select mui--z1">
        <!-- Branding logo -->
        <div id="sidedrawer-brand" class="mui--appbar-line-height">
          <a class="mui--text-title" href="./">
          <i class="nav-icon icon-home"></i> My-App</a>
        </div>

        <!-- linea divisoria -->
        <div class="mui-divider"></div>

        <!-- side menu -->
        <ul>
          <li>
            <strong><i class="icon-menu"></i> Botones</strong>
            <ul>
              <div><button class="mui-btn mui-btn--raised">Button</button></div>
              <div><button class="mui-btn mui-btn--raised mui-btn--accent">Button</button></div>
              <div><button class="mui-btn mui-btn--raised mui-btn--primary">Button</button></div>
            </ul>
          </li>

          <li>
            <strong><i class="icon-user"></i> Usuario</strong>
            <ul>
              <a class="mui-btn mui-btn--raised" href="./?view=users" target="_top"> <i class="fa fa-users"></i> Usuarios</a>
              <a class="mui-btn mui-btn--accent" href="./?action=processlogout"> <i class="fa fa-lock"></i> Salir</a>
            </ul>
          </li>
        </ul>
      </div>

      <!-- header anima side-menu el js esta en: mui/personal/script-->
      <header id="header">
        <div class="mui-appbar mui--appbar-line-height mui--z1">
          <div class="mui-container-fluid">
            <a class="sidedrawer-toggle mui--visible-xs-inline-block mui--visible-sm-inline-block js-show-sidedrawer"><i class="icon-menu"></i></a>
            <a class="sidedrawer-toggle mui--hidden-xs mui--hidden-sm js-hide-sidedrawer"><i class="icon-menu"></i></a>
            <button class="mui-btn mui-btn--raised">Button</button>
          </div>
        </div>
      </header>



      <!-- main -->
      <main class="main">
        <?php View::load("index"); ?>
      </main>



    <!-- login | si no hay datos de usuario en _SESSION solo carga este html del form -->
    <?php else:?>
      <br><br><br>
<!-- FORM -->
<div class="container">
<div class="row justify-content-center">

  <div class="card">
    <div class="card-body">
      <div class="col-md-12">
        <div class="mui-container-fluid">
            <br>
          <h1>CoreUI Kit</h1>
          <p class="text-muted">Iniciar sesion</p>

          <form role="mui-form" method="post" action="./?action=processlogin">

            <div class="mui-textfield mui-textfield--float-label">
                <input type="text" required name="username">
                <label>Nombre de usuario</label>
            </div>
            <div class="mui-textfield mui-textfield--float-label">
              <input type="password" required name="password">
              <label>Contraseña</label>
            </div>

                <!-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-user"></i>
                    </span>
                  </div>
                  <input class="form-control" type="text" required name="username" placeholder="Nombre de usuario">
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                  </div>
                  <input class="form-control" type="password" required name="password" placeholder="Password">
                </div> -->

            <div class="row">
              <div class="col-12">
                <!-- <button type="submit" class="btn btn-primary px-4" type="button">Iniciar sesion</button> -->
                <button type="submit" class="mui-btn mui-btn--raised mui-btn--primary" type="button">Iniciar sesion</button>
              </div>
              
            </div>
          </form>
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
  

  </body>

</html>
