<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<!-- HEAD DE LA PAGINA -->
	<?php include("plantillas/headHTML.php"); ?>
	<link rel="stylesheet" href="css/estilos_contacto.css">
</head>
<body>
	<!-- CABECERA DE PAGINA ---------------------->
	<?php include("plantillas/headerHTML.php"); ?>

<!-- CUERPO DE PAGINA ------------------------>

<div class="contacto">
	<div class="comentario">Contáctenos y recibirá una respuesta antes de 24 horas <br> Incluya su celular y lo llamaremos</div>

	<form action="contact.php" method="post">
		<div class="elem-group">
			<label for="name">Nombre</label>
			<input type="text" id="name" name="visitor_name" placeholder="" pattern=[A-Z\sa-z]{3,30} required>
		</div>
		<div class="elem-group">
			<label for="email">E-Mail</label>
			<input type="email" id="email" name="visitor_email" placeholder="ejemplo@email.com" required>
		</div>
		<div class="elem-group">
			<label for="numero">Teléfono</label>
			<input type="text" id="numero" name="visitor_numero" placeholder="912345678" pattern=[0-9]{8,10} >
		</div>
		<div class="elem-group">
			<label for="title">Motivo del Contacto</label>
			<input type="text" id="title" name="email_title" required placeholder="Consulta, Solicitud de Presupuesto, etc." pattern=[A-Za-z0-9\s]{8,60}>
		</div>
			<div class="elem-group">
			<label for="message">Escriba su Mensaje</label>
			<textarea id="message" name="visitor_message" place	holder="Escriba lo que desee." required></textarea>
		</div>
		<button type="submit">Enviar Mensaje</button>
	</form>
</div>
<!-- FOOTER DE LA PAGINA -------------------->
<?php include("plantillas/footerHTML.php"); ?>
</body>
</html>
