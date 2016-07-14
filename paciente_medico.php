
       <link href="css/estilos.css" rel="stylesheet" type="text/css">  


         <script type="text/javascript" >
        function go(url)
        {
            document.getElementById('iframe').src = url; 
    
        }
        

        
        </script>



<?php


include('Class/motor.php');

$buscador=$_POST['selec'];
$tabla=$_GET['var'];
$usuario=$_GET['var2'];
$tipo=$_GET['var3'];
$paci=new pacientes();



if($tipo=="medico")

{
$paci->cosultaPasienteMedico($buscador,$tabla);

$medi= new medico();



$medi->opciones($buscador,$tabla,$usuario,$tipo);   
 }          

else
{
$paci->cosultaPasienteMedico($buscador,$tabla);
$enfermera=new enfermera();

$enfermera->opciones($buscador,$tabla,$usuario,$tipo);


}

?>