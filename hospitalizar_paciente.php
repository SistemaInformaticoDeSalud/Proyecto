<?php

/**
 * @author gencyolcu
 * @copyright 2016
 */

include('Class/motor.php');
$cedula=$_GET['var'];


$medico = new medico();

$medico->hopitalizarPaciente($cedula);




?>