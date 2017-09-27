<?php

	include "../../connect_e_health.php"; 	
	
	$link=db_Connection();

	$result=mysqli_query($link, "SELECT * FROM `big_data` ORDER BY `ID` DESC");
	
	//$db=mysqli_select_db($link, 'ehealth');

	$filename = "Datos_resultados.xls"; // File Name
	// Download file
	header("Content-Type: application/vnd.ms-excel");
	header('Content-Disposition: attachment; filename="Datos_resultados.xls"');
	header("Pragma: no-cache");
	/*
	$user_query = mysqli_query('select name,work from info');
	// Write data to file
	$flag = false;
	while ($row = mysqli_fetch_assoc($user_query)) {
    		if (!$flag) {
       	 	// display field/column names as first row
        		echo implode("\t", array_keys($row)) . "\r\n";
        		$flag = true;
    		}
    		echo implode("\t", array_values($row)) . "\r\n";
	}*/
?>



<html>
   <head>
      <title>Info Resultados</title>
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   </head>
<body>
   <div class="container">
	    <img src="images/logo.png" style="width:170px;height:130px">
	    </br></br>
   
   <h1>Información de Resultados</h1>
   <a href="boton_resultados.php">Descarga de Base de Datos</a>
   <div class="table-responsive">
	   <table class="table table-striped">
			<tr>
				<td>&nbsp;ID&nbsp;</td>
				<td>&nbsp;Paciente&nbsp;</td>
				<td>&nbsp;Fecha&nbsp;</td>
				<td>&nbsp;Latitud&nbsp;</td>
				<td>&nbsp;Longitud&nbsp;</td>
				<td>&nbsp;Fix&nbsp;</td>
				<td>&nbsp;Verdadero/Falso&nbsp;</td>
				
			</tr>

	      <?php 
			  if($result!==FALSE){
			     while($row = $result->fetch_assoc()) {
			        printf("<tr><td> &nbsp;%s </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td></td><td> &nbsp;%s&nbsp; </td></tr>", 
			           $row["ID"], $row["Paciente"], $row["Fecha"], $row["Latitud"], $row["Longitud"], $row["Fix"], $row["Verdadero"]);
			     }
			     $link->close();

			  }
	      ?>
	   
	   </table>	
   </div>
   
  </div>
</body>
</html>

