<?php

/**
 * @author gencyolcu
 * @copyright 2016
 */
include('Class/motor.php');
$cedula=$_GET['cedula'];
$p = new pacientes();
$p->registrarMedico($cedula);



?>