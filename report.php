<?php
session_start();
if(empty($_SESSION)){
	echo "<script>
			alert('Você deve fazer login para acessar esta página!');
            location.href='login.php';
            </script>";
}else{
	$lg = $_SESSION['lg'];
	if($lg == 'en'){
		include_once('report-en.php');
	}else if($lg == 'pt'){
		include_once('report-pt.php');
	}	
 }
?>
