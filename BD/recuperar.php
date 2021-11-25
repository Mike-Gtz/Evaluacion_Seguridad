<?php

require('conexion.php');

if (isset($_POST)) 
{

	$Us_cont    = $_POST['pwd'];
	$Us_correo    = $_POST['correo'];

	$cmd = "UPDATE TabUsuarios SET 
            Us_cont = md5('$Us_cont') 
            WHERE Us_correo = '$Us_correo'";

            if($mysqli->query($cmd)) 
            {
                $mysqli->close(); 
                header('Location:../Login.php?mensaje=1');            
            }
            else 
            {
                $error = $mysqli->error;
                $mysqli->close();
                header('Location:../Recuperar_Cont.php?mensaje=2&valor='.$error);
            }
    	

}