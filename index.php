<!DOCTYPE html>

<html>
    <head>
        <title>Johanna Herrero Pozuelo</title>
        <meta charset="UTF-8">
        <style>
			@import url('http://fonts.cdnfonts.com/css/04b30');
			@import url('http://www.fontsaddict.com/fontface/mario-kart-ds-regular.ttf');
			/* 
				Author     : johanna Herrero Pozuelo
				
			*/
			
			body{
	font-family:OCR A Std, monospace;
	/*background-image: url(images/retro4.jpg); */
     /* background-image: url("https://acegif.com/wp-content/gif/snwflks-5.gif"); */
	background-repeat:no-repeat;
	background-color:rgb(215, 185, 250);
        background-size: cover;
	
}
/* caja titulo */
h2{ 
	font-family: '04b', sans-serif;
	text-shadow: black 0.1em 0.1em 0.2em;
	text-align:center;
	padding:10px;
	color:crimson;
	background-color:blueviolet;
	margin-top:0%;
	border: 8px dotted blue;
}

/*caja debajo de titulo*/
.caja1{
        background-color:red;
        border: 4px inset blue;
	border-radius: 35px 0px 35px 0px;
	-moz-border-radius: 35px 0px 35px 0px;
	-webkit-border-radius: 35px 0px 35px 0px;
}
			
			
			table {
				margin: 5rem auto;
			table-layout: fixed;
			width: 100%;
			height:100px;
			color:white;
			border-collapse: collapse;
			border: 4px solid purple;
			text-align:left;
			padding:2px;
			}
			td{
                            background: blue;
				text-align:left;
				border: 4px solid purple;width:90px;
			}

			th{
                            background: blue;
				border: 4px solid purple;
			}
			.ver{
				margin-top:2px;
				margin-left:25px;
			}
			.play{
				margin-top:2px;
				margin-left:30px;
			}
			footer{
                                background: blueviolet;
                                border-radius: 5px 5px 5px 5px;
                                font-weight: bold;
                                position: fixed;
                                bottom: -1px;
                                width: 100%;
                                height: 60px;
                                color: black;
                                text-align: center;
                                padding: 2px;
                                vertical-align: middle;
}
			a img{
				margin:auto;
				width:35px;
				height:35px;
			}
                        
                        .t2{
                            margin-top: 40px;
                            background: darkblue;
                            text-align: center;
                            font-size: 32px;
                            /*animation-name: example;
                            animation-duration: 6s;*/
                        }
                       /*@keyframes example {
                        0%   {background-color:red; left:0px; top:0px;}
                        25%  {background-color:yellow; left:200px; top:0px;}
                        50%  {background-color:blue; left:200px; top:200px;}
                        75%  {background-color:green; left:0px; top:200px;}
                        100% {background-color:red; left:0px; top:0px;}
                        }*/
                        .t2:hover{
                            background:green;
                            color: fuchsia;
                        }
		</style>
    </head>
    <body>
        <header>
            <h2>DESARROLLO WEB ENTORNO SERVIDOR </h2> 
	<div class="caja1"></div>
	</header> 
        <main>
		<table class="default">
		  <tr class="c1">
			<th class="p1">Ejercicio Tema1 Johanna</th>
                        <td><a href="codigoPHP/Ejercicio00.php">
			<img src="../images/ver.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigoPHP/mEjercicio00.php" >
			<img src="../images/play.png" class="play" width="30" height="30" ></td>
		  </tr>
		  <tr>
			<th class="p1">Ejercicio Tema1 Isabel</th>
                        <td><a  href="codigoPHP/Ejercicio01.php" >
                            <img src="../images/ver.png" class="ver" width="40" height="40" ></td>
                            <td><a href="mostrarCodigoPHP/mEjercicio01.php"  >
			<img src="../images/play.png" class="play" width="30" height="30" ></td>
		  </tr>
		  <tr>
			<th class="p1">Ejercicio Tema1 Oscar</th>
                        <td><a  href="codigoPHP/Ejercicio02.php" >
			<img src="../images/ver.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigoPHP/mEjercicio02.php" >
			<img src="../images/play.png" class="play" width="30" height="30" ></td>
                   </tr>
                    <tr>
			<th class="p1">Ejercicio Tema1 Alberto</th>
                        <td><a  href="codigoPHP/Ejercicio02.php" >
			<img src="../images/ver.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigoPHP/mEjercicio02.php" >
			<img src="../images/play.png" class="play" width="30" height="30" ></td>
                   </tr>
		</table>
           
        </main>
        <footer>
		2021-22 I.E.S. Los sauces. ©Todos los derechos reservados. Johanna Herrero Pozuelo
		<a  href="https://github.com/JohannaHPSauces/proyectoTema3"><img src="../images/git.png" class="git"></a>
	</footer>
			
    </body>
</html>