
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
        <?php include_once('header_login-pt.php'); ?>
        <div class='container-fluid' style = "overflow: hidden; ">
            <div class = "row no-gutters">
                <div class = "col-md-5 " >
                    <img width="450" height="700" src="img/world_of_warcraft_render_by_motiiondesigns-d334scd.png" style=" background-repeat: no-repeat;">
                </div>
                <div class = "col-md-7">
					<a href="index.php" ><a href="index.php" ><button type="button" class="btn btn-secondary btn-sm">Voltar</button></a>
                    <div class="card opacity-1" >
                        <div class="card text-center opacity-1" >
                            <div class="card-header">
                                WoW Soder - Ajuda
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Página de Ajuda</h5>
                                <p class="card-text">Lembre-se que você está ajudando à WoW Soder assim como à você mesmo quando está reportando um bug, hacker ou qualquer tipo de problema.</p> 
                                <p class="card-text">No momento, pedimos para que todo problema seja reportado via e-mail para: wowsoder@gmail.com</p>  
                                <p class="card-text">PS: Tente enviar pelo menos uma foto anexada ao e-mail para facilitar que o problema seja entendido.</p>
                                <p class="card-text">Nós apreciamos sua paciência! Tenha um bom jogo!</p>                                      
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