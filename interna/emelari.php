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
			<h2>Sistema de Generación de Presupuestos para el Área de Obras<br>Empresa Eléctrica de Arica</h2>
			<p>Se desarrolló un sistema para apoyar la Gestión de Presupuestos del Área de Proyectos e Ingeniería de Obras de la Empresa Eléctrica de Arica. El año 2012 nace a raíz de una necesidad del Área, quienes buscan eficiencia en la utilización de recursos y ser eficaces en el cumplimiento de obras y proyectos planificados, reduciendo los costos de hora hombre utilizados en este proceso. Además el área debe automatizar un proceso del que necesita tener un control preciso de los recursos tanto humanos como materiales. Se logra con el sistema una correcta cubicación de materiales, valorizar los gastos logísticos, gestionar los contratistas y generar un documento confiable para poder obtener las validaciones pertinentes para su posterior presentación al cliente solicitante de la obra o proyecto. Además, de crear perfiles con diferentes privilegios que actualicen la información del personal, contratistas y elementos manejados para presupuestar.</p>
		</div>

		<ul class="galeria">
			<li><a href="#img1"><img src="../imagen/proyectos/emelari/1.jpg" alt="img0"></a></li>
			<li><a href="#img2"><img src="../imagen/proyectos/emelari/2.jpg" alt="img1"></a></li>
			<li><a href="#img3"><img src="../imagen/proyectos/emelari/3.jpg" alt="img2"></a></li>
			<li><a href="#img4"><img src="../imagen/proyectos/emelari/4.jpg" alt="img3"></a></li>
			<li><a href="#img5"><img src="../imagen/proyectos/emelari/5.jpg" alt="img4"></a></li>
			<li><a href="#img6"><img src="../imagen/proyectos/emelari/6.jpg" alt="img5"></a></li>
			<li><a href="#img7"><img src="../imagen/proyectos/emelari/7.jpg" alt="img6"></a></li>
			<li><a href="#img8"><img src="../imagen/proyectos/emelari/8.jpg" alt="img7"></a></li>
		</ul>

		<div class="modal" id="img1">
		  <h3>Login del Sistema</h3>
		  <div class="imagen">
		      <a href="#img8">&#60;</a>
		      <a href="#img2"><img src="../imagen/proyectos/emelari/1.jpg"></a>
		      <a href="#img2">></a>
		  </div>
		  <a class="cerrar" href=""><img src="../imagen/lightbox-icon-close-compact.png"></a>
		</div>

		<div class="modal" id="img2">
		  <h3>Perfil de Usuario del Sistema</h3>
		  <div class="imagen">
		      <a href="#img1">&#60;</a>
		      <a href="#img3"><img src="../imagen/proyectos/emelari/2.jpg"></a>
		      <a href="#img3">></a>
		  </div>
		  <a class="cerrar" href=""><img src="../imagen/lightbox-icon-close-compact.png"></a>
		</div>

		<div class="modal" id="img3">
		  <h3>Perfil Administrador del Sistema</h3>
		  <div class="imagen">
		      <a href="#img2">&#60;</a>
		      <a href="#img4"><img src="../imagen/proyectos/emelari/3.jpg"></a>
		      <a href="#img4">></a>
		  </div>
		  <a class="cerrar" href=""><img src="../imagen/lightbox-icon-close-compact.png"></a>
		</div>

		<div class="modal" id="img4">
		  <h3>Planilla con informaci�n b�sica del Presupuesto</h3>
		  <div class="imagen">
		      <a href="#img3">&#60;</a>
		      <a href="#img5"><img src="../imagen/proyectos/emelari/4.jpg"></a>
		      <a href="#img5">></a>
		  </div>
		  <a class="cerrar" href=""><img src="../imagen/lightbox-icon-close-compact.png"></a>
		</div>

		<div class="modal" id="img5">
		  <h3>Sección de edición de materiales, estructuras y trabajos de un Presupuesto</h3>
		  <div class="imagen">
		      <a href="#img4">&#60;</a>
		      <a href="#img6"><img src="../imagen/proyectos/emelari/5.jpg"></a>
		      <a href="#img6">></a>
		  </div>
		  <a class="cerrar" href=""><img src="../imagen/lightbox-icon-close-compact.png"></a>
		</div>

		<div class="modal" id="img6">
		  <h3>Sección para edición de valores y codigos de insumos</h3>
		  <div class="imagen">
		      <a href="#img5">&#60;</a>
		      <a href="#img7"><img src="../imagen/proyectos/emelari/6.jpg"></a>
		      <a href="#img7">></a>
		  </div>
		  <a class="cerrar" href=""><img src="../imagen/lightbox-icon-close-compact.png"></a>
		</div>

		<div class="modal" id="img7">
		  <h3>Sección para edición de Proveedores y Contratistas</h3>
		  <div class="imagen">
		      <a href="#img6">&#60;</a>
		      <a href="#img8"><img src="../imagen/proyectos/emelari/7.jpg"></a>
		      <a href="#img8">></a>
		  </div>
		  <a class="cerrar" href=""><img src="../imagen/lightbox-icon-close-compact.png"></a>
		</div>

		<div class="modal" id="img8">
		  <h3>Listado de Estrcuturas utilizados en los proyectos</h3>
		  <div class="imagen">
		      <a href="#img7">&#60;</a>
		      <a href="#img1"><img src="../imagen/proyectos/emelari/8.jpg"></a>
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
