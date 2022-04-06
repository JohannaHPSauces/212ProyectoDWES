<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('http://fonts.cdnfonts.com/css/04b30');
        @import url('http://www.fontsaddict.com/fontface/mario-kart-ds-regular.ttf');


body{
	font-family:OCR A Std, monospace;
	/*background-image: url(images/retro4.jpg); */
     /* background-image: url("https://acegif.com/wp-content/gif/snwflks-5.gif"); */
	background-repeat:no-repeat;
	background-color:rgb(255, 255, 255);
        background-size: cover;
	
}
/* caja titulo */
h2{ 
	font-family: '04b', sans-serif;
	text-shadow: rgb(245, 179, 179) 0.1em 0.1em 0.2em;
	text-align:center;
        font-size:30px;
	padding:20px;
	color:black;
	background-color:rgb(253, 253, 253);
	margin-top:0%;
	border: 3px solid black;
}

/*caja debajo de titulo*/
/* .caja1{
        background-color:red;
        border: 4px inset blue;
	border-radius: 35px 0px 35px 0px;
	-moz-border-radius: 35px 0px 35px 0px;
	-webkit-border-radius: 35px 0px 35px 0px;
} */

.contenedor{
        height: 350px;width: 1250px;
        /* border: 5px solid yellow; */
        border-radius: 0%;
        /*background:rgb(255, 0, 200);*/
        margin: 0 auto;
        margin-top: 20vh;
        display: flex;

}
ul{
        display: flex;
        flex-direction: column;
       /* background: black;*/
        opacity: 0.8;
        border-radius: 5%;
        /*border:4px solid rgb(255, 0, 128);*/
        width: 200%;height: 110%;
        margin-top:-65px;
        /* margin-top: 55px; */
        /* margin-left: 100px; */
}
li a{
        color:black;
        font-weight: bold;
        text-decoration: none;
}
li:first-letter {
	font-size: 1.5em;
}

ul li {
        /* background: blueviolet; */
        color:white;
        margin-top:8px ;
        /* background-color: azure; */
        list-style: none;
        /* text-align: center; */
        font-size: 20px;
}
li:hover {
        width: 1211px;height: 35px;
        background: black;
        color: white;
        text-decoration:none; 

}
ul li:visited{
        color:red;
}
footer{
       
        background: rgb(146, 146, 146);
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
        display: flex;
	margin:auto;
	width:35px;
	height:35px;
}
strong{
        font-size: 20px;
}
strong a{
    color:black;
    text-decoration: none;
}
strong a:hover{
    color:blue;
}
a:hover{
        color:white;
}

</style>
    </head>
    <body>
        <header>
            <h2>DESARROLLO WEB ENTORNO SERVIDOR Johanna</h2> 
            <div class="caja1"></div>
        </header> 
		<div class="contenedor">
                    <ul>
                        <li><a href="index.php" class="c1">TEMA 1: DESARROLLO WEB EN ENTORNO SERVIDOR</a></li>
                        <li><a href="index2.php" class="c2">TEMA 2: INSTALACIÓN, CONFIGURACIÓN Y DOCUMENTACIÓN DEL ENTORNO DE DESARROLLO Y EXPLOTACIÓN</a></li>
                        <li><a href="../212ProyectoTema3/index.php" class="c3">TEMA 3: CARACTERÍSTICAS DEL LENGUAJE PHP  </a></li>
                        <li><a href="../212ProyectoTema4/index.php"  class="c4">TEMA 4: TÉCNICAS DE ACCESO A DATOS EN PHP </a></li>
                        <li><a href="" class="c4">TEMA 5: DESARROLLO DE APLICACIONES WEB UTILIZANDO CÓDIGO EMBEBIDO </a></li>
                        <li><a href="" class="c4">TEMA 6: PROGRAMACIÓN ORIENTADA A OBJETOS EN PHP</a></li>
                        <li><a href="" class="c4">TEMA 7: PROGRAMACIÓN DE SERVICIOS WEB </a></li>
                        <!--<li><a href="pag3_xml.html" class="c4">TEMA 8: DESARROLLO DE APLICACIONES WEB HÍBRIDAS  </a></li>
                        <li><a href="pag3_xml.html" class="c4">TEMA 9: DESARROLLO DE APLICACIONES WEB HÍBRIDAS </a></li>-->
                    </ul> 
        </div>
    <footer>
        2021-2022 I.E.S. Los sauces. ©Todos los derechos reservados. <strong> <a href="http://daw212.sauces.local/">Johanna Herrero Pozuelo</a></strong>
            <a href="https://github.com/JohannaHPSauces/212ProyectoDWES" target="blank"><img src="../images/git.png" alt="" class="git"></a>
    </footer>
</body>
</html>
