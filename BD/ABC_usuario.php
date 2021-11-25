<?php

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
            $sexo_Usuario     = $_POST['sexo'];

    	   $cmd  = "INSERT INTO TabUsuarios VALUES(
           0,
           '$nom_Usuario',
           '$ap_Usuario',
           '$correo_Usuario',
           md5('$cont_Usuario'),
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
            $id_Usuario       = $_POST['id'];
    		$nom_Usuario       = $_POST['nombre'];
            $ap_Usuario     = $_POST['apellidos'];
            $correo_Usuario     = $_POST['correo'];
            $cont_Usuario     = $_POST['pwd'];
            $direccion_Usuario     = $_POST['direccion'];
            $sexo_Usuario     = $_POST['sexo'];

            $cmd = "UPDATE TabUsuarios SET 
            Us_nombre = '$nom_Usuario', 
            Us_apellidos = '$ap_Usuario', 
            Us_correo = '$correo_Usuario', 
            Us_cont= md5('$cont_Usuario'), 
            Us_sexo = '$sexo_Usuario', 
            Us_direccion = '$direccion_Usuario'
            WHERE Us_id = '$id_Usuario'";

            if($mysqli->query($cmd)) 
            {
                $mysqli->close(); 
                header('Location:../admin/Perfil.php');            
            }
            else 
            {
                $error = $mysqli->error;
                $mysqli->close();
                header('Location:../admin/Editar_Perfil.php/'.$error);
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