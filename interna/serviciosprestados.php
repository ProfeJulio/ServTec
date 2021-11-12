<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<!-- HEAD DE LA PAGINA -->
	<?php include("plantillas/headHTML.php"); ?>
	<!-- Animaciones de Hover de Cuadros -->
	<link href="css/demo-page.css" rel="stylesheet" media="all">
  <link href="css/imagehover.min.css" rel="stylesheet" media="all">
</head>
<body>
	<!-- CABECERA DE PAGINA ---------------------->
	<?php include("plantillas/headerHTML.php"); ?>
	<!-- CUERPO DE PAGINA ------------------------>
	<hr>
	<h1>Servicios Prestados</h1><br>
	<div class="effects">
		<div class="demo">
			<figure class="imghvr-zoom-out-right"><img src="../imagen/proyectos/servicios01.png" alt="Sistema Presupuesto EMELARI">
				<figcaption>
				<p>Mantenimiento preventivo como: limpieza, actualización de software, liberación de espacio.</p>
				</figcaption><a href="javascript:;" onClick="abrir('eme');"></a>
			</figure>
			<textarea onClick="this.focus();this.select()" readonly="readonly">Mantenimiento Lógico (Sw)</textarea>
		</div>

		<div class="demo">
			<figure class="imghvr-zoom-out-flip-horiz"><img src="../imagen/proyectos/servicios02.png" alt="Sistema APR">
				<figcaption>
				<p> Mantenimiento físico a equipos computacionales: limpieza interna y externa del hardware del equipo.</p>
				</figcaption><a href="javascript:;" onClick="abrir('apr');"></a>
			</figure>
			<textarea onClick="this.focus();this.select()" readonly="readonly">Mantenimiento Físico (Hw)</textarea>
		</div>

		<div class="demo">
			<figure class="imghvr-zoom-out-flip-vert"><img src="../imagen/proyectos/servicios03.png" alt="Sistema Gestión de Pacientes">
				<figcaption>
				<p>Formateo e instalación de Sistema Operativo Windows 10 o 7.</p>
				</figcaption><a href="javascript:;" onClick="abrir('ser');"></a>
			</figure>
			<textarea onClick="this.focus();this.select()" readonly="readonly">Formateo e instalación SO</textarea>
		</div>

		<div class="demo">
			<figure class="imghvr-flip-horiz"><img src="../imagen/proyectos/servicios04.png" alt="Proyecto Automatizaci�n de Estacionamiento">
				<figcaption>
				<p>Evaluaciones y asesoramientos respecto a dispositivos computacionales.</p>
				</figcaption><a href="javascript:;" onClick="abrir('est');"></a>
			</figure>
			<textarea onClick="this.focus();this.select()" readonly="readonly">Asesoramiento Técnico </textarea>
		</div>
		<hr>
		<!--  <div class="demo">
			<figure class="imghvr-push-down"><img src="../imagen/proyectos/ayni.png" alt="Sistema de Ayni">
				<figcaption>
				<p>Sistema de Registro de Invitados y regalos en dinero, utilizado en variedad de eventos de la cultura Aymara</p>
				</figcaption><a href="javascript:;" onClick="abrir('ayn');"></a>
			</figure>
			<textarea onClick="this.focus();this.select()" readonly="readonly">Proyecto Registros de AYNI</textarea>
		</div>

		 <div class="demo">
			<figure class="imghvr-hinge-right"><img src="../imagen/proyectos/camaras.png" alt="Instalación y Configuración">
				<figcaption>
				<p>Instalación y Configuración de Dispositivos de Seguridad, última tecnologia de monitoreo on-Line </p>
				</figcaption><a href="javascript:;" onClick="abrir('cam');"></a>
			</figure>
			<textarea onClick="this.focus();this.select()" readonly="readonly">Dispositivos de Seguridad</textarea>
		</div>

		<div class="demo">
			<figure class="imghvr-flip-diag-2"><img src="../imagen/proyectos/sindicato.png" alt="Sistema Sindicatos">
				<figcaption>
				<p>Simulador para Negociaci�n en Contratos Colectivos Trabajadores Empresas El�ctricas del Norte</p>
				</figcaption><a href="javascript:;" onClick="abrir('sin');"></a>
			</figure>
			<textarea onClick="this.focus();this.select()" readonly="readonly">Simulador Contratos Colectivos</textarea>
		</div>

		<div class="demo">
			<figure class="imghvr-zoom-out-flip-horiz"><img src="../imagen/proyectos/soporte.png" alt="Soporte y Mantenimiento">
				<figcaption>
				<p>Prestamos Servicio de Soporte Local y en Terreno a Diversas Empresas Locales y de Santiago</p>
				</figcaption><a href="javascript:;" onClick="abrir('sop');"></a>
			</figure>
			<textarea onClick="this.focus();this.select()" readonly="readonly">Soporte y Mantenimiento</textarea>
		</div>-->
	</div>
	<hr>
	<!-- FOOTER DE LA PAGINA -------------------->
	<?php include("plantillas/footerHTML.php"); ?>
</body>
</html>
