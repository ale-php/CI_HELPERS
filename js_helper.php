<?php


function js_link($js){
	$caminho = base_url('public/js/'.$js);
	return "<script   src='$caminho'></script>";

}
?>