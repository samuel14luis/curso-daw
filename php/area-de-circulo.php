<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Tarea 3</title>
	<link rel="stylesheet" href="../css/resultados.css">
</head>
<body>
	<div>
		<h2>Calcular el area de un circulo </h2>
	</div>
	<div class="conten">	
		<h2>Resultados..</h2>
		<?php
		$n1=$_POST["InputNum1"];
		$area = 3.14*($n1*$n1);
		echo "<p>Primer numero: $n1 </p>" ; 
		echo "<p>Suma de numeros: $area</p>" ; 
		?>
		<br>
		<a href="../index.php">Regresar</a>
		<br><br>
	</div>
	

</body>
</html>