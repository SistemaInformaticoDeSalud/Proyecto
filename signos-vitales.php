<?php

include ("Class/motor.php");

$cedula=$_GET['var'];
$usuario=$_GET['var2'];
$fCardiaca=$_POST['fCardiaca'];
$fRespiratoria=$_POST['fRespiratoria'];
$pArterial=$_POST['pArterial'];
$temperatura=$_POST['temperatura'];

$enfermera=new enfermera();
$enfermera->signosVitales($cedula,$usuario,$fCardiaca,$fRespiratoria,$pArterial,$temperatura);
if($fCardiaca<>""&&$fRespiratoria<>""&&$pArterial<>""&&$temperatura<>"")

{
      echo "<script language='javascript'>alert('Los signos vitales se han ingresado')</script>";
	}

?>