<?php

include 'guests.php';

$guest = array(
	'name' => 'Hola',
	'singular' => true
);

$guestHash = isset($_GET['g'])?$_GET['g']:null;
if($guestHash)
{
	$guests = getGuests();
	$guest = $guests[$guestHash];
}

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<meta name="description" content="Nuestra boda">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    
	<title>Nuestra boda</title>
	
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	
	<!-- stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Dawning+of+a+New+Day' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
	<div class="container">
		<header>
			<ul class="menu clearfix">
				<li><a href="#" data-section="home" class="active">home</a></li>
				<li><a href="#" data-section="comoLlegar">cómo llegar</a></li>
				<li><a href="#" data-section="tips">tips</a></li>
				<li><a href="#" data-section="regalo">regalo</a></li>
			</ul>
			<img src="images/header-background-mobile.jpg" class="img-responsive center-block visible-xs">
		</header>
		<section id="home">
			<img src="images/home-text.png" class="img-responsive hidden-xs">
			
			<div class="welcomeMessage">
				<p>
					<strong><?php echo $guest['name'] ?>,</strong><br>
					<?php echo $guest['singular']?'Estás':'Están' ?> formalmente <?php echo $guest['singular']?'invitado':'invitados' ?> a nuestra boda! <br>
					Para saber más sobre esta gran fiesta, <br>
					<?php echo $guest['singular']?'te':'les' ?> proponemos recorrer la web. <br>
					<span class="joke">Sólo espermos que <a href="https://www.youtube.com/watch?v=ejnElP1hgS8" target="_blank">no nos pase lo mismo</a> ;)</span>
				</p>
			</div>
			
			<div class="internalSection comoLlegar">
				<h3>Para que no pierdas tiempo buscando cómo llegar, aquí te facilitamos toda la información necesaria:</h3>
				
				<div class="addresses">
					<p>
						<strong>civil:</strong> 05/12/2014 / 10hs / av. cabildo 3067 / 
						<a href="https://www.google.com.ar/maps/place/Av+Cabildo+3067,+Buenos+Aires,+Ciudad+Aut%C3%B3noma+de+Buenos+Aires/@-34.5538385,-58.4641772,17z/data=!3m1!4b1!4m2!3m1!1s0x95bcb68263ce6291:0x43f5c0ea1432bcd4!6m1!1e1?hl=es-419" target="_blank">mapa</a>
					</p>
					<p><strong>fiesta:</strong> 06/12/2014 / 11hs / <a href="#" data-toggle="modal" data-target="#partyIndicactions">indicaciones</a></p>
				</div>
				
				<img src="images/comoLlegar-map.png" class="img-responsive hidden-xs mapGraphic">
			</div>
			<div class="internalSection tips">
				<h3 class="visible-xs">La idea de la fiesta es que no sea tradicional. Pasaremos el día en una Casa Quinta con pileta y muy rica comida.</h3>
				<img src="images/tips-background.png" class="img-responsive hidden-xs">
				<img src="images/tips-background-mobile.jpg" class="img-responsive visible-xs">
			</div>
			<div class="internalSection regalo">
				<img src="images/regalo-background.png" class="img-responsive hidden-xs">
				<div class="gift">
					<p>Con lo que puedas aportar nos vas a estar ayudando a pagar la luna de miel.</p>
					<ul class="giftMethods">
						<li><a href="#" data-toggle="modal" data-target="#depositoBancario"><img src="images/depositoButton.jpg" class="img-responsive"></a></li>
						<li>
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
								<input type="hidden" name="cmd" value="_donations">
								<input type="hidden" name="business" value="NFF2XCNPWB2LN">
								<input type="hidden" name="lc" value="AR">
								<input type="hidden" name="item_name" value="Casamiento Pato y Diego">
								<input type="hidden" name="currency_code" value="USD">
								<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHosted">
								<input type="image" src="images/paypalButton.jpg" border="0" name="submit" class="img-responsive" alt="Regalo para Pato y Diego">
							</form>
						</li>
						<li><img src="images/efectivoButton.jpg" class="img-responsive"></li>
					</ul>
				</div>
			</div>
			<img src="images/home-bottom-background-mobile.jpg" class="img-responsive visible-xs footerImage">
		</section>			
	</div>
	
	<div id="partyIndicactions" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
					<h4 class="modal-title">Indicaciones para llegar a la fiesta</h4>
      			</div>
      			<div class="modal-body">
        			<h4>Cómo llegar...</h4>
        			<ol>
        				<li>Tomar la Panamericana.</li>
        				<li>Al final de la Panamericana continuar por Ruta 8.</li>
        				<li>En Ruta 8 Km. 73, doblar en la entrada al Remanso, calle Media caña.</li>
        				<li>Seguir por Media caña y doblar a la derecha en calle La Baguala e inmediatamente a la izquierda hacia calle Amapola.</li>
        				<li>Seguir 5 cuadras hasta Jacarandá y Amapola.</li>
        			</ol>
        			<br class="hidden-xs">
        			<h4>Más información</h4>
        			<div class="moreInfo">
	        			<a href="https://www.google.com.ar/maps/dir/Superi+2539,+Buenos+Aires,+Ciudad+Aut%C3%B3noma+de+Buenos+Aires,+Argentina/-34.3950728,-59.1004139/@-34.3936665,-59.0983431,4635m/data=!3m1!1e3!4m9!4m8!1m5!1m1!1s0x95bcb67ded1f1543:0x6319e5428742c7b0!2m2!1d-58.4699402!2d-34.5639207!1m0!3e0?hl=es-419" target="_blank">Google Maps</a>
	        			|
	        			<a href="images/plano.jpg" target="_target">Plano del Barrio Jularó</a>
	        			|
	        			<a href="#">Video explicativo</a>        			
        			</div>
      			</div>
    		</div><!-- /.modal-content -->
  		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	<div id="depositoBancario" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
					<h4 class="modal-title">Datos del depósito bancario</h4>
      			</div>
      			<div class="modal-body">
        			<p><strong>CBU:</strong> xxxxxxxxxxxxx </p>
        			<p><strong>Cuenta n°:</strong> xxx/xxxxx</p>
        			<p><strong>Banco:</strong> Santander Río</p>
      			</div>
    		</div><!-- /.modal-content -->
  		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	<!-- javascript -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>