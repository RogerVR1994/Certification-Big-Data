<?php
  session_start();
  include "../../../connect_e_health.php";	
  
  $link=db_Connection();
	$verdadero = $_POST["veracidad"]; 
  $arr_fix = array("GPS", "Celular");


  for ($n = 0; $n<2; $n++){
    $paciente = rand(1, 259);
    $latitud = rand(19340, 19550);
    $longitud = rand(-99260, -99036);
    $latitud = $latitud/1000;
    $longitud = $longitud/1000;
    $prob_fix = rand(0,1);
    $fix = $arr_fix[$prob_fix];

    $peticion_insert="INSERT INTO big_data VALUES (NULL, '" .$paciente."', NULL, $latitud, $longitud, '" .$fix."', $verdadero)"; 
    
    $link->query($peticion_insert);
    //echo $peticion; 
  }
  $link->close();

?>

