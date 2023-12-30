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
	background-color: cornflowerblue;
}
section#banner{
	width: 1350px;
	height: 600px;
	float: left;
	background-color: rgb(149, 200, 216);
}
.custom-list {
    padding-left: 20px; 
    list-style: none; 
}

.custom-list li:before {
    content: "\2022"; 
    color: rgb(29, 41, 81); 
    font-weight: bold; 
    display: inline-block;
    width: 1em; 
    margin-left: -1em; 
}
.texto1{
	width: 510px;
	padding: 20px;
	border: 10px;
	font-family: 'Darumadrop One', cursive;
	font-family: 'Poppins', sans-serif;
	font-size: 15px;
	text-align: justify;
	scroll-behavior: unset;
	overflow-x: hidden;
  	overflow-y: scroll;

}
.texto2{
	width: 1350px;
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
    background-color: #1A202C;
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
    background-color: #5e7094;
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
    background-color: #000;
}

.menu__link--inside{
    padding: 30px 100px 30px 20px;
}

.menu__link--inside:hover{
    background-color: #798499;
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
	<title>PRACTICA 8</title>
	<link href="https://fonts.googleapis.com/css2? family=Pathway+Extreme:ital,wght@1,700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Poppins:wght@200&display=swap" rel="stylesheet">
	<enlace href="https: //fonts.googleapis.com/css2? family= Bangers & display=swap" rel="hoja de estilo">
	<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
</head>
	<body>
		<nav>
			<section id="box1">
				<nav class="menu">
        <section class="menu__container">
            <h1 style="color:yellow;">JHONATAN ZAMBRANO HERRERA DEL 504</h1>

            <ul class="menu__links">
    
                <li class="menu__item menu__item--show">
                    <a href="PROPOSITO.php" class="menu__link">Practicas <img src="arrow.svg" class="menu__arrow"></a>
    
                    <ul class="menu__nesting">
                        <li class="menu__inside">
                            <a href="MULTI/PRUEBA.html" class="menu__link menu__link--inside">MULTIPLICACIÓN</a>
                            <a href="RADIOCIRCU/PRUEBA.html" class="menu__link menu__link--inside">AREA DE UN CIRCULO</a>
                            <a href="POLINOMIO/PRUEBA.html" class="menu__link menu__link--inside">POLINOMIO</a>
                            <a href="INSERTA/PRUEBA.html" class="menu__link menu__link--inside">NOMBRE Y EDAD</a>
                            <a href="CUADRADO/PRUEBA.html" class="menu__link menu__link--inside">CUADRADO</a>
                            
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
						<p><h2 style="color:snow;"><em>Unidad de aprendizaje 2:</em>
<i>Programación de aplicaciones de explotación de bases de datos</i> 
<br>
<br>
<em>Resultado de aprendizaje 2.1 </em>
<i>Conforma bloques de código, empleando las técnicas e instrucciones del lenguaje de programación como plataforma en el desarrollo de aplicaciones.</i> 
<br>
<br>
<em>Práctica 8. </em>
<i>Declaración de elementos de programación empleando sentencias del lenguaje de programación.</i></h2>


						</p>
					</div>
				</div>
			</section>
		</head>
		<section id="banner">
				<div class="titulo">
					<p><h1 style="color:rgb(29, 41, 81);"><center><br>INSTRUCCIONES:</center></h1></p>
				</div>
				<div class="textobanner">
					<p><h1 style="color:rgb(29, 41, 81);">
					<i>Codificar la solución de los siguientes ejercicios empleando estructuras de control en lenguaje php.</i> 
					<br>
					<br>
							<ul class="custom-list">
							<li><i>Pedir al alumno dos números, uno entero y otro real, y mostrar su producto.</i><br></li>
							<li><i>Calcular el área de un círculo cuyo radio se le preguntará al alumno.</i><br></li>
							<li><i>Pedir al alumno los coeficientes (a, b, c) de un polinomio de segundo grado (ax2+bx+c) y mostrar las dos raíces: (-b±(b2–4ac)1/2)/2a.</i><br></li>
							<li><i>Preguntar al alumno su nombre (texto) y su edad (valor entero) y mostrar por pantalla un texto del estilo del siguiente: Te llamas Lucía y tienes 19 años.</i><br></li>
							<li><i>Pedir un entero al alumno y mostrar su valor al cuadrado. Probar el programa con el valor 30.000. En caso de que el programa falle, razonar por qué ocurre.</i><br></li>
							
							</ul>
						</h1>
					</p>
				</div>
			</section>
	</body>
</html>