<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Tarea 3</title>
	<link rel="stylesheet" href="../css/resultados.css">
</head>
<body>
	<div>
		<h2>Importe a pagar Con descuento</h2>
	</div>
	<div class="conten">
		<h2>Resultados..</h2>
		<?php
		$n1=$_POST["InputNum1"];
		$n2=$_POST["InputNum2"];
		$ImportePagar = $n1 * $n2;
		$Dsescuento = 10/100 * $ImportePagar;
		$Total = $ImportePagar - $Dsescuento;
		echo "<p>precio: $n1 </p>" ; 
		echo "<p>cantidad: $n2 </p>" ; 
		echo "<p>Importe a pagar: $ImportePagar </p>" ; 
		echo "<p>Descuento: $Dsescuento </p>" ; 
		echo "<p>Importe a pagar con descuento: $Total</p>" ; 
		?>
		<br>
		<a href="../index.php">Regresar</a>
		<br><br>
	</div>
</body>
</html>