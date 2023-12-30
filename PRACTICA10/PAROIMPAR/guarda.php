<!doctype html>
<html lang="es">
<head>
<style type="text/css">
*{
	box-sizing: border-box;
}
body{
	margin: 0px;/*margen izquierdo*/
	background: #ECF0F1;/*fondo del formulario*/
}
/*contorno del formulario*/
.contenedor{
	max-width: 90%;
	margin: auto;
}
.form-input label{
	display: block;/*las etiquetas pasan hacia abajo*/
	margin-top: 0px;
	font-size: 15px;/*tamaño fuente*/
	color: #6e6e6e;
	font-family: 'Quicksand', sans-serif;/*tipo de letra*/
}
.font-titulo{
	font-weight: bold;
	font-family: 'Quicksand', sans-serif;
	font-size: 20px;
	text-align: center;
	margin-bottom: 20px;
	letter-spacing: 15px;/*separa las letras del titulo*/
	margin:25px;
	justify-content: center;
}

.form-input input{
	width: 90%; /*tamaño de los box*/
	outline: none; /*cuando se pasa el foco(indicador del mouse) se pone un border, lo quitamos*/
	background: #fffceb;
	border-radius: 4px;
	margin-bottom: 15px;
	border: 1px;
	solid: #dfeceb;
	font-family: 'Rajdhani';
	font-size: 18px;
}

.form-input input:focus+label{ /*cuando se selecciona la caja de texto las label se cambian a un color negro*/
	font-weight: bold;
	color: black;
}

.form-boton input {
	background: #1CADE4; /*color del boton REGISTRATE*/
	color: wheat;
	padding: 6px 70px; /*tamaño del boton*/
	font-size: 15px;
	letter-spacing: 8px;
	display: block;
	margin: auto;
	margin-top: 30px; /*Espacio entre la ultima label y el boton*/
	border-radius: 10px; /*redondeo del contorno*/
}

.form-boton input:hover {
	background: #95A5A6; /*color del boton REGISTRATE cuando ya se envio los datos*/
	transition: 0.5s;
}

</style>
<meta charset="utf-8">
		<link rel="stylesheet" href="estilo.css">
		<link href="https://fonts.googlepis.com/css2?family=Rajdhani:wght@300&family=Raleway:wght@100&display=swap">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sah512-iecdLmaskl7CVkqkXkXNQ/ZH/XLvWZOJyj7Y7TCEM,Pd1YPasOZPMt/E0iPtmDFlB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-reffer"/>
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
		<title>NUMERO</title>
	</head>

	<body>
		<div class="contenedor">
<?php

	$num=$_POST['numero1'];
	$num=$_POST['numero1'];
	switch ($num) {
    case 0:
    	echo '<div class="font-titulo">
					<center>PAR O IMPAR</center></div>';
        echo '<div class="form-input ap">
					<label for="ap"><i>EL NUMERO  </i>'.$num.'<i> ES NEUTRO</i></label>
				</div>';
        break;
    case $num%2==0:
    	echo '<div class="font-titulo">
					<center>PAR O IMPAR</center></div>';
        echo '<div class="form-input ap">
					<label for="ap"><i>EL NUMERO  </i>'.$num.'<i> ES PAR</i></label>
				</div>';
        break;
    default:
        echo '<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilo.css">
		<link href="https://fonts.googlepis.com/css2?family=Rajdhani:wght@300&family=Raleway:wght@100&display=swap">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sah512-iecdLmaskl7CVkqkXkXNQ/ZH/XLvWZOJyj7Y7TCEM,Pd1YPasOZPMt/E0iPtmDFlB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-reffer"/>
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
		<title>PAR E IMPAR</title>
	</head>

	<body>
		<div class="contenedor">
			<form action="guarda.php" class="form" id="form" name="insertar" method="POST">
				<p class"form-titulo">
					<center>PAR E IMPAR</center></p>

				<div class="form-input minom">
					<input type="text" id="numero1" name="numero1">
					<label for="minom">EL NUMERO QUE ESCRIBISTE ES IMPAR, INTRODUCE NUEVAMENTE UN NUMERO</label>
				</div>

				<div class="form-boton">
					<input type="submit" name="guarda" value="CONOCER">
					<input type="hidden" name="action" value="add">
				</div>

			</form>
		</div>
	</body>
</html>'; 
	break;
}
?>
	</div>
	</body>
</html>