<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>CyberSecurity | Inicio Sesión</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
        <div class="page-wrapper">
            <div  style="background-color: #000">
                <div class="row align-items-center" style="background-color: #000">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: #000">
                        <br><br>
                        <h4 class="page-title text-center text-white" style="background-color: #000">Inicio de Sesión</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <br>
            <br>

            <div class="row">

                <?php if (isset($_GET['mensaje'] )) : ?>

                  <div class = "row">
                
                    <div class = "col-sm-12 mt-3 mb-3">

                      <?php switch($_GET['mensaje']) : 
                      //Exito de accion
                      case 1:
                      ?>
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        Acción realizada satisfactoriamente.
                          <button type = "button" class = "close" data-dismiss = 'alert'>
                            <i class="fas fa-times text-white"></i>
                          </button>
                      </div>
                      <?php
                      break;

                      //Error de inserción a la tabla usuario
                      case 2:
                      ?>
                      <div class="alert alert-warning">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                          Usuario no Correcto
                        <button type = "button" class = "close" data-dismiss = 'alert'>
                            <i class="fas fa-times"></i>
                        </button>
                      </div>
                      <?php
                      break;

                      //Usuario eliminado correctamente
                      case 3:
                      ?>
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                          Se ha eliminado correctamente.
                        <button type = "button" class = "close" data-dismiss = 'alert'>
                            <i class="fas fa-times"></i>
                        </button>
                      </div>
                      <?php
                      break;
                      endswitch; ?>
                
                    </div> <!-- /.col-sm-12 -->
              
                  </div> <!-- /.row -->
                <?php endif; ?>
                <!-- Terminan mensajes de error -->
                
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <img src="plugins/images/cybersecurity.png" width="400" alt="homepage" />
                        </div>
                        <div class="car-body">
                            <form class="form-horizontal form-material" method="post" action="BD/login.php">
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Correo</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="email" placeholder="Agregue su correo electrónico"
                                                class="form-control p-0 border-0" name="correo"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Contraseña</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="password" name="pwd" placeholder="Contraseña" class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                    <div class="form-group mb-5 text-center">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Entrar</button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                        <div class="crad-footer">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <label>¿Desea Unirse?</label>
                                    <br>
                                    <a href="Registro.php" class="btn btn-orange">Unirse</a>
                            </div>
                            <div class="col-md-6 text-center">
                                <br><br>
                                    <a href="Recuperar_Cont.php">Olvidé mi contraseña</a>
                            </div>
                        </div>
                                
                            </div>
                    </div>
                </div>
                <div class="col-lg-4">
                </div>
                <br>&nbsp;
                <br>&nbsp;
                <br>&nbsp;
                <br>&nbsp;
                <br>&nbsp;
                <br>&nbsp;
                <br>&nbsp;
                <br>&nbsp;
                <br>&nbsp;
                <br>&nbsp;
                <br>&nbsp;
                <br>&nbsp;
                <br>&nbsp;
                <br>&nbsp;
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>