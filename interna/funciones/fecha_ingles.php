<?php
function fecha_ingles($date){
 
		 if(!empty($date)){
			 $var = explode('-',str_replace('/','-',$date));
			 return "$var[2]-$var[1]-$var[0]";
		 }
 
	} 
?>