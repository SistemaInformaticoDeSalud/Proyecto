
<?php error_reporting(0);

?>


<?php





include('Class/motor.php');

$usuario=$_GET['var'];
$tipo=$_GET['var2'];

if ($tipo=="enfermera")


{


$paci=new pacientes();

$tabla2="pacientes_hospitalizados";
$paci->listaMedico($tabla2,$usuario,$tipo);



}
	else
	{


	$paci=new pacientes();

	$tabla1="pacientes_medico";
	$tabla2="pacientes_hospitalizados";
	$paci->listaMedico($tabla1,$usuario,$tipo);
	$paci->listaMedico($tabla2,$usuario,$tipo);

	}	


?>