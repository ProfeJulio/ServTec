<?php
function conectar(){
	$conn=mysql_connect('localhost','root','root');
	if(!$conn){
		echo 'no hay conexion';
		exit;
	}
	
	mysql_select_db('notario')or die("Error al tratar de selecccionar esta base de datos");
	
	return $db_con;
}

function desconectar()
{
	mysql_close();
}
?>