<!DOCTYPE html>
<html>
<head>
	<title>Encriptación | Desencriptación</title>
</head>
<body>
	<?php
	include 'pruebas.php';
	$clave='Contraseña secreta';

	echo $clave.'<br>';

	$claveE=SED::encryption($clave);

	echo $claveE.'<br>';

	$claveD=SED::decryption($claveE);

	echo $claveD;
	?>

</body>
</html>