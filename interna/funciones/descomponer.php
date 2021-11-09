<?php
function descomponer($ticket){
	if(!empty($ticket)){
		$aux = preg_split('//', $ticket, -1, PREG_SPLIT_NO_EMPTY);
			
		$ano = $aux[0].$aux[1];
		$mes = $aux[2].$aux[3];
		$dia = $aux[4].$aux[5];
			
		$hor = $aux[6].$aux[7];
		$min = $aux[8].$aux[9];
		$seg = $aux[10].$aux[11];
			
		$tip = $aux[12];
			
		//$var = explode('-',str_replace('/','-',$date));
		return array($ano,$mes,$dia,$hor,$min,$seg,$tip);
	}
} 
?>
