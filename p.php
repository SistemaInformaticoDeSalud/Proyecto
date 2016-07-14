<?php

/**
 * @author gencyolcu
 * @copyright 2016
 */
include('Class/motor.php');
 $precripcion="";
$cedula=$_GET['var'];
$medicamento=$_GET['var2'];

$pacientes=new pacientes();


$sql1=mysql_query("SELECT * FROM `pacientes` WHERE `Cedula` = $cedula ORDER BY `id` DESC LIMIT 1");


while ($filas = mysql_fetch_array($sql1)){
   //Guardo los datos de la BD en las variables de php


$pacientes->nombre=$filas[0];
$pacientes->apellidos=$filas[1];
$pacientes->cedula=$filas[2];
$pacientes->genero=$filas[3];
$pacientes->edad=$filas[4];
$pacientes->estado=$filas[5];
$pacientes->telefono=$filas[6];
$pacientes->direccion=$filas[7];
$pacientes->medicamentos=$filas[8];
$pacientes->motivo=$filas[9];
$pacientes->antecedentes=$filas[10];
$pacientes->clasificacion=$filas[11];
$pacientes->hora=date ("H:i",time());

$pacientes->id=$filas[13];
$pacientes->notas=$filas[14];
 
$pacientes->prescripcion=$filas[15];
$pacientes->usuario=$filas[16];




}  

$inter="";
$notasen="";
$fcardiaca="";
$frespiratoria="";
$parterial="";
$temperatura="";

if($pacientes->prescripcion=="")
        
{
 $sql=mysql_query("UPDATE  `pacientes` SET `Medicamentos_Solicitados`='$medicamento' WHERE `Cedula` = $cedula ORDER BY `id` DESC LIMIT 1"); 

}

else
{
    $fecha = strftime( "%Y-%m-%d %H-%M-%S", time() );

  $id="";
    
 $query = "INSERT INTO pacientes VALUES('{$pacientes->nombre}',
                                              '{$pacientes->apellidos}',
                                              '{$pacientes->cedula}',
                                              '{$pacientes->genero}',
                                              '{$pacientes->edad}',
                                              '{$pacientes->estado}',
                                              '{$pacientes->telefono}',
                                              '{$pacientes->direccion}',
                                              '{$pacientes->medicamentos}',
                                              '{$pacientes->motivo}',
                                              '{$pacientes->antecedentes}',
                                              '{$pacientes->clasificacion}',
                                              '{$pacientes->hora}'
                                           ,
                                              '{$pacientes->id}','{$pacientes->notas}','{$medicamento}','{$pacientes->usuario}','{$id}','{$fecha}','{$inter}','{$notasen}','{$fcardiaca}','{$frespiratoria}','{$parterial}','{$temperatura}')";
        $resultado=mysql_query($query);                                         
}

 echo  "<section id=contenido2>

    
    <br><font color=#80FF80><label>El medicamento se ha solicitado</label></font><br><br>
      <section id=acep>
          <a href=logo.php> Aceptar </a>
      </section>
      
    </section>";


?>