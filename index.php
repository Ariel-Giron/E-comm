<?php
	//conexion 'conexion';
?>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>E-commerce</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
    <!--empieza el scrip de la galeria-->
<!--
<script>
function rotar_imagen(){
  var tiempo = 4000;//tiempo en milisegundos
  var arrImagenes = ['img/galeria/-1.jpg', 'img/galeria/-3.jpg','img/galeria/-4.jpg', 'img/galeria/-5.jpg'];
  
  _img = document.getElementById('rotativo');
  
  //cargar la 1er imagen
  _img.src = arrImagenes[0];
  var i=1;			
  setInterval(function(){
    _img.src = arrImagenes[i];
    i = (i == arrImagenes.length-1)? 0 : (i+1);
  }, tiempo);
}
</script>
-->
        <!--termina el scrip de la galeria-->
</head>
<body >
	<header>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
						<span class="sr-only">Desplegar / Ocultar Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.php" class="navbar-brand">E-comm</a>
				</div>
				<!-- Inicia Menu -->
				<div class="collapse navbar-collapse" id="navegacion-fm">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Inicio</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
								Categorias <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Usado</a></li>
								<li class="divider"></li>
								<li><a href="#">Nuevo</a></li>
								<li class="divider"></li>
								<li><a href="#">Todo</a></li>
							</ul>
						</li>
						<li><a href="#">Imagenes</a></li>
						<li><a href="#">Videos</a></li>
					</ul>
					<form action="" class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="buscar">
						</div>
						<button type="submit" class="btn btn-primary">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</form>
				</div>
			</div> 	
		</nav>
        
	</header>
    <!-- empieza la parte de las cajas, termino la parte del menu  -->
    <!--empieza galeria-->
    <!--
    <section class="main container">
		<div class="row" align="center">
		  <section class="posts col-md-12"> 
    <img  id="rotativo" width="100%" height="79%">  
    
    		</section>
    	</div>
    </section>
    -->
    <!--termina galeria-->
    
    
	<section class="main container">
		<div class="row">
		  	<article class="col-md-3"> 	
				<div class="miga-de-pan">
					<p>Tienes montones de experiencias nuevas esperándote a tan solo un clic,
 					desde descuentos en consolas hasta complementos populares y arcades emblemáticos</p>
				</div>
			</article>
			<article class="col-md-3"> 	
				<div class="miga-de-pan">
					<p>Tienes montones de experiencias nuevas esperándote a tan solo un clic,
 					desde descuentos en consolas hasta complementos populares y arcades emblemáticos</p>
				</div>
			</article>
			<article class="col-md-3"> 	
				<div class="miga-de-pan">
					<p>Tienes montones de experiencias nuevas esperándote a tan solo un clic,
 					desde descuentos en consolas hasta complementos populares y arcades emblemáticos</p>
				</div>
			</article>
			<article class="col-md-3"> 	
				<div class="miga-de-pan">
					<p>Tienes montones de experiencias nuevas esperándote a tan solo un clic,
 					desde descuentos en consolas hasta complementos populares y arcades emblemáticos</p>
				</div>
			</article>
			</section>
<!--
			<aside class="col-md-3 hidden-xs hidden-sm">
			  <h4>Mas sobre...</h4>
				<div class="list-group"><a href="#" class="list-group-item">Imagenes</a>
					<a href="#" class="list-group-item">Videos</a>
					<a href="#" class="list-group-item">Copa Mundial </a>

				</div>

				<h4>Articulos Recientes</h4>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading"><img src="img/anuncio/axe.png" width="100%" height="15%">Tenemos nuevas ofertas y promociones cada semana en Xbox.com.</h4><p class="list-group-item-text">
 Tienes montones de experiencias nuevas esperándote a tan solo un clic,
 desde descuentos en consolas hasta complementos populares y arcades emblemáticos</p>
					
				</a>

				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading"><img src="img/anuncio/cocacola.jpg" width="100%" height="15%"><p class="list-group-item-text">Tenemos nuevas ofertas y promociones cada semana en Xbox.com.</h4>
 <p class="list-group-item-text">Tienes montones de experiencias nuevas esperándote a tan solo un clic,
 desde descuentos en consolas hasta complementos populares y arcades emblemáticos</p>
					
				</a>

				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading"><img src="img/anuncio/MD.jpg" width="100%" height="15%">Tenemos nuevas ofertas y promociones cada semana en Xbox.com.</h4>
 <p class="list-group-item-text">Tienes montones de experiencias nuevas esperándote a tan solo un clic,
 desde descuentos en consolas hasta complementos populares y arcades emblemáticos</p>
					
				</a>
		  </aside>
-->
	  </div>
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<p>Pagina de Juego</p>
				</div>
				<div class="col-xs-6">
					<ul class="list-inline text-right">
						<li><a href="#">Inicio</a></li>
						<li><a href="#">Imagenes</a></li>
						<li><a href="#">Videos</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>