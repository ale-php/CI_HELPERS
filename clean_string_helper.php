<?php
/**
 *  @author Alexandre E. Souza
 *  mail webmaster@progs.net.br
 *  skype ale-php
 * @param String $string
 * @return String
 */

/* basta carregar o helper e ao chamalo passe a string que quer limpar
 * como parametro, e ele o retorna a string limpa, sem ate mesmo espaços
 */
function clean_string($string) {
	
	if($string){
	        $string = str_replace(array('á','à','â','ã'),"a",$string);
	        $string = str_replace(array('Á','À','Â','Ã'),"A",$string);
	        $string = str_replace(array('é','è','ê'),"e",$string);
	        $string = str_replace(array('É','È','Ê'),"E",$string);
	        $string = str_replace(array('í','ì'),"i",$string);
	        $string = str_replace(array('Í','Ì'),"I",$string);
	        $string = str_replace(array('ó','ò','ô','õ','º'),"o",$string);
	        $string = str_replace(array('Ó','Ò','Ô','Õ'),"O",$string);
	        $string = str_replace(array('ú','ù','û'),"u",$string);
	        $string = str_replace(array('Ú','Ù','Û'),"U",$string);
	        $string = str_replace("ç","c",$string);
	        $string = str_replace("Ç","C",$string);
	        $string = str_replace(array('[',']','[','>','<','}','{',')'
	        ,'(',',',':',',',';','!','?','*','%','~','^','-',"'",'`','&',
	        '#',']','"',','),"",$string);
	       // $string = str_replace(" ","",$string);
	      //  $string = str_replace(" ","_",$string);
 
        return $string;
	}

}