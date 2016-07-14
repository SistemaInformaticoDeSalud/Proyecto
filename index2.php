

<?php
include('Class/motor.php');

$usuario=$_GET['var'];


 $query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
         $sql=mysql_query($query);
    while ($row = mysql_fetch_array($sql))
    {
        
        $tipo=$row[9]; 
         
    }



if($tipo=="triage")
{

$enfermera= new enfermera();

   $enfermera->usuario = $_GET['var']; 

$enfermera->consultar();




}

else 


if($tipo=="admisiones")
{

$admi= new administrativo();

   $admi->usuario = $_GET['var']; 

$admi->consultar();



}

else

if($tipo=="medico")
{

$medico= new medico();

   $medico->usuario = $_GET['var']; 


$medico->consultar();







}



?>