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
				<a href="index.php" ><button type="button" class="btn btn-secondary btn-sm">Voltar</button></a>
                <div class="card" >
                    <div class="card text-center" >
                        <div class="card-header">
                            <h5>WoW Soder Termos de Uso</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Contas:</h5>
                            <p class="card-text">Um usuário registrado pode jogar World of Warcraft: Wrath of the Lich King na versão 3.3.5.</p> 
                            <p class="card-text">Every user is resposible of its own account. 
                            <p class="card-text">Todo usuário é responsável por sua própria conta.
                                Diante disso, WoW Soder não assume nenhuma responsabilidade sobre qualquer tipo de problema que aconteça à conta por mau-uso.</p>
                            <p class="card-text">Visite a <a href="register-pt.php"> Página de Cadastro </a> para criar sua conta e iniciar sua jornada em WoW Soder.</p>
                            <h6 class="card-title">Bugs e hackers:</h5>
                            <p class="card-text">WoW Soder não permite nenhum tipo de exploração de bug ou uso de qualquer tipo de hack.</p> 
                            <p class="card-text">Nos casos de uso de hack ou explorando algum bug, o usuário receberá uma banição do jogo de acordo com a gravidade da ação. </p>
                            <p class="card-text">As banições não são removíveis ou negociáveis. Se o usuário receber uma banição permanente, não terá como recuperar sua conta. Se receber uma banição temporária, o usuário deverá aguardar o tempo informado para poder jogar novamente. </p
                            <h6 class="card-title">Doações:</h5>
                            <p class="card-text">Levando em conta que WoW Soder é um server privado que permite que você jogue de graça World of Warcraf: Wrath of the Lich King 3.3.5, nós aceitamos doações dos nossos jogadores para manter o servidor de pé, assim como nossos serviços.</p>
                            <p class="card-text">Os usuário que ajudarem o servidor com uma certa quantia de doação, vão receber recomepensas, com um item especial de acordo com o montante doado.</p>
                            <p class="card-text">PS: Players com contas banidas não terão os valores doados de volta!</p>
                            <p class="card-text">Visite a <a href="donate.php">Página de doações</a> para saber melhor sobre preços e recompensas.</p>
                            <h6 class="card-title">Personagens:</h5>
                            <p class="card-text">Todo usuário pode criar inúmeros personagens. Mas cada usuário é responsável por seus próprios personagens. Não disponibilizamos serviçoes de recuperação de personagem deletados, e se disponibilizarmos, o serviço custará uma certa quantia de tokens. </p>
                            <h6 class="card-title">Chat & Regras Sociais:</h5>
                            <p class="card-text">Não aceitamos linguagem implícita que afeta qualquer pessoa por sua raça, ou moralmente. Usuários podem reportar este tipo de pessoa por e-mail ou por nossa <a href="forum/index.php">página do forum.</a></p>
                            <p class="card-text">Ofensas contra nossos Mestres de Jogo não serão toleradas em qualquer circunstâncias. Ações do tipo podem resultar em banições temporárias ou permanentes. Mestres de Jogo estão ajudando WoW Soder sem qualquer tipo de recompensa por seu trabalho, e o mínimo que merecem é o respeito de cada jogador.</p>
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