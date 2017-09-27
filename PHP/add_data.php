<?php
      session_start();
   	include "../../../connect_e_health.php";
   	
   	$link=db_Connection();

	 $verdadero = $_POST["veracidad"];
   $paciente = rand(1, 259);
   $latitud = rand(19340, 19550);
   $longitud = rand(-99260, -99036);
   $latitud = $latitud/1000;
   $longitud = $longitud/1000;
   $prob_fix = rand(0,1);
   $arr_fix = ["GPS", "Celular"];

   echo $latitud;
   echo $longitud;

   if (!$latitud){

    $latitud=0;
   }

   if (!$longitud){

    $longitud=0;
   }



   for ($n = 0; $n<10; $n++){
      $prob_fix = rand(0,1);
      $fix = $arr_fix($prob_fix);

      $peticion="INSERT INTO big_data VALUES (NULL, '" .$paciente."', NULL, $latitud, $longitud, '" .$fix."', $verdadero)"; 
      
      $link->query($peticion);
       
    }

    
   	$link->close();

/*
    $send_data -> temperatura = $temperatura;
    $send_data -> presion_distolica = $presion_dis;
    $send_data -> presion_sistolica = $presion_sis;
    $send_data -> pulso = $pulso;

    $myJSON = json_encode($send_data);

    $archivo = fopen("data.json", "w");
    fwrite($archivo, $myJSON);
    fclose($archivo);
*/
   	
?>

