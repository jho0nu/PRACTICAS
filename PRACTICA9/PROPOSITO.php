<!DOCTYPE html>
<html lang="es">
<head>
<style type="text/css">
*{
	margin: 0;
	padding: 0;
}
html{
	background-image: url("img.jpg");
	background-attachment: fixed;
	overflow: scroll;
	background-repeat: repeat;
	background-position: 500px 1000px;
	
}
body{
	width: 1350px;
	height: 800px;
	margin: auto;
	background-color: royalblue;

}
section#box1{
	width: 1350px;
	height: 70px;
	float: left;
	background-color: rgb(29, 41, 81);
	font-family: 'Pangolin', cursive;
	font-size: 30px;
}

section#tres{
	width: 1350px;
	height: 300px;
	float: left;
	background-color: #00BCD4;
}
section#banner{
	width: 1350px;
	height: 600px;
	float: left;
	background-color: #00897B;
}
.texto2{
	width: 1300px;
	padding: 20px;
	border: 10px;
	font-family: 'Darumadrop One', cursive;
	font-family: 'Poppins', sans-serif;
	font-size: 15px;
	text-align: justify;
}
.titulo{
	width: 1300px;
	padding: 20px;
	border: 10px;
	font-family: 'Bangers', cursive;
	font-size: 20px;
}
.textobanner{
	width: 1270px;
	padding: 20px;
	border: 10px;
	font-family: 'Darumadrop One', cursive;
	font-family: 'Poppins', sans-serif;
	font-size: 15px;
	text-align: justify;
}
.custom-list {
    padding-left: 20px; 
    list-style: none; 
}

.custom-list li:before {
    content: "\2022"; 
    color: #E0E0E0; 
    font-weight: bold; 
    display: inline-block;
    width: 1em; 
    margin-left: -1em; 
}
.texto3{
	width: 1300px;
	padding: 20px;
	border: 10px;
	font-family: 'Darumadrop One', cursive;
	font-family: 'Poppins', sans-serif;
	font-size: 15px;
	text-align: justify;
}
.menu{
    background-color: #2E8B57;
    color: #fff;
    height: 70px;
}

.menu__container{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 90%;
    max-width: 1200px;
    height: 100%;
    margin: 0 auto;
}

.menu__links{
    height: 100%;
    transition: transform .5s;
    display: flex;
}

.menu__item{
    list-style: none;
    position: relative;
    height: 100%;
    --clip: polygon(0 0, 100% 0, 100% 0, 0 0);
    --transform: rotate(-90deg);
}

.menu__item:hover{
    --clip: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    --transform: rotate(0);
}

.menu__link{
    color: #fff;
    text-decoration: none;
    padding: 0 30px;
    display: flex;
    height: 100%;
    align-items: center;
}

.menu__link:hover{
    background-color: #127A17;
}


.menu__arrow{
    transform: var(--transform);
    transition: transform .3s;
    display: block;
    margin-left: 3px;
}

.menu__nesting{
    list-style: none;
    transition:clip-path .3s;
    clip-path: var(--clip);
    position: absolute;
    right: 0;
    bottom: 0;
    width: max-content;
    transform: translateY(100%);
    background-color: #689F38;
}

.menu__link--inside{
    padding: 30px 100px 30px 20px;
}

.menu__link--inside:hover{
    background-color: #FF8C00;
}

.menu__hamburguer{
    height: 100%;
    display: flex;
    align-items: center;
    padding: 0 15px;
    cursor: pointer;
    display: none;
}

.menu__img{
    display: block;
    width: 36px;
}

@media (max-width:800px){
    .menu__hamburguer{
        display: flex;
    }

    .menu__item{
        --clip:0;
        overflow:hidden;
    }

    .menu__item--active{
        --transform: rotate(0);
        --background: #5e7094;
    }

    .menu__item--show{
        background-color: var(--background);
    }


    .menu__links{
        position: fixed;
        max-width: 400px;
        width: 100%;
        top: 70px;
        bottom: 0;
        right: 0;
        background-color: #000;
        overflow-y: auto;
        display: grid;
        grid-auto-rows: max-content;
        transform: translateX(100%);
    }

    .menu__links--show{
        transform: unset;
        width: 100%;
    }

    .menu__link{
        padding: 25px 0;
        padding-left: 30px;
        height: auto;
    }

    .menu__arrow{
        margin-left: auto;
        margin-right: 20px;
    }

    .menu__nesting{
        display: grid;
        position: unset;
        width: 100%;
        transform: translateY(0);
        height: 0;
        transition: height .3s;
    }

    .menu__link--inside{
        width: 90%;
        margin-left: auto;
        border-left: 1px solid #798499;
    }
}
</style>
	<meta http-equiv="Content Type" content="text/html ;charset=utf-8"/> 
	<title>PRACTICA 9</title>
	<link href="https://fonts.googleapis.com/css2? family=Pathway+Extreme:ital,wght@1,700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Poppins:wght@200&display=swap" rel="stylesheet">
	<link href="https: //fonts.googleapis.com/css2? family= Bangers & display=swap" rel="hoja de estilo">
	<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
</head>
	<body>
		<nav>
			<section id="box1">
				<nav class="menu">
        <section class="menu__container">
            <h1 style="color:white;">JHONATAN ZAMBRANO HERRERA DEL 504</h1>

            <ul class="menu__links">
    
                <li class="menu__item menu__item--show">
                    <a href="PROPOSITO.php" class="menu__link">Practicas <img src="arrow.svg" class="menu__arrow"></a>
    
                    <ul class="menu__nesting">
                        <li class="menu__inside">
                            <a href="PAROIMPAR/PRUEBA.html" class="menu__link menu__link--inside">PAR O IMPAR</a>
                            <a href="MAYORDEEDAD/PRUEBA.html" class="menu__link menu__link--inside">MAYOR DE EDAD</a>
                            <a href="MENORMAYOR3NUM/PRUEBA.html" class="menu__link menu__link--inside">MENOR</a>
                            <a href="MENORMAYORESC/PRUEBA.html" class="menu__link menu__link--inside">MENOR O MAYOR</a>
                            <a href="NUMEROIF/PRUEBA.html" class="menu__link menu__link--inside">NUMERO IF</a>
                            
                        </li>
						
                    </ul>
                </li>
    
    
    
            </ul>

            <div class="menu__hamburguer">
                <img src="menu.svg" class="menu__img">
            </div>
        </section>

      
    </nav>

    <script src="app.js"></script>
			</section>
		</nav>
		<head>
			<section id="tres">
				<div class="texto2">
					<div style="width: 1300px; height: 260px">
						<p><h2 style="color:snow;"><em>Unidad de aprendizaje:</em>
<i>Programación de aplicaciones con conexión a bases de datos</i> 
<br>
<br>
<em>Resultado de aprendizaje 2.1 </em>
<i>Conforma bloques de código, empleando las técnicas e instrucciones del lenguaje de programación como plataforma en el desarrollo de aplicaciones.</i> 
<br>
<br>
<em>Práctica 9. </em></h2>



						</p>
					</div>
				</div>
			</section>
		</head>
			<section id="banner">
				<div class="titulo">
					<p><h1 style="color:#E0E0E0;"><center><br>INSTRUCCIONES:</center></h1></p>
				</div>
				<div class="textobanner">
					<p><h1 style="color:#E0E0E0;">
					<em>Codificar la solución de los siguientes ejercicios empleando estructuras de control en lenguaje php.</em> 
					<br>
							<ul class="custom-list">
							<br><li><i>Pedir un número entero al usuario e indicar si es par o impar.</i><br></li>
							<li><i>Preguntar al usuario cuántos años tiene y, si es mayor de edad, preguntarle si tiene licencia de conducir.</i><br></li>
							<li><i>Pedir al usuario tres valores reales de doble precisión y mostrar el menor de ellos.</i><br></li>
							
							<li><i>Pedir tres números reales al usuario y mostrar el menor o el mayor, según decida.<br></i></li>
							
							<li><i>Escribir un programa (usando la instrucción IF) que pida un número real de precisión sencilla y haga muestre los siguientes resultados: </i><br></li>
							<ul class="custom-list">
							<li><i>Si el número es menor que 50, mostrará su cuadrado </i><br></li>
							<li><i>Si el número es igual a 25, 30 ó 75, mostrará su raíz cúbica</i><br></li>
							
							<li><i>Si el número vale 10 ó es mayor que 100 ó está en los intervalos [3,8] o [77, 90], mostrará el valor dividido por 10.</i><br></li>
							<li><i>En cualquier otro caso, mostrará el número leído.</i><br></li>
							</ul>

							</ul>
						</h1>
					</p>
				</div>
			</section>
	</body>
</html>