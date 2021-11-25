<?php

if (!isset($_SESSION['correo']))
{ 
    header('Location:../../login.php?error=1');
}

require('conexion.php');

if (isset($_POST)) {

	$valor    = $_POST['valor'];

    switch ($valor) 
    {
    	case 'alta':

            $num_Tarjeta       = $_POST['numTar'];
            $fven_Tarjeta     = $_POST['fven'];
            $cvv_Tarjeta     = $_POST['cvv'];
            $us_Tarjeta     = $_POST['id'];

    	   $cmd  = "INSERT INTO TabTarjetas VALUES(
           0,
           '$num_Tarjeta',
           '$fven_Tarjeta',
           '$cvv_Tarjeta',
           '$us_Tarjeta')";

    	if($mysqli->query($cmd)) 
    	{
        	$mysqli->close();
        	header('Location:../admin/Perfil.php?mensaje=1');
    	}
    	else 
    	{
        	$error = $mysqli->error;
        	$mysqli->close();
        	header('Location:../admin/Inicio.php?mensaje=2&valor='.$error);
    	}
    	
    		break;

    		case 'editar':
    		$id_Tar        = $_POST['id'];
            $num_Tar       = $_POST['tarNum'];
            $cvv_Tar     = $_POST['tarCvv'];
            $fven_Tar     = $_POST['tarFven'];

            $cmd = "UPDATE TabTarjetas SET 
            Tar_num = '$num_Tar', 
            Tar_cvv = '$cvv_Tar', 
            Tar_fven = '$fven_Tar'
            WHERE Tar_id = '$id_Tar'";

            if($mysqli->query($cmd)) 
            {
                $mysqli->close(); 
                header('Location:../admin/Tarjetas.php');            
            }
            else 
            {
                $error = $mysqli->error;
                $mysqli->close();
                header('Location:../admin/Verificacion.php');
            }
    	
    		break;

		  default:

    		$id = $_GET['id'];

			$cmd = "UPDATE Usuarios SET estatus = 'B' WHERE id = '$id'";
    

			if($mysqli->query($cmd)) 
			{            
    			$mysqli->close(); 
    			header('Location:../admin/listaUsuarios.php?mensaje=3');
			}
			else
			{
    			$error = $mysqli->error;
    			$mysqli->close();
    			header('Location:../admin/listaUsuarios.php?mensaje=2&valor='.$error);
			}

    	break;
     	
    }
}