
 <link href="css/estilos3.css" rel="stylesheet" type="text/css">

          <script type="text/javascript" >
        function go(url)
        {
            document.getElementById('iframe8').src = url; 
    
        }
        
        
    </script>

<?php

include('Class/motor.php');

echo "
<form class='contact_form1' method='GET'  action='hc2.php'>

 <ul>
        <li>
             <h2>Ingrese Cedula del paciente</h2>
        </li>
        <li>
            <label for='cc'>Numero De cedula</label>
            <input type='text' name='cc' placeholder='Número de cedula' required />
        </li>
        <li>
         <button class='submit' type='submit'>Enviar</button>
        </li>
    </ul>
    </form>";

?>