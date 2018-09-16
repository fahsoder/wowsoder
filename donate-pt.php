<?php
if(empty($_SESSION)){
session_start();
}
 if(empty($_SESSION)){
	echo "<script>
			alert('You must login to access this page!');
            location.href='../login.php';
            </script>";
 }
?>




<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <title>Wow Soder</title>
        <meta charset = 'UTF-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/bg.css">
		<script type="text/javascript" src="js/functions.js"></script>
        <link rel="icon" href="img/wow_store.icon" type="image/ico">
    <head>
    <body class="bg10">
    <?php include_once('header_login-pt.php'); ?>           
    <div class = 'container-fluid ' style = "overflow: hidden;">
        <div class = "row">
			<div class = "col-md-3"></div>
            <div class = "col-md-6">
                <div class="jumbotron col-lg-15" style="width: 100%; padding-bottom: 80vh; position: absolute; opacity: 0.5;"></div>
                <div class="jumbotron col-lg-15" style="position: relative; background: none">
                    <form class="form-horizontal" action="register.php" method="POST">
						<div class="form-group text-center">
						<select name="Tipos" onchange="mostraDiv(this.value)">
							<option class="form-group" value="conjuntos"> Conjuntos </option>
							<option class="form-group" value="itens"> Itens </option>
							<option class="form-group" value="armas"> Armas </option>
						</select>
						</div>
						
						<div id="conjuntos" class="form-group text-center">
							<select class="form-control"    name="conjuntos"  onchange="optionCheck(this.value);">
								<option class="form-group" value="Warrior">Warrior</option>
								<option class="form-group" value="Mage">Mage</option>
								<option class="form-group" value="Rogue">Rogue</option>
							</select> 
						</div>
						
						<div id="itens" style="display: none" class="form-group text-center" >
							<select class="form-control"  name="itens"  onchange="optionCheck(this.value);">
								<option class="form-group" value="Warrior">Warrior</option>
								<option class="form-group" value="Mage">Mage</option>
								<option class="form-group" value="Rogue">Rogue</option>
							</select> 
						</div>
						
						<div id="armas" style="display: none" class="form-group text-center"  >
							<select class="form-control"  name="armas"  onchange="optionCheck(this.value);">
								<option class="form-group" value="Warrior">Bows</option>
								<option class="form-group" value="Mage">Daggers</option>
								<option class="form-group" value="Rogue">Sword</option>
								<option class="form-group" value="Rogue">Staff</option>
							</select> 
						</div>
                    </form>	
                </div>                    
            </div>
        </div>
    <?php include_once('footer_horizontal.php'); ?>
	</div>
</body>
</html>