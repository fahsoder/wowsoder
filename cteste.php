<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <title>Wow Soder</title>
    <meta charset = 'UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "author" content = "Fabiano Soder">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/bg.css">
    <link rel="stylesheet" href="css/border.css">
    <link rel="icon" href="img/wow_store.icon" type="image/ico">    
</head>
<body class="bg2">
    <?php include_once('header-pt.php'); ?>           
    <div class = 'container-fluid ' style = "overflow: hidden;">
        <div class = "row">
            <div class = "col-md-3 col-md-offset-8"></div>
            <div class = "col-md-6">
                <div class="jumbotron col-lg-15" style="width: 100%; padding-bottom: 80vh; position: absolute; opacity: 0.5;"></div>
                <div class="jumbotron col-lg-15" style="position: relative; background: none">
                    <form class="form-horizontal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="MFMGBBN7X9ZKG">
						<table>
							<tr class="form-group"><td class="form-group"><input class="form-group" type="hidden" name="on0" value="Selecione o item">Selecione o item:</td></tr><tr><td><select class="form-control" name="os0">
								<option class="form-group" value="Warrior Tier 8">Warrior Tier 8 R$275,00</option>
								<option class="form-group" value="Warrior Tier 7">Warrior Tier 7 R$200,00</option>
								<option class="form-group" value="Warrior S6">Warrior S6 R$275,00</option>
								<option class="form-group" value="Warrior s5">Warrior s5 R$200,00</option>
							</select> </td></tr>
							<tr><td><input type="hidden" name="on1" value="Selecione a especialização">Selecione a especialização:</td></tr><tr><td><select class="form-control" name="os1">
								<option value="Arms">Arms </option>
								<option value="Fury">Fury </option>
								<option value="Protection">Protection </option>
							</select> </td></tr>
							<tr><td><input type="hidden" name="on2" value="Digite o nome do personagem">Digite o nome do personagem:</td></tr><tr><td><input class="form-control" type="text" name="os2" maxlength="200"></td></tr>
						</table>
						<input type="hidden" name="currency_code" value="BRL">
						<input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
					</form>
                </div>                    
            </div>
        </div>
    <?php include_once('footer_horizontal.php'); ?>
</body>
</html>

