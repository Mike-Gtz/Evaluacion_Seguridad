<?php

session_start();

if (isset($_POST['correo']) && isset($_POST['pwd'])) 
{
	require('conexion.php');

	$usuario = $_POST['correo'];
	$password = $_POST['pwd'];

	$cmd = "SELECT * FROM TabUsuarios WHERE Us_correo LIKE BINARY '$usuario'";
	$query = $mysqli->query($cmd);

	if ($query->num_rows > 0) 
	{
		$datos_usuario = $query->fetch_array(MYSQLI_ASSOC);

		if (md5($password) === $datos_usuario['Us_cont']) 
		{

				$cmd2 = "SELECT * FROM TabUsuarios WHERE Us_correo LIKE '$usuario'";
                $query2 = $mysqli->query($cmd2);
                $datos_usuario2 = $query2->fetch_array(MYSQLI_ASSOC);

					$_SESSION['Us_correo']    = $datos_usuario['Us_correo'];
                    $_SESSION['Us_id']  = $datos_usuario2['Us_id'];
                    $_SESSION['Us_nombre']    = $datos_usuario2['Us_nombre'];
                    $_SESSION['Us_apellidos']    = $datos_usuario2['Us_apellidos'];
			header('Location:/Seguridad/admin/Inicio.php');
		}
		else 
                {
                    header('Location:../Login.php');
                }
	}
	else 
                {
                    header('Location:../Login.php');
                }
}