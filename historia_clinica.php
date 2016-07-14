<?php
//Se utiliza el include para llamar a el archivo maotor.php
include ("Class/motor.php");
//Se recibe una variable por el metodo GET y se asigna a la variable $cedula
$cedula=$_GET['var'];

//Se instancia la clase medico 
$medico=new medico();
echo "<br>";
//Se llama el metodo Historia_Clinica
$medico->Historia_clinica($cedula);


?>
