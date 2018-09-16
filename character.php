<?php
session_start();
 if(empty($_SESSION)){
	echo "<script>
			alert('You must login to access this page!');
            location.href='login.php';
            </script>";
 }else{
	$lg = $_SESSION['lg'];
	$login = $_SESSION['login'];
	$email = $_SESSION['email'];
	if(!empty($_SESSION['level'])){
		$level = $_SESSION['level'];
		include_once('gm/index.php');
	}else{
		if($lg == 'en'){
			include_once('character-en.php');
		}else if($lg == 'pt'){
			include_once('character-pt.php');
		}
	}
	
 } 

?>