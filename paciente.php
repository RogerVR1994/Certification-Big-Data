<?php
include "../../connect_e_health.php";	
	
	$link= db_Connection();
	$result= $link->query("SELECT * FROM paciente_big_data ORDER BY `ID` DESC");
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
				<td>&nbsp;Sexo&nbsp;</td>
				<td>&nbsp;Edad&nbsp;</td>
				<td>&nbsp;Incidentes&nbsp;</td>
				
			</tr>

	      <?php 
			  if($result!==FALSE){
			     while($row = $result->fetch_assoc()) {
			        printf("<tr><td> &nbsp;%s </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td></td><td> &nbsp;%s&nbsp; </td></tr>", 
			           $row["ID"], $row["Paciente"], $row["Sexo"], $row["Edad"], $row["Incidentes"]);
			     }
			     $link->close();

			  }
	      ?>
	   
	   </table>	
   </div>
   
  </div>
</body>
</html>

