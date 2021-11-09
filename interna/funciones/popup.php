<?php
include('funciones/conectar.php');
$conn=conectar();
?>

<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

		<title>APR San Miguel Azapa</title> 
		
		<!-- estilos -->
		<link rel="stylesheet" type="text/css" href="css/administrador.css" media="screen">
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

        <style type="text/css">
.Estilo1 {
	font-family: Calibri;
	font-size: 16px;
}

.Estilo2 {
	font-family: Calibri;
	font-size: 24px;
}

.Estilo4 {color: #FF0000}
        .Estilo6 {font-family: Calibri; font-size: 16px; font-weight: bold; }
        </style>
</head>

<body>
<table border = '1' cellspacing= '0' bordercolor='#EBA222'>
    <tr bgcolor = '#EBA222'>
      <td width="520" align="center"><b><span class='Estilo1'>Descripción Material/Estructura</span></b></td>
      <td width="61" align="center"><b><span class='Estilo1'>Cantidad</span></b></td>
      <td width="80" align="center"><b><span class='Estilo1'>Valor($)</span></b></td>
    </tr>
<?php	

$result = mysql_query("SELECT material.DESCRIPCION_MATERIAL, material.COD_EMEL, composicion_estructura.CANTIDAD, material.VALOR_MATERIAL 
FROM material, composicion_estructura 
WHERE composicion_estructura.COD_ESTRUCTURA = '$estructura' 
AND composicion_estructura.COD_MATERIAL = material.COD_MATERIAL
AND composicion_estructura.COD_MATERIAL REGEXP '^-?[0-9]+$';");	
//0:descr_material		1:cod_emel		2:cantidad_material		3:valor_material

$estructuras = mysql_query("SELECT estructura.DESCRIPCION_ESTRUCTURA, composicion_estructura.COD_MATERIAL, composicion_estructura.CANTIDAD 
FROM composicion_estructura, estructura 
WHERE composicion_estructura.COD_ESTRUCTURA = '$estructura' 
AND composicion_estructura.COD_MATERIAL = estructura.COD_ESTRUCTURA");
//0:descr_estructura	1:cod_estructura	2:cantidad_estructura

while ($row = mysql_fetch_row($result)){		//MATERIALES PERTENESCIENTES A ESTRUCTURA
	$aux = number_format($row[3],0,',','.');	
	echo "<tr> \n";
	echo "<td><span class='Estilo1'>$row[0]</span></td> \n";		//HAY QUE PROBARLO
	echo "<td align='center'><span class='Estilo1'>$row[2]</span></td> \n";
	echo "<td align='right'><span class='Estilo1'>$aux</span></td> \n";
	echo "\n";
	echo "\n";
	echo "</tr> \n";
}//while

while ($row = mysql_fetch_row($estructuras)){		//MATERIALES PERTENESCIENTES A ESTRUCTURA
	echo "<tr> \n";
	echo "<td><span class='Estilo1'>$row[0]</span></td> \n";		//HAY QUE PROBARLO
	echo "<td align='center'><span class='Estilo1'>$row[2]</span></td> \n";
	echo "<td align='center'><span class='Estilo1'>--</span></td> \n";
	echo "\n";
	echo "\n";
	echo "</tr> \n";
}//while	
?>

</table>
</body>
</html>

<?php
mysql_close();
?>