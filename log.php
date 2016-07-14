<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
     <link href="css/estilos2.css" rel="stylesheet" type="text/css">
	<meta name="author" content="gencyolcu" />

	<title>Untitled 1</title>
</head>

<body>

<?php

$var=$_GET['var'];




echo "<form action=validar_usuario.php?var=$var method=post id=formul1>
 <table>
 <tr>
 <td><td><h2>Login</h2></td></td>
 
 </tr>
 
  <tr>
   <td>Usuario:</td>
   <td><input name=admin required=required type=text /></td>
  </tr>
  <tr>
   <td>Password:</td>
   <td><input name=password_usuario required=required type=password /></td> 
  </tr>
  <tr>
   <td colspan=2><input id=buton name=iniciar type=submit value=Iniciar Sesión /></td>
  </tr>
  
  


  
</table>
</form>";



?>

</body>
</html>