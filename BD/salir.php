<?php
session_start();
/*
Para eliminar el valor de las sesiones
utilizamos la función
"session_destroy();"
*/

session_destroy();
//Regresamos al login
header('Location:../Login.php');