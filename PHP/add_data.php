<?php
      session_start();
   	include "../../../connect_e_health.php";
   	
   	$link=db_Connection();

	 $paciente=$_POST["Paciente"];
   $latitud=$_POST["Lon"];
   $longitud=$_POST["Lat"];


   for ($n = 0; $n<10; n++){
      $verdadero = 1;
      $fix = "GPS";


      $peticion3="INSERT INTO big_data VALUES (NULL, '" .$paciente."', NULL, $latitud, $longitud, '" .$fix."', $verdadero)"; 
      echo $peticion;
      $link->query($peticion3);
       
    }
    
    for ($n = 0; $n<3; n++){
       $verdadero = 1;
       $fix = "Celular"

       $peticion3="INSERT INTO big_data VALUES (NULL, '" .$paciente."', NULL, $latitud, $longitud, '" .$fix."', $verdadero)"; 
       echo $peticion;
       $link->query($peticion3);


    }

    $verdadero = 0;
    $fix = "Celular"

    $peticion3="INSERT INTO big_data VALUES (NULL, '" .$paciente."', NULL, $latitud, $longitud, '" .$fix."', $verdadero)"; 
    echo $peticion;
    $link->query($peticion3);

    $fix = "GPS";

    $peticion3="INSERT INTO big_data VALUES (NULL, '" .$paciente."', NULL, $latitud, $longitud, '" .$fix."', $verdadero)"; 
    echo $peticion;
    $link->query($peticion3);

    
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

