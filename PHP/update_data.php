<?php
  session_start();
  include "../../../connect_e_health.php";  
  
  $link=db_Connection();
  $sexo = array("hombre", "mujer");
  $incidentes=0;

  for ($n=0; $n<256; $n++){
    $sex = $sexo(rand(0,1));
    $edad = rand(58, 81);


 
    $peticion_creacion="INSERT INTO paciente_big_data VALUES(NULL, $n, '".$sex."', $edad, $incidentes)";

    $link->query($peticion_update);
  }

  $link->close();
  
 
 ?>