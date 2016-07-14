<?php

include('Class/motor.php');
$paciente=new pacientes();

$tabla_pacientes_pendientes="pacientes_medico";
$tabla_pacientes_hositalizados="pacientes_hospitalizados";
$paciente->mostrar($tabla_pacientes_pendientes);

echo "<br><br><br><br>";

$paciente->mostrar($tabla_pacientes_hositalizados);
?>