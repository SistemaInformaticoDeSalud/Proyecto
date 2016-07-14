<?php
//Se llama el archivo motor.php mediante el include 
include ("Class/motor.php");
//Se reciben las variables mediante el metodo GET y POST 
$cedula=$_GET['var'];
$usuario=$_GET['var2'];
$fCardiaca=$_POST['fCardiaca'];
$fRespiratoria=$_POST['fRespiratoria'];
$pArterial=$_POST['pArterial'];
$temperatura=$_POST['temperatura'];

//Se instancea la clase enfermera
$enfermera=new enfermera();
//Se llama el metodo signosVitales
$enfermera->signosVitales($cedula,$usuario,$fCardiaca,$fRespiratoria,$pArterial,$temperatura);
if($fCardiaca<>""&&$fRespiratoria<>""&&$pArterial<>""&&$temperatura<>"")

{
      echo "<script language='javascript'>alert('Los signos vitales se han ingresado')</script>";
	}

?>
