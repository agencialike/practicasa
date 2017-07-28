<?php 
/*
Template name: contacto
*/
?>
<?php 
 include "header.php";
 include "navbar.php";
 include "banner-cont.php";
?>
<div class="map col-xs-12" style="padding: 0px;">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.9926716883147!2d-79.91538638467378!3d-2.156481737804042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6d8419281f4d%3A0x5e01c0d23288cc10!2sPractiCasa!5e0!3m2!1ses!2sec!4v1501277326153" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
 
<div class="container" style="margin-top: 60px; margin-bottom: 60px;">
<h1 class="col-xs-12" style="font-size: 24px; font-weight: 800;">ENVÍENOS SUS COMENTARIOS</h1>
	<div class="col-md-9 col-xs-12">
		<form action="" class="contactanos" action="" method="post" role="form">
			<input type="nombre" class="col-xs-12" type="text" placeholder="Nombre">
			<input type="email" class="col-xs-12" type="text" placeholder="Email">
			<input type="asunto" class="col-xs-12" type="text" placeholder="Asunto">
			<input type="mensaje" class="col-xs-12" type="text-area" placeholder="Mensaje">
			<button type="submit" class="cta-enviar col-xs-12 col-md-6 col-md-offset-3">Enviar</button>
		</form>
	</div>

	<div class="col-md-3 col-xs-12 abajo" >
		<div class="col-xs-12">	
			<span><i class="fa fa-map-marker" aria-hidden="true"></i>
 				Dirección: </span>
 			<br>  Centro Comercial, Dicentro L#37,  <br><br></div>
		<div class="col-xs-12"><span><i class="fa fa-envelope-o" aria-hidden="true"></i>
 Mail: </span><br>  info@practicasa.ec <br><br></div>
		<div class="col-xs-12"><span><i class="fa fa-phone" aria-hidden="true"></i>
 Teléfono: </span><br> +593 (4) 292 2112
		</div>
	</div>
</div>

<?php include "footer.php"; ?>