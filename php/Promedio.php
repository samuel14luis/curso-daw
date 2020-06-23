<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Tarea 3</title>
	<link rel="stylesheet" href="../css/resultados.css">
</head>
<body>
	<div>
		<h2>Promedio</h2>
	</div>
	<div class="conten">
		<h2>Resultados..</h2>
		<?php
		$n1=$_POST["InputNum1"];
		$n2=$_POST["InputNum2"];
		$n3=$_POST["InputNum3"];
		$promedio = ($n1 + $n2 +$n3 )/ 3;
		echo "<p>Primera Nota: $n1 </p>" ; 
		echo "<p>Segunda Nota: $n2 </p>" ; 
		echo "<p>Tercera Nota: $n3 </p>" ; 
		echo "<p>Importe a pagar: $promedio</p>" ; 
		?>
		<br>
		<a href="../index.php">Regresar</a>
		<br><br>
	</div>


</body>
</html>