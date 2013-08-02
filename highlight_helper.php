<?php
/*
O primeiro parâmetro é o texto. O segundo é a palavra a ser destacada. E o terceiro é um parâmetro opcional, que define a classe css que as palavras destacadas irão receber.
*/

function highlight($busca,$palavra)
{

$resultado = str_replace($busca,"<span class='destacar'>$busca</span>",$palavra);

return $resultado;
}


?>