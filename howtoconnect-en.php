
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
    <body class="bg3">
        <?php 
		if(empty($_SESSION)){
			include_once('header.php');
		}else{
			include_once('header_login.php');
		}
		?>
        <div class='container-fluid' style = "overflow: hidden; ">
            <div class = "row no-gutters">
                <div class = "col-md-5 " >
                    <img width="400" height="600" src="img/d6b2e0421cb82e95c04c1e2401b1fb9d.png" style=" background-repeat: no-repeat;">
                </div>
                <div class = "col-md-7">
					<a href="index.php" ><a href="index.php" ><button type="button" class="btn btn-secondary btn-sm">Back</button></a>
                    <div class="card opacity-1" >
                        <div class="card text-center opacity-1" >
                            <div class="card-header">
                                WoW Soder How to Connect
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Steps to connect in WoW Soder</h5>
                                <p class="card-text">1: Download the World of WarCraft: Wrath of Lich King version 3.3.5.</p> 
                                <p class="card-text"><a href="magnet:?xt=urn:btih:08388f74cb683ef25d31b5d9c34a0411e4555c2c&dn=WOW+Wotlk+3.3.5a&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969&tr=udp%3A%2F%2Fzer0day.ch%3A1337&tr=udp%3A%2F%2Fopen.demonii.com%3A1337&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969&tr=udp%3A%2F%2Fexodus.desync.com%3A6969">Download the game - Torrent Link</a></p>
                                <p class="card-text">2: Go to the game folder, enter in the "Data" folder, then in "Enus" folder. Open the file "realmlist.wtf" with notepad program. </p>
                                <p class="card-text">3: Delete everthing that is inside of the "realmlist.wtf" and put this phrase:</p>
                                <p class="card-text">set realmlist wowsoder.ddns.net</p>
                                <p class="card-text">4: Save the file and close it.</p>
                                <p class="card-text">5: Register your account in our web site. This account you will use to log ingame and into our website/forums.</p>
                                <p class="card-text"><a href="register.php">Register your account</a></p>
                                <p class="card-text">Portuguese -> <a href="howtoconnect-pt.php">Como conectar</a></p> 
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
        </div>
        <?php include_once('footer_horizontal.php'); ?>
    </body>
</html>