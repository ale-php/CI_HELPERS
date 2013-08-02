<?php

/**
 * @author Alexandre E. Souza
 * mail webmaster@progs.net.br
 * @param Date $date1
 * @param Date $date2
 * @return float
 */

/* função para calcular distancias em dias entre duas datas */
function how_days($inicio,$fim){
	$data1 = $inicio;
	$data2 = $fim;
		$days = round((strtotime($data2) - strtotime($data1)) / (24 * 60 * 60), 0);
	
		return $days;
}