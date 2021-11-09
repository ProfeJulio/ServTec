<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<!-- HEAD DE LA PAGINA -->
	<?php include("plantillas/headHTML.php"); ?>
	<!-- CUADRO DE GALERIA IMAGENES -->
	<link rel="stylesheet" href="css/galeria.css">
	<script language = "javascript" src="js/iconos_mouse_over.js"></script>
</head>
<body>
	<!-- CABECERA DE PAGINA ---------------------->
	<?php include("plantillas/headerHTML.php"); ?>
	<!-- CUERPO DE PAGINA ------------------------>
	<section>
		<div class="intro">
			<h1>Sistema de Historial de Pacientes y Reserva para Consultas<br>Sergine - Clinica San José</h1>
			<p>Sistema de Información que maneja una base de datos con todos los pacientes atendidos en la consulta de Sergine, guardando historial de enfermedades, exámenes y controles por cada paciente. Además administra una lista de espera de los pacientes por día, lo que permite comunicación entre la secretaria y el doctor de turno que puede ver el siguiente paciente en la lista y consultar su historial antes de recibirlo en su consulta. En la actualidad se trabaja en implementar un módulo de reservas de horas, el cual permitirá coordinar las atenciones y horario de atención a los pacientes.
			</p>
		</div>
	  <ul class="galeria">
      <li><a href="#img1"><img src="../imagen/proyectos/sergine/1.jpg" alt="img0"></a></li>
      <li><a href="#img2"><img src="../imagen/proyectos/sergine/2.jpg" alt="img1"></a></li>
      <li><a href="#img3"><img src="../imagen/proyectos/sergine/3.jpg" alt="img2"></a></li>
      <li><a href="#img4"><img src="../imagen/proyectos/sergine/4.jpg" alt="img3"></a></li>
	  </ul>
    <div class="modal" id="img1">
      <h3>Login del Sistema</h3>
      <div class="imagen">
          <a href="#img4">&#60;</a>
          <a href="#img2"><img src="../imagen/proyectos/sergine/1.jpg"></a>
          <a href="#img2">></a>
      </div>
      <a class="cerrar" href=""><img src="../imagen/lightbox-icon-close-compact.png"></a>
    </div>

    <div class="modal" id="img2">
	    <h3>Sección de Reportes y descarga de archivos</h3>
	    <div class="imagen">
	        <a href="#img1">&#60;</a>
	        <a href="#img3"><img src="../imagen/proyectos/sergine/2.jpg"></a>
	        <a href="#img3">></a>
	    </div>
	    <a class="cerrar" href=""><img src="../imagen/lightbox-icon-close-compact.png"></a>
    </div>

    <div class="modal" id="img3">
      <h3>Listado de Atenciones Realizadas y editables</h3>
      <div class="imagen">
          <a href="#img2">&#60;</a>
          <a href="#img4"><img src="../imagen/proyectos/sergine/3.jpg"></a>
          <a href="#img4">></a>
      </div>
      <a class="cerrar" href=""><img src="../imagen/lightbox-icon-close-compact.png"></a>
    </div>

  	<div class="modal" id="img4">
	    <h3>Lista de espera visible por la secretaria y el doctor de turno</h3>
	    <div class="imagen">
	        <a href="#img3">&#60;</a>
	        <a href="#img1"><img src="../imagen/proyectos/sergine/4.jpg"></a>
	        <a href="#img1">></a>
	    </div>
	    <a class="cerrar" href=""><img src="../imagen/lightbox-icon-close-compact.png"></a>
		</div>
		<hr>
	</section>
	<!-- FOOTER DE LA PAGINA -------------------->
	<?php include("plantillas/footerHTML.php"); ?>
</body>
</html>
