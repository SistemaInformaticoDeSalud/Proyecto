<?php

include('Class/motor.php');

$id=$_GET['var'];

//Prueba
$medico_Triage= new medico();

$medico_Triage->consultaTriage($id);

?>