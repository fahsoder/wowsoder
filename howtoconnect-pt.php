
<html>
    <head>
        <title>Wow Soder</title>
        <meta charset = 'UTF-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bg.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="img/wow_store.icon" type="image/ico">
    <head>
    <body class="bg3">
        <?php
		if(empty($_SESSION)){
			include_once('header-pt.php');
		}else{
			include_once('header_login-pt.php');
		} 
		?>
        <div class='container-fluid' style = "overflow: hidden; ">
            <div class = "row no-gutters">
                <div class = "col-md-5 " >
                    <img width="400" height="600" src="img/d6b2e0421cb82e95c04c1e2401b1fb9d.png" style=" background-repeat: no-repeat;">
                </div>
                <div class = "col-md-7">
					<a href="index.php" ><button type="button" class="btn btn-secondary btn-sm">Voltar</button></a>
                    <div class="card opacity-1" >
                        <div class="card text-center opacity-1" >
                            <div class="card-header">
                                WoW Soder Como Conectar
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Passo a passo para conectar em WoW Soder</h5>
                                <p class="card-text">1: Faça o download do jogo World of Warcraft Wrath of the Lich King versão 3.3.5.</p> 
                                <p class="card-text"><a href="magnet:?xt=urn:btih:08388f74cb683ef25d31b5d9c34a0411e4555c2c&dn=WOW+Wotlk+3.3.5a&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969&tr=udp%3A%2F%2Fzer0day.ch%3A1337&tr=udp%3A%2F%2Fopen.demonii.com%3A1337&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969&tr=udp%3A%2F%2Fexodus.desync.com%3A6969">Download do jogo - Torrent Link</a></p>
                                <p class="card-text">2: Se preferir que o jogo seja em português, estamos disponibilizando a tradução para o jogo.</p>
                                <p class="card-text"><a href="https://mega.nz/#!McMEQSwS!XgGpY46adLrRMrvlE6ZbxGeGwX8ZrM6giZE7wCw8HPE">Versão traduzida</a></p> 
                                <p class="card-text">3: Faça o download do executável do jogo em português, e cole dentro da pasta raiz do jogo.</p> 
                                <p class="card-text"><a href="https://mega.nz/#!QU8HkZZI!RTquCSqk5Ghb_cN4TLJROUnbaptYhU-HFCUW3OEyv0M">Executável do Jogo em Pt-br</a></p> 
								<p class="card-text">4: Vá até a pasta do jogo, entre na pasta "Data", e depois na pasta "Enus". Abra o arquivo "realmlist.wtf" com o bloco de notas. </p>
                                <p class="card-text">5: Apague tudo que está dentro do arquivo "realmlist.wtf" e coloque a seguinte frase: </p>
                                <p class="card-text">set realmlist wowsoder.ddns.net</p>
                                <p class="card-text">6: Salve o arquivo e pode fechá-lo.</p>
                                <p class="card-text">7: Registre sua conta na página de registro. Esta conta você poderá utilizar para logar no jogo, no site e no fórum.</p>
                                <p class="card-text"><a href="register.php">Registre sua conta</a></p>
                                <p class="card-text">English -> <a href="howtoconnect.php">How to connect</a></p> 
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