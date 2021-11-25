<?php 
session_start();
require('../conexion.php');

if (!isset($_SESSION['Us_correo']))
{ 
    header('Location:../Login.php');
}

$usuario_nombre = $_SESSION['Us_nombre'];
$usuario_apellidos = $_SESSION['Us_apellidos'];
$usuario_id = $_SESSION['Us_id'];
$usuario_correo = $_SESSION['Us_correo'];

$cmd = "SELECT * FROM TabUsuarios WHERE Us_id = '$usuario_id'";
    $query = $mysqli->query($cmd);

    //Revisamos si la consulta solo tiene 1 resultado
    if($query->num_rows === 1)
    {
      $datos_usuarios = $query->fetch_array(MYSQLI_ASSOC);
    }
    //Si no hay registros con el ID entonces redireccionamos a la lista de usuarios.
    else
    {
      header('Location:Inicio.php');
    }

?>

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
    <title>CyberSecutrity | Perfil</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="../css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="../plugins/images/logo-icon.png" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../plugins/images/cybersecurity.png" width="200" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <li>
                            <a class="profile-pic" href="#">
                                <span class="text-white font-medium"><?=$usuario_nombre?> <?=$usuario_apellidos?></span></a>
                        </li>
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Inicio.php"
                                aria-expanded="false">
                                <i class="fas fa-home" aria-hidden="true"></i>
                                <span class="hide-menu">Inicio</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Perfil.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Mi Cuenta</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Tarjetas.php"
                                aria-expanded="false">
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                                <span class="hide-menu">Mi Tarjeta</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../BD/salir.php"
                                aria-expanded="false">
                                <i class="fa fa-sign-out-alt" aria-hidden="true"></i>
                                <span class="hide-menu">Cerrar Sesión</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Mi Cuenta</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="../plugins/images/fondo.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <h4 class="text-white mt-2">Bienvenido a tu Cuenta</h4>
                                        <h5 class="text-white mt-2"><?=$usuario_nombre?> <?=$usuario_apellidos?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="user-btm-box mt-5 d-md-flex">
                                <a href="Editar_Perfil.php" class="btn btn-success"><i class="fas fa-edit"></i> Editar Info.</a>
                            </div>
                        </div>

                        <div class="">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <h4 class="text-dark mt-2">Registrar Tarjeta Bancaria</h4>
                                    </div>
                                </div>
                            <form class="form-control" action="../BD/ABC_tarjeta.php" method="post">
                                <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Num. Tarjeta</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" maxlength="16" placeholder="Ingresa su Num. de Tarjeta"
                                                class="form-control p-0 border-0" name="numTar">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Fecha Vencimiento</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" maxlength="5" placeholder="MM/YY"
                                                class="form-control p-0 border-0" name="fven">
                                        </div>
                                    </div>

                                <input type="hidden" class="col-lg-12" name="valor" value="alta">
                                <input type="hidden" class="col-lg-12" name="id" value="<?=$datos_usuarios['Us_id']?>">

                                <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">CVV</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" maxlength="3" placeholder="CVV"
                                                class="form-control p-0 border-0" name="cvv">
                                        </div>
                                </div>
                            
                                <button class="btn btn-dark" type="submit"><i class="fas fa-check"></i> Registar</button>
                            </form>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Info. Personal</h3>
                            </div>
                            <div class="card-body">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0"><b>Nombre</b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input readonly type="text" value="<?=$datos_usuarios['Us_nombre']?>"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0"><b>Apellidos</b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input readonly type="text" value="<?=$datos_usuarios['Us_apellidos']?>"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0"><b>Email</b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input readonly type="email" value="<?=$datos_usuarios['Us_correo']?>"
                                                class="form-control p-0 border-0" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0"><b>Contraseña</b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input readonly type="password" value="<?=$datos_usuarios['Us_cont']?>" class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <?php

                                        include '../pruebas.php';
                                        $clave= $datos_usuarios['Us_direccion'];
                                        $claveE=SED::encryption($clave);
                                        $claveD=SED::decryption($claveE);

                                        ?>

                                        <label class="col-md-12 p-0"><b>Dirección</b></label>
                                        <div class="col-md-9 border-bottom p-0">
                                            <input readonly id="us_dir" type="text" value="<?=$claveE?>"
                                                class="form-control p-0 border-0">
                                        </div>
                                        <button class="btn btn-info" id="btn_dirD"><i class="fas fa-eye text-white"></i></button>
                                        <button class="btn btn-danger" id="btn_dirE" ><i class="fas fa-eye-slash text-white"></i></button>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0"><b>Sexo</b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input readonly type="text" value="<?=$datos_usuarios['Us_sexo']?>" class="form-control p-0 border-0">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <?php
                // base64 encodes the header json
        $arr = array('alg' => 'HS256', 'typ' => 'JWT');
        $arr2 = json_encode($arr);
        $encoded_header = base64_encode($arr2);


        // base64 encodes the payload json
        $arr3 = array('country' => $datos_usuarios['Us_direccion'], 'name' => $datos_usuarios['Us_nombre'], 'email' => $datos_usuarios['Us_correo']);
        $arr33 = json_encode($arr3);
        $encoded_payload = base64_encode($arr33);

        // base64 strings are concatenated to one that looks like this
        $header_payload = $encoded_header . '.' . $encoded_payload;

        //Setting the secret key
        $secret_key = 'clave secreta';

        // Creating the signature, a hash with the s256 algorithm and the secret key. The signature is also base64 encoded.
        $signature = base64_encode(hash_hmac('sha256', $header_payload, $secret_key, true));

        // Creating the JWT token by concatenating the signature with the header and payload, that looks like this:
        $jwt_token = $header_payload . '.' . $signature;

        //listing the resulted  JWT
        echo $jwt_token;

        /////////////////////////////////////////////////////////////////////////////////////////////////////



        echo "<br><hr>";

        //AQUI VERIFICAMOS LA FIRMA

        //Verifying the Signature

        $recievedJwt = $jwt_token;

        $secret_key = 'clave secreta';

        // Split a string by '.' 
        $jwt_values = explode('.', $recievedJwt);

        // extracting the signature from the original JWT 
        $recieved_signature = $jwt_values[2];

        // concatenating the first two arguments of the $jwt_values array, representing the header and the payload
        $recievedHeaderAndPayload = $jwt_values[0] . '.' . $jwt_values[1];

        // creating the Base 64 encoded new signature generated by applying the HMAC method to the concatenated header and payload values
        $resultedsignature = base64_encode(hash_hmac('sha256', $recievedHeaderAndPayload, $secret_key, true));

        // checking if the created signature is equal to the received signature
        if($resultedsignature == $recieved_signature) {

            // If everything worked fine, if the signature is ok and the payload was not modified you should get a success message
            echo "Success";
        } else {

            echo "Password no valida";

        }
            ?>
            <br><br><br><br><br>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../js/custom.js"></script>
    <script>
        $(document).ready(function () 
        {
            $("#btn_dirD").click(function () {
            $("#us_dir").val("<?=$claveD?>");
        });

            $("#btn_dirE").click(function () {
            $("#us_dir").val("<?=$claveE?>");
        });
    });
    </script>
</body>

</html>