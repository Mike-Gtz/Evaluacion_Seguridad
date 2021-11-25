<?php
session_start();

require('conexion.php');

if (isset($_POST)) {

	$valor    = $_POST['valor'];

    switch ($valor) 
    {
    	case 'alta':

            $nom_Usuario       = $_POST['nombre'];
            $ap_Usuario     = $_POST['apellidos'];
            $correo_Usuario     = $_POST['correo'];
            $cont_Usuario     = $_POST['pwd'];
            $direccion_Usuario     = $_POST['direccion'];
            $sexo_Usuario     = $_POST['direccion'];

    	   $cmd  = "INSERT INTO Usuarios VALUES(
           0,
           '$nom_Usuario',
           '$ap_Usuario',
           '$correo_Usuario',
           'md5($cont_Usuario)',
           '$sexo_Usuario',
           '$direccion_Usuario')";

    	if($mysqli->query($cmd)) 
    	{
        	$mysqli->close();
        	header('Location:../Login.php?mensaje=1');
    	}
    	else 
    	{
        	$error = $mysqli->error;
        	$mysqli->close();
        	header('Location:../Registro.php?mensaje=2&valor='.$error);
    	}
    	
    		break;

    		case 'editar':
    		$id_Usuario        = $_POST['id'];
            $nom_Usuario       = $_POST['nombre'];
            $appat_Usuario     = $_POST['appat'];
            $apmat_Usuario     = $_POST['apmat'];
            $tipo_Usuario     = $_POST['tipou'];
            $tel_Usuario     = $_POST['telefono'];
            $correo_Usuario     = $_POST['correo'];
            $contraseña_Usuario     = $_POST['pwd'];
            $status_Usuario  = $_POST['estatus'];

            $cmd = "UPDATE Usuarios SET 
            nombre = '$nom_Usuario', 
            appat = '$appat_Usuario', 
            apmat = '$apmat_Usuario', 
            tipou = '$tipo_Usuario', 
            telefono = '$tel_Usuario', 
            correo = '$correo_Usuario',
            pwd = '$contraseña_Usuario', 
            estatus = '$status_Usuario' 
            WHERE id = '$id_Usuario'";

            if($mysqli->query($cmd)) 
            {
                $mysqli->close(); 
                header('Location:../admin/listaUsuarios.php?mensaje=1');            
            }
            else 
            {
                $error = $mysqli->error;
                $mysqli->close();
                header('Location:../admin/listaUsuarios.php?mensaje=2&valor='.$error);
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