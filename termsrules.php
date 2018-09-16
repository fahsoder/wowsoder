<?php

session_start();
 if(!empty($_SESSION)){
	$lg = $_SESSION['lg'];
	if($lg == 'en'){
		include_once('termsrules-en.php');
	}else if($lg == 'pt'){
		include_once('termsrules-pt.php');
	}	
 }else{
	include_once('termsrules-pt.php');
 }

?>