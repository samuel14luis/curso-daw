<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Tarea 3</title>
	<link rel="stylesheet" href="../css/resultados.css">
</head>
<body>
	<div>
		<h2>Doble de un numero</h2>
	</div>
	<div class="conten">
		<h2>Resultados..</h2>
		<?php
		$n1=$_POST["InputNum1"];
		$doble = $n1 * 2;
		echo "<p>Primer numero: $n1 </p>" ; 
		echo "<p>Suma de numeros: $doble</p>" ; 
		?>
		<br>
		<a href="../index.php">Regresar</a>
		<br><br>
	</div>
	

</body>
</html>