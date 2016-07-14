<?php error_reporting (0);




?>



              <link href="css/estilos3.css" rel="stylesheet" type="text/css">   




<?php
require ('Class\motor.php');
/**
 * @author gencyolcu
 * @copyright 2016
 */

$cedula=$_GET['var'];


echo 
    
     "

<br>
<br>
<br>
<br>
<br>  

   
     <center>
 
     <form action=prescripcion_Medica.php?var=$cedula method=post id=pres>

		<table >
		<tr>
			<td colspan=2 align=center>Introduzca Medicamento</td>
		</tr>
		<tr>
			<td><input name=medi type=text  size=20 required></td>
			<td><input type=submit value=Enviar></td>
		</tr>
		</table>
	</form></center>";





$cedula=$_GET['var'];

$paciente= new pacientes;
$medicamento=$_POST['medi'];
$var=$_GET['var2'];
$paciente->registrarMedicamento($medicamento,$cedula);



	






?>