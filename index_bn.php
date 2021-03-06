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
			
			
			table {
				margin: 5rem auto;
			table-layout: fixed;
			width: 80%;
			height:100px;
			color:black;
			border-collapse: collapse;
			border: 4px solid black;
			text-align:left;
			padding:2px;
			}
			td{
                            background: white;
				text-align:left;
				border: 4px solid black;width:90px;
			}

			th{
                            background: white;
				border: 4px solid black;
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
            <h2>EJERCICIOS TEMA1 </h2> 
	<div class="caja1"></div>
	</header> 
        <main>
		<table class="default">
		  <tr class="c1">
			<th class="p1">Ejercicios Tema1 Johanna</th>
                        <td><a href="doc/Ejercicios_T1_Johanna.pdf" target="blank">
			<img src="../images/ver.png" class="ver" width="40" height="40" ></td>
		  </tr>
                    <tr>
			<th class="p1">Ejercicios Tema1 Alberto</th>
                        <td><a  href="doc/Ejercicios_T1_Alberto.pdf" target="blank" >
			<img src="../images/ver.png" class="ver" width="40" height="40" ></td>
                   </tr>
		</table>
        </main>
         <footer>
        2021-2022 I.E.S. Los sauces. ??Todos los derechos reservados. <strong> <a href="http://daw212.sauces.local/">Johanna Herrero Pozuelo</a></strong>
            <a href="https://github.com/JohannaHPSauces/212ProyectoDWES/tree/developer" target="blank"><img src="../images/git.png" alt="" class="git"></a>
        </footer>
			
    </body>
</html>