<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <title>Wow Soder</title>
        <meta charset = 'UTF-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/bg.css">
        <link rel="stylesheet" href="css/opacity.css">
        <link rel="icon" href="img/wow_store.icon" type="image/ico">
    <head>
    <body class="bg4">
        <?php 
		if(empty($_SESSION)){
			include_once('header.php');
		}else{
			include_once('header_login.php');
		}
		?>
        <div class = "col-md-12">
        <button type="button" hidden="hidden" class="btn btn-dark"></button></a>
    </div>
    <br>			
    <div class='container-fluid opacity-1' style = "overflow: hidden; ">
        <div class = "row no-gutters">
            <div class = "col-md-5 ">
                    </div>
            <div class = "col-md-7 col-md-offset-3">
				<a href="index.php" ><button type="button" class="btn btn-secondary btn-sm">Back</button></a>
                <div class="card" >
                    <div class="card text-center" >
                        <div class="card-header">
                            <h5>WoW Soder Terms & Rules</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Accounts:</h5>
                            <p class="card-text">A registered user can play World of Warcraft: Wrath of the Lich King 3.3.5 version.</p> 
                            <p class="card-text">Every user is resposible of its own account. 
                                So we do not assume any problems that occurs as a result of ill-use or non-safety user action. </p>
                            <p class="card-text">Visit the <a href="register.php">Registering Page</a> to create your account and get your journey started in WoW Soder.</p>
                            <h6 class="card-title">Cheats & bugs:</h5>
                            <p class="card-text">WoW Soder do not allow any kind of cheats or bug exploit.</p> 
                            <p class="card-text">If caught using any kind of cheat or exploiting any kind of bug, the user will get a ban according the gravity of the action. </p>
                            <p class="card-text">Bans are not removable. If you get a permanent ban there's no way to get your account back. If you get a time ban, you must wait to be able to play again. </p>
                            <h6 class="card-title">Donations:</h5>
                            <p class="card-text">Since WoW Soder is a free server of World of Warcraft: Wrath of Lich King 3.3.5, we accept donations from our players to keep server and services up.</p> 
                            <p class="card-text">The users that help the server with any kind of donation, will be rewarded with a special item according with the amount donated.</p>
                            <p class="card-text">PS: People with banned accounts will not be refound!</p>
                            <p class="card-text">Visit the <a href="donate.php">Donation Page</a> form more informations about the rewards.</p>
                            <h6 class="card-title">Characteres:</h5>
                            <p class="card-text">Every user can create ilimited characteres. But every user is responsible of his own characteres. We do not provide services of recovering deleted characteres but, if we do, the service will cost an amount of tokens. </p>
                            <h6 class="card-title">Chat & Social Rules:</h5>
                            <p class="card-text">We do not accept malicious language that affects anyone by racial or moral offenses. Players can report these kind of people via e-mail or by our <a href="forum/index.php">forum web page.</a></p>
                            <p class="card-text">Offenses against our Game Masters will not be accepted in any circunstance. Actions like this can result in a permanent ban. Game Masters are helping the server with their no refound jobs and deserve the respect of every player. </p>
                        </div>
                        <div class="card-footer text-muted">
                            <?php 
                                $dataInicio = date('d-m-Y', strtotime(date('d-m-Y')));
                                echo $dataInicio . " | Regards, Caedem.";
                            ?>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
        <?php include_once('footer_horizontal.php'); ?>
    </body>
</html>