
 
 <?php
include('Class/motor.php');
date_default_timezone_set("America/Bogota");
$time = date("d/m/Y H:i:s"); 
$paciente = new pacientes();
if($_POST)
{
    
   $paciente->nombre = $_POST['nombre']; 
   $paciente->apellidos = $_POST['apellido'];  
   $paciente->cedula = $_POST['cedula'];  
   $paciente->genero = $_POST['sexo'];  
   $paciente->edad = $_POST['edad'];  
   $paciente->estado = $_POST['estado'];  
   $paciente->telefono = $_POST['telefono'];  
   $paciente->direccion = $_POST['direccion'];  
   $paciente->medicamentos = $_POST['medicamentos'];  
   $paciente->motivo = $_POST['motivo'];  
   $paciente->antecedentes = $_POST['antecedentes'];  
   $paciente->clasificacion = $_POST['clasificacion'];  
   $paciente->hora =date ("H:i",time());
    
    $paciente->registrar( $paciente->nombre, $paciente->apellidos,$paciente->cedula,$paciente->genero,$paciente->edad,
      $paciente->estado, $paciente->telefono,  $paciente->direccion,$paciente->medicamentos,$paciente->motivo,$paciente->antecedentes,
        $paciente->clasificacion,  $paciente->hora  );


echo "<script language='javascript'>alert('El registro se ha insertado correctamente')</script>";




    
}



?>            
<!DOCTYPE HTML>

<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />
 <link href="css/estilos.css" rel="stylesheet" type="text/css">
	<title>Untitled 7</title>
</head>

<body>




<form method=post action="" id=tria> 
        
         <h1 >TRIAGE</h1>
         <label class=nombres>Nombres <label/>
         <label class=nombres1>Edad <label/><br>
         <input type=text  class=campos  title=Verifique los datos ingresado name=nombre pattern=   ^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]{2,24}[\s]*)+$ placeholder='Primera letra en mayuscula' required>
         <input type=text  class=campos1  title=Verifique los datos ingresado name=edad pattern='^[0-9]{1,2}$'placeholder='Ingrese solo n�meros' required><br>
         <label class=nombres>Apellidos<label/>
       <label class=nombres1>Estado civil<label/><br>
       <input type=text  class=campos  title=Verifique los datos ingresado name=apellido pattern=   ^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]{2,24}[\s]*)+$ placeholder='Primera letra en mayuscula' required>
        <select id=civil name=estado required>
       <option></option>
            <option>Casado</option>
              <option>Soltero</option>
                    <option>Union libre</option>
                   
   
           
</select>
            
        <label class=nombres>Documento</label>
        <label class=telefono>Telefono familiar<label/><br>
        <input type=text name=cedula required class=campos placeholder='Ingrese solo n�meros' title='Ingrese solo numeros' pattern='^[0-9]{1,10}$'>
       <input type=tel name=telefono required class=campos1 placeholder='Ingrese solo n�meros' title='Ingrese solo numeros' pattern='^[0-9]{1,10}$'><br>
      <label class=nombres>Genero</label>
        <label class=direccion>Direccion de residencia<label/><br>
     <select id=genero name=sexo required>
       <option></option>
            <option>Masculino</option>
              <option>Femenino</option>
             
                   
   
           
</select>
        <input type=text  class=campos1  title=Verifique los datos ingresado name=direccion  required placeholder='Direcci�n'><br><br>
        
        
       <label id=medi>Medicamentos<label/><br>
       <textarea id=medicamentos name=medicamentos required></textarea><br><br>
       <label id=medi>Motivo de ingreso<label/><br>
       <textarea id=medicamentos name=motivo required></textarea><br><br>
      <label id=medi>Antecedentes<label/><br>
      <textarea id=medicamentos name=antecedentes required></textarea><br><br>
      <label id=medi>Clasificacion<label/><br>
       <select id=cali name=clasificacion required>
       <option></option>
            <option>1</option>
              <option>2</option>
                    <option>3</option>
                          <option>4</option>
   
           
</select>
            
   

  
     <input type=submit name=boton id=buton value=Guardar>
     
     <br><br><br>

</form>
  


</body>
</html>