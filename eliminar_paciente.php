<?php

/**
 * @author gencyolcu
 * @copyright 2016
 */
include('Class/motor.php');
$cedula=$_GET['cedula'];
$p1 = new pacientes();
$p1->eliminarpaciente($cedula);




?>