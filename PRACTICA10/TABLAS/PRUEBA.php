<!doctype html>
<html lang="es">
	<head>
<style type="text/css">
@charset "utf-8";
/* CSS Document */
*{
	box-sizing: border-box;
}
body{
	margin: 0px;/*margen izquierdo*/
	background: #ECF0F1;/*fondo del formulario*/
}
/*contorno del formulario*/
.menu__link--inside{
	width: 90%;
	margin-left: auto;
	border-left: 1px solid #798499;
}
.contenedor{
	max-width: 90%;
	margin: auto;
}
.form{
	max-width: 50%;
	padding: 20px 50px;
	margin: auto;
	margin-top: 10px;background: #DCF3FD;
	box-shadow: 0 0 20px 1px rgba(0,0,0,0,3);/*efecto de sombra en el  entorno del formulario*/
	font-family: 'Quicksand', sans-serif;
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
		<link href="https://fonts.googlepis.com/css2?family=Rajdhani:wght@300&family=Raleway:wght@100&display=swap">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sah512-iecdLmaskl7CVkqkXkXNQ/ZH/XLvWZOJyj7Y7TCEM,Pd1YPasOZPMt/E0iPtmDFlB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-reffer"/>
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
		<title>TABLAS DE MULTIPLICAR</title>
	</head>

	<body>
		<div class="contenedor">
			<form action="guarda.php" class="form" id="form" name="insertar" method="POST">
				<p class"form-titulo">
					<center>TABLAS DE MULTIPLICAR</center></p>

				
<?php
	for ($i = 2; $i <= 9; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $m = $i * $j;
        echo '<div class="form-input minom">
                <label for="num_'.$i .'_'. $j.'">'.$i .'x'.$j.'= ?</label>
                <input type="text" id="num_'.$i .'_'.$j.'"name="num_'.$i.'_'.$j.'">
              </div>';
    }
}
?>
				<div class="form-boton">
					<input type="submit" name="guarda" value="CONOCER">
					<input type="hidden" name="action" value="add">
				</div>

			</form>
		</div>
	</body>
</html>