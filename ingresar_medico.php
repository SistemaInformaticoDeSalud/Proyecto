<?php

/**
 * @author gencyolcu
 * @copyright 2016
 */
 //En esta parte del codigo se instancia a pacientes en un objeto llamado "p" y en este objeto se llama al metodo "registar Medico"
include('Class/motor.php');
$cedula=$_GET['cedula'];
$p = new pacientes();
$p->registrarMedico($cedula);



?>
