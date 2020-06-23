<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Tarea 3</title>
	<link rel="stylesheet" href="../css/resultados.css">
</head>
<body>
	<div>
		<h2>Suma de 3 numeros</h2>
	</div>
	<div class="conten">
		<h2>Resultados..</h2>
		<?php
		$n1=$_POST["InputNum1"];
		$n2=$_POST["InputNum2"];
		$n3=$_POST["InputNum3"];
		$suma = $n1 + $n2 +$n3;
		echo "<p>Primer numero: $n1 </p>" ; 
		echo "<p>Segundo numero: $n2 </p>" ; 
		echo "<p>Tercer numero: $n3</p>" ; 
		echo "<p>Suma de numeros: $suma</p>" ; 
		?>
		<br>
		<a href="../index.php">Regresar</a>
		<br><br>
	</div>


</body>
</html>