<?php

session_start();
 if(!empty($_SESSION)){
	$lg = $_SESSION['lg'];
	if($lg == 'en'){
		include_once('howtoconnect-en.php');
	}else if($lg == 'pt'){
		include_once('howtoconnect-pt.php');
	}	
 }else{
	include_once('howtoconnect-pt.php');
 }

?>