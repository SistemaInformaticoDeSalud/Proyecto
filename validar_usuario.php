<?php
include('Class/motor.php');

$v = new login();
$validar = new login();

if($_POST)
{
$tipo = $_GET['var'];
$v->usuario = $_POST['admin']; 
$validar->usuario = $_POST['admin']; 
$validar->clave = $_POST['password_usuario']; 
$validar->tipo = $tipo;
$validar->var2 = $v->tipo();
$validar->triage = $tipo;
    $validar->validar();
      
}
?>


<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />

	<title>Untitled 4</title>
</head>

<body>



</body>
</html>