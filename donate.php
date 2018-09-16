<?php
if(empty($_SESSION)){
session_start();
}
$lg = $_SESSION['lg'];
if($lg == 'en'){
	include_once('donate-en.php');
}else if($lg == 'pt'){
	include_once('donate-pt.php');
}
	

?>