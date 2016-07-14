
<?php error_reporting (0);




?>


<?php

include('Class/motor.php');

$cedula=$_GET['var'];
$usuario=$_GET['var2'];





$notas=$_POST['notas'];
$medico_notas=new medico();

$medico_notas->notasMedico($cedula,$usuario,$notas);



if($notas<>"")

{
      echo "<script language='javascript'>alert('La nota del paciente se ha ingresado correctamente')</script>";
	}














?>
