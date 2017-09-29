<?php
  session_start();
  include "../../../connect_e_health.php";  
  
  $link=db_Connection();
 
  $peticion_suma="SELECT SUM(Verdadero) AS Verdadero from big_data WHERE ID=3";
  $link->query($peticion_suma);
  $result = $link->query($peticion_suma);

  if ($result->num_rows > 0) {
  // output data of each row
    while($row = $result->fetch_assoc()) {
      $incidentes = $row["Verdadero"];
    }
  }

  else {
    echo "0 results";
  }

  echo $incidentes;
  echo "\n";

  $peticion_update="UPDATE paciente_big_data SET Incidentes=$incidentes Where Paciente = $paciente";

  $link->query($peticion_update);

  $link->close();
  
  $link=db_Connection();
  $peticion_update="UPDATE paciente_big_data SET Incidentes=$incidentes Where Paciente = $paciente";
  $link->query($peticion_update);
  $link->close();
 
 ?>