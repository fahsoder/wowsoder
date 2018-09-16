<?php 
session_start();
if(!empty($_SESSION)){
	echo "<script>
			location.href='character.php';
	</script>";
}

?>

<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>WoW Soder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/bg.css">
    <link rel="stylesheet" href="css/opacity.css">
    <link rel="icon" href="../img/wow_store.icon" type="image/ico">   
</head>
<body class="bg">
    <?php 
		if(empty($_SESSION)){
			include_once('header-index.php');
		}else{
			include_once('header_login.php');
		}
	?>
    <div class = 'container-fluid fixed-center' style = "overflow: hidden; ">
		<div class="jumbotron" style="background: none; position: relative;"></div>
		<div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
				<div class="card bg-primary opacity-1">
                    <div href="login.php" class="card-body bg-secondary text-center">
                        <label href="login.php" style="color: white"><h5> CHOOSE YOUR LANGUAGE - ESCOLHA O SEU IDIOMA</h5></label> 
                    </div>
				</div>
                <div class="card bg-primary opacity-1">
                    <div class="card-body bg-secondary text-center">
                        <a href="login.php" class="btn btn-lg btn-secondary"> ENGLISH </a> 
                    </div>
				</div>
				<div class="card bg-primary opacity-1">
                    <div class="card-body bg-secondary text-center">
                        <a href="login-pt.php" class="btn btn-lg btn-secondary"> PORTUGUÊS </a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('footer_horizontal.php'); ?>  
</body>
</html>