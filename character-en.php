<?php

 if(empty($_SESSION)){
	echo "<script>
			alert('You must login to access this page!');
            location.href='login.php';
            </script>";
 }else{
	$lg = $_SESSION['lg'];
	$login = $_SESSION['login'];
	$email = $_SESSION['email'];
	
 } 

?>



<html>
    <head>
        <title>Wow Soder</title>
        <meta charset = 'UTF-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="css/bg.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="img/wow_store.icon" type="image/ico">
    <head>
    <body class="bg7">
		<?php include_once('header_login.php'); ?>		
		<div class = 'container-fluid ' style = "overflow: hidden; ">
			<div class="row" >
				<div class="col-md-5">
					<div class="card bg-primary opacity-1">
						<div class="card-body bg-secondary">
							<h5 class="card-title text-light">Welcome <?php echo $login; ?>!</h5>
							<p class="card-text text-light">We are so glad to see you around! Have fun in-game!</p>
							<a class="btn btn-outline-dark" href="http://wowsoder.ddns.net/news.php">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="card bg-primary opacity-1">
						<div class="card-body bg-secondary">
							<h4 class="card-title text-light">News/Events<a style="float: right" class="btn btn-outline-dark my-2 my-sm-0" href="http://wowsoder.ddns.net/events.php">See all</a> </h4> 
						</div>
						<div class="card-body bg-secondary">
							<h5 class="card-title text-light">Special Welcome for you! The beginning of our journey!</h5>     
							<p class="card-text text-light">This weekend will be happening a special event to celebrate the beginning of our journey together! We are going to provide to the players an extra of 200% xp gain for quests and an extra of 100% xp gain for kills. Doubts can be solved via steps set in the report page.  </p>                                
							<p class="card-text text-light">Start date/time: 01/09/2018 - 00:00     |    End date/time: 02/09/2018 - 23:00</p>
						</div>
					</div>
					<div class="card bg-primary opacity-1">
						<div class="card-body bg-secondary">
							<h5 class="card-title text-light">XP Event Bonus!</h5>         
							<p class="card-text text-light">WoW Soder will be offering a bonus of XP gain in quest and kills!</p>      
							<p class="card-text text-light">Start date: Every holidays and weekends, from friday's 11:59pm.  |   End date: No end date;</p>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="card bg-primary opacity-1">
						<ul class="list-group list-group-flush bg-secondary" >                            
							<li class="list-group-item bg-secondary"><a class="text-light" href="http://wowsoder.ddns.net/howtoconnect.php">How to connect</a></li>
							<li class="list-group-item bg-secondary"><a class="text-light" href="http://wowsoder.ddns.net/forum/index.php">Forum <img style="float: right; height: 27px;"src="https://png.icons8.com/ios/50/000000/hammer-filled.png"></a></li>
							<li class="list-group-item bg-secondary"><a class="text-light" href="http://wowsoder.ddns.net/donate.php">Donate <img style="float: right; height: 27px;"src="https://png.icons8.com/ios/50/000000/hammer-filled.png"></a></li>
							<li class="list-group-item bg-secondary"><a class="text-light" href="http://wowsoder.ddns.net/report.php">Report</a></li>
							<li class="list-group-item bg-secondary"><a class="text-light" href="http://wowsoder.ddns.net/termsrules.php">Terms & Rules</a></li>
					<li class="list-group-item bg-secondary"><a class="text-light" href="https://wowhead.com">WoW Library</a></li>
						</ul>
					</div>                            
				</div>
			</div>
		</div>
		<?php include_once('footer_horizontal.php'); ?>  
    </body>
</html>