 <link href="css/estilos3.css" rel="stylesheet" type="text/css">

          <script type="text/javascript" >
        function go(url)
        {
            document.getElementById('iframe8').src = url; 
    
        }
        
        
    </script>


<?php
include('Class/motor.php');

$cedula=$_GET['cc'];

$sql = mysql_query("SELECT * FROM pacientes");
while ($filas = mysql_fetch_array($sql)){
	$cc=$filas[2];
} 
if ($cc==$cedula) {

//$sql=mysql_query("SELECT * FROM pacientes WHERE Cedula=$cedula ORDER BY `id` DESC LIMIT 10");

$sql=mysql_query("SELECT * FROM pacientes WHERE Cedula=$cedula");
  
    echo  "
        <table border=”0 cellpadding=”0? cellspacing=”0? >
        <tr>
        <th >Cedula</th>
        <th >Nombre</th>
        <th >Apellidos</th>
        <th >Sexo</th>
        <th >Edad</th>
        <th >Prescripcion Medica</th>
        <th >Interconsulta</th>
        <th >F/Cardiaca</th>
        <th >F/Respiratoria</th>
        <th >P/Arterial</th>
        <th >Temperatura</th>
        <th >Fecha</th>
        <th >Hora</th> ";


while ($filas = mysql_fetch_array($sql)){ 
    echo "<tr>
        <td id=cedula>$filas[2]</td>
        <td >$filas[0]<nombre</td>
        <td >$filas[1]</td>
        <td> $filas[3]</td>
        <td >$filas[4]</td>
        <td >$filas[15]</td>
        <td >$filas[19]</td>
        <td >$filas[21]</td>
        <td >$filas[22]</td>
        <td >$filas[23]</td>
        <td >$filas[24]</td>
        <td >$filas[18]</td>
        <td >$filas[12]</td>

        </tr> ";

 } 
echo "</table>";
}
else {
	echo "<section id=contenido2>

    <br><font color=#F2630D><label>El Numero Cedula<br>No Se Ha Encontrado</label></font><br><br>
     

      <section id=jc>
          <a href=hc.php> Aceptar </a>
      </section>
       </section>
	";
}

?>