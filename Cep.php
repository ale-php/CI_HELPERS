<?php

 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Alexandre E. Souza
 * site progs.net.br
 * skype: ale-php
 * Class para usar web servece para endereço por cep
 */



class Cep
{

  private $rua;
  private $bairro;
  private $cidade;
  private $uf;


function __construct(){
	
	
}


	function busca_cep($cep){

		if(isset($cep)){
    $resultado = @file_get_contents('http://republicavirtual.com.br/web_cep.php?cep='.urlencode($cep).'&formato=query_string');
    

    if($resultado){
        
         parse_str($resultado, $retorno);


    $this->rua = $retorno['logradouro'] ;
    $this->bairro = $retorno['bairro'] ;
    $this->cidade = $retorno['cidade'] ;
    $this->uf = $retorno['uf'] ;
    }else{

    	throw new Exception("Sem Conexao com a internet");
    	
    }}else{

    	throw new Exception("Cep Em branco");
    }
   

}



public function getRua(){

	return $this->rua;
}

public function getBairro(){

	return $this->bairro;
}

public function getCidade(){

	return $this->cidade;
}

public function getUf(){

	return $this->uf;
}


}

/* End of file Cep.php */
/* Location: ./application/libraries/Cep.php */

?>
