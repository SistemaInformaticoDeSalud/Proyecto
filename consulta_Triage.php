<?php

include('Class/motor.php');

$id=$_GET['var'];


$medico_Triage= new medico();

$medico_Triage->consultaTriage($id);

?>