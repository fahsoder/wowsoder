<?php
if(empty($_SESSION)){
session_start();
}
 if(empty($_SESSION)){
	echo "<script>
			alert('You must login to access this page!');
            location.href='../login.php';
            </script>";
 }else if($_SESSION['level'] != 3){
	 echo "<script>
			alert('This page is available only for GMs!');
            location.href='../login.php';
            </script>";
 }else{

	$level = $_SESSION['level'];
	$lg = $_SESSION['lg'];
	$login = $_SESSION['login'];
	$email = $_SESSION['email'];
	
	
 } 

?>




<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <title>Wow Soder</title>
        <meta charset = 'UTF-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="../css/bg.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="../img/wow_store.icon" type="image/ico">
    <head>
    <body class="bg9">
		<?php include_once('header-pt.php'); ?>		
		<div class = 'container-fluid ' style = "overflow: hidden; ">
			<div class="row" >
				<div class="col-md-4">
					<div class="card bg-primary opacity-1">
						<div class="card-body bg-secondary">
							<h5 class="card-title text-light">Bem vindo: <?php echo $login; ?>!</h5>
							<p class="card-text text-light">Estamos muito felizes de ver você por aqui! Divirta-se!</p>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="card bg-primary opacity-1">
						<div class="card-body bg-secondary">
							<h4 class="card-title text-light">Novidades/Eventos<a style="float: right" class="btn btn-outline-dark my-2 my-sm-0" href="http://wowsoder.ddns.net/events.php">Ver tudo</a> </h4> 
						</div>
						<div class="card-body bg-secondary">
							<h5 class="card-title text-light">Recompensa para os 3 primeiros personagens a atingir o level 80!</h5>         
							<p class="card-text text-light">WoW Soder dará aos três primeiros personagens que atingirem o nível 80, um item especial! Para receber o item, você deverá primeiramente atingir o nível 80 e então submeter um ticket para os Mestres de Jogo, informando que você atingiu o nível 80!</p>      
							<p class="card-text text-light">Data de início: 03/09/2018 - 00:00     |   Data do fim: No end date; - 23:00</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card bg-primary opacity-1">
						<ul class="list-group list-group-flush bg-secondary text-center" >                            
							<li class="list-group-item bg-secondary"><a class="text-light" href="http://wowsoder.ddns.net/howtoconnect.php">Como conectar</a></li>
							<li class="list-group-item bg-secondary"><a class="text-light" href="http://wowsoder.ddns.net/forum/index.php">Forum <img style="float: right; height: 27px;"src="https://png.icons8.com/ios/50/000000/hammer-filled.png"></a></li>
							<li class="list-group-item bg-secondary"><a class="text-light" href="http://wowsoder.ddns.net/donate.php">Doações <img style="float: right; height: 27px;"src="https://png.icons8.com/ios/50/000000/hammer-filled.png"></a></li>
							<li class="list-group-item bg-secondary"><a class="text-light" href="http://wowsoder.ddns.net/report.php">Ajuda</a></li>
							<li class="list-group-item bg-secondary"><a class="text-light" href="http://wowsoder.ddns.net/termsrules.php">Termos de Uso</a></li>
							<li class="list-group-item bg-secondary"><a class="text-light" href="https://wotlk.evowow.com/">WoW LK Database</a></li>
							<li class="list-group-item bg-secondary"><a class="text-light" href="http://wowsoder.ddns.net/gm/edit-item.php">Gerenciador de Items</a></li>
						</ul>
					</div>                            
				</div>
			</div>
		</div>
		<?php include_once('footer_horizontal.php'); ?>  
    </body>
</html>