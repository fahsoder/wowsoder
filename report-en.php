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
    <body class="bg5">
        <?php include_once('header_login.php'); ?>
        <div class='container-fluid' style = "overflow: hidden; ">
            <div class = "row no-gutters">
                <div class = "col-md-5 " >
                    <img width="450" height="700" src="img/world_of_warcraft_render_by_motiiondesigns-d334scd.png" style=" background-repeat: no-repeat;">
                </div>
                <div class = "col-md-7">
					<a href="index.php" ><a href="index.php" ><button type="button" class="btn btn-secondary btn-sm">Back</button></a>
                    <div class="card opacity-1" >
                        <div class="card text-center opacity-1" >
                            <div class="card-header">
                                WoW Soder Report
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Report Page</h5>
                                <p class="card-text">Remember that you're helping WoW Soder as so yourself when your report any bug, cheater or any kind of probelm.</p> 
                                <p class="card-text">At the moment, please report any situation mentioned above via e-mail to: wowsoder@gmail.com</p>  
                                <p class="card-text">PS: Try to send at least one picture attached with the e-mail to make it easier to be understood.</p>
                                <p class="card-text">We appreciate your patience and colaboration! Have fun in game!</p>                                      
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