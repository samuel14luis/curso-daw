
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section>
		<div>
			<h2>Alumno: Luis Mendoza, Samuel</h2>
		</div>
	</section>
	<!-- suma de 3 numeros  -->
	<section class="container" >
		<div >
		<h4>Suma de 3 numeros</h4>
			<div class="entrada">
				<form  action="php/Suma-3-numeros.php" method="post" name="">
				
					<p>Ingrese Numero 1:</p>
					<input type="text" name="InputNum1" placeholder="Ingresa el numero" >
	
					<p>Ingrese Numero 2:</p>
					<input type="text" name="InputNum2" placeholder="Ingresa el Texto"  >
	
					<p>Ingrese Numero 3:</p>
					<input type="text" name="InputNum3" placeholder="Ingresa el Texto"  >
					<br>
					<input  class="btn" type="submit" name="btnEnviar" value="Enviar">
				</form>
			</div>
		</div>
	</section>
	<!-- Un numero al cuadrado -->
	<section class="container" >
		<div >
		<h4>Doble de un numero</h4>
			<div class="entrada p-top">
				<form  action="php/numero-alcuadrado.php" method="post" name="">
				
					<p>Ingrese Numero 1:</p>
					<input type="text" name="InputNum1" placeholder="Ingresa el numero" >

					<input  class="btn" type="submit" name="btnEnviar" value="Enviar">
				</form>
			</div>
		</div>
	</section>
	<!-- El cubo de un numero -->
	<section class="container" >
		<div >
		<h4>Cubo de un numero</h4>
			<div class="entrada p-top">
				<form  action="php/cubo-de-un-numero.php" method="post" name="">
				
					<p>Ingrese Numero 1:</p>
					<input type="text" name="InputNum1" placeholder="Ingresa el numero" >
					
					<input  class="btn" type="submit" name="btnEnviar" value="Enviar">
				</form>
			</div>
		</div>
	</section>
	<!-- promedio -->
	<section class="container" >
		<div >
		<h4>Promedio</h4>
			<div class="entrada">
				<form  action="php/Promedio.php" method="post" name="">
				
					<p>Ingrese Numero 1:</p>
					<input type="text" name="InputNum1" placeholder="Ingresa el numero" >
	
					<p>Ingrese Numero 2:</p>
					<input type="text" name="InputNum2" placeholder="Ingresa el Texto"  >
	
					<p>Ingrese Numero 3:</p>
					<input type="text" name="InputNum3" placeholder="Ingresa el Texto"  >
					<br>
					<input  class="btn" type="submit" name="btnEnviar" value="Enviar">
				</form>
			</div>
		</div>
	</section>

	<!-- Calcular el aria de un circulo -->
	<section class="container" >
		<div >
		<h4>calcule el área de un círculo A=Pi*r2</h4>
			<div class="entrada p-top">
				<form  action="php/area-de-circulo.php" method="post" name="">
				
					<p>Ingrese el area:</p>
					<input type="text" name="InputNum1" placeholder="Ingresa el numero" >
					
					<input  class="btn" type="submit" name="btnEnviar" value="Enviar">
				</form>
			</div>
		</div>
	</section>

	<!-- calcular el importe de pago -->
	<section class="container" >
		<div >
		<h4>Importe a pagar</h4>
			<div class="entrada p-top2">
				<form  action="php/importe-de-pago.php" method="post" name="">
				
					<p>Ingrese Precio:</p>
					<input type="text" name="InputNum1" placeholder="Ingresa el numero" >
	
					<p>Ingrese Cantidad:</p>
					<input type="text" name="InputNum2" placeholder="Ingresa el Texto"  >
	
					<br>
					<input  class="btn" type="submit" name="btnEnviar" value="Enviar">
				</form>
			</div>
		</div>
	</section>
	
	<!-- calcular el importe de pago -->
	<section class="container" >
		<div >
		<h4>Importe a pagar con descuento</h4>
			<div class="entrada p-top2">
				<form  action="php/importe-con-descuento.php" method="post" name="">
				
					<p>Ingrese Precio:</p>
					<input type="text" name="InputNum1" placeholder="Ingresa el numero" >
	
					<p>Ingrese Cantidad:</p>
					<input type="text" name="InputNum2" placeholder="Ingresa el Texto"  >
	
					<br>
					<input  class="btn" type="submit" name="btnEnviar" value="Enviar">
				</form>
			</div>
		</div>
	</section>
</body>
</html>