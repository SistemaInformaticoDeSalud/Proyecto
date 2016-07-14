
<?php error_reporting (0);

?>

<?php

include('Class/motor.php');

$cedula=$_GET['var'];
$usuario=$_GET['var2'];
$notas=$_POST['notas'];
$notas_enfermera=new enfermera();

$notas_enfermera->notasEnfermera($cedula,$usuario,$notas);

if($notas<>"")

{
      echo "<script language='javascript'>alert('La nota se ha ingresado')</script>";
	}
	
?>