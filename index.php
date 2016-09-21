<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="En Parques de México estamos convencidos de que los espacios públicos tienen el poder de cambiar nuestro país, a través de su correcta gestión e implementación con modelos incluyentes y participativos.">
	<link rel="icon" type="image/png" href="img/favicon.png">
	<link rel="stylesheet" href="css/style.css" typ¨="text/css">
	<title>Parques de México | Espacios públicos para la gente</title>
	<link rel="stylesheet" href="http://www.jsdelivr.com/#!hint.css">
<!-- Datos para tooltip con bootstrap  -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--  Fin de archivos bootstrap   -->

	<!-- Optional theme -->
</head>
<body >
	<div id="overlay">
		<header>
			<picture class="logoHome">
				<source media="(max-width:800px)" sizes="50vw" srcset="img/logoVerde.svg" class="logoHome">
				<img src="img/logoParques.svg" class="logoHome"><!-- Logotipo -->
			</picture>
			<hr id="linea"><!-- Línea divisora-->
		</header>
		<section class="seccionPrincipal">
			<p><span class="fraseMenor">ESTAMOS CONVENCIDOS QUE</span><BR>
			LOS <span class="negritas">ESPACIOS PÚBLICOS</span><BR>
			TIENEN EL PODER DE<BR>
			<span class="negritas">CAMBIAR</span> NUESTRO PAÍS</p>
			<video  autoplay loop poster="img/fondo.jpg" >
				<source src="videos/PDM_15.mp4" type="video/mp4">
				<source src="videos/PDM_15.webm" type="video/webm">
			</video>
		</section>
		<section class="sitios">
			<!--<p id="msj">hola</p>-->
			<div class="consultora">
				<a id="btnConsultora" href="http://www.parquesdemexico.org/consultora" data-toggle="tooltip" title="Estudios, Planes Maestros y Proyectos Ejecutivos">CONSULTORA</a>
						<!-- Botón verde
						<button type="button" class="btn btn-success btn-lg">FUNDACIÓN</button>-->
			</div>
			<div class="fundacion">
				<a id="btnFundacion" href="http://www.parquesdemexico.org/fundacion" data-toggle="tooltip" title="Construcción Comunitaria">FUNDACIÓN</a>
						<!-- Botón verde<button type="button" class="btn btn-success btn-lg" src="http://www.parquesdemexico.org">CONSULTORA</button>-->
			</div>
		</section>
		<footer class="footer">
			<div class="derechos">
				<p>PARQUES DE MÉXICO DERECHOS RESERVADOS 2010-2016</p>
			</div>
		</footer>
	</div><!-- fin del overlay-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Datos para tooltip con bootstrap  -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script.js">	</script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49470137-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
