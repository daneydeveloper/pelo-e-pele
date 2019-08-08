<?php 
	function limpar_string($str) {
		$str = preg_replace('/\d+/u', '', $str);
		$str = preg_replace('/[^A-Za-z0-9\-]/', ' ', $str);
		return str_replace('-', '', $str);
	}

 ?>