<?php

include ("Class/motor.php");

$cedula=$_GET['var'];

$medico=new medico();
echo "<br>";
$medico->Historia_clinica($cedula);


?>