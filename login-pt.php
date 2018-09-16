<?php 
session_start();
 if(!empty($_SESSION)){
	 echo "<script>
				location.href='character.php';
			</script>";
	}
if(!empty($_POST['submit'])){
    include_once('db/SQL.class.php');
    $sql = new SQL();
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $pass = sha1(strtoupper($login).':'.strtoupper($senha));

    $select_login = "SELECT * FROM account where username = '$login'";
    $select_senha = "SELECT * FROM account where username = '$login' and sha_pass_hash = '$pass'";

    $query_login = $sql->consultar($select_login);
    $query_senha = $sql->consultar($select_senha);
    if(!empty($query_login)){
        if(!empty($query_senha)){
			session_start();
            $login = $query_senha[0]['username'];
			$_SESSION['login'] = $login;
			$_SESSION['lg'] = 'pt';
			$email = $query_senha[0]['email'];
            $_SESSION['email'] = $email;
			$id = $query_senha[0]['id'];
			$_SESSION['id'] = $id;
			
			$select_gm = "SELECT * FROM account_access where id = $id";
			$query_gm = $sql->consultar($select_gm);
			if(!empty($query_gm)){
				$level = $query_gm[0]['gmlevel'];
				if($level == 3){
					$_SESSION['level'] = $level;
					echo "<script>
					location.href='gm/index.php';
					</script>";
				}
			}else{
				echo "<script>
					location.href='character.php';
				</script>";
			}
        }else{
            echo "<script>
                alert('Senha incorreta!');
            </script>";
        }
    }else{
        echo "<script>
                alert('Usuário não encontrado!');
            </script>";        
    }

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
        <link rel="icon" href="img/wow_store.icon" type="image/ico">
    <head>
    <body class="bg6">
        <?php include_once('header-index.php'); ?>			
        <div class = 'container-fluid' style = "overflow: hidden;">
            <div class = "row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="jumbotron col-lg-15" style="width: 100%; padding-bottom: 80vh; position: absolute; opacity: 0.6;"></div>
                    <div class="jumbotron col-lg-15" style="position: relative; background: none">
                        <form class="form-horizontal" action="login-pt.php" method="POST">
                            <div>
                                <div class="border-1" style="text-align: center;">Faça login:</div>
                            </div>
                            <div class="form-group">
                                <label class="control-label border-2" for="login">Usuário:</label>						
                                <input type="text" name="login" required autocomplete="off" class="form-control" id="login" placeholder="Ex: Bob">
                            </div>
                            <div class="form-group">
                                <label class="control-label border-2" for="login">Senha:</label>						
                                <input type="password" name="senha" required autocomplete="off" class="form-control" id="senha" placeholder="Ex: ******">
                            </div>
                            <div class = "form-group text-center">
								<a href="index.php" ><input type="button" class="text-center btn btn-secondary btn-lg" value="Voltar"></a>
                                <input type = "submit" name = "submit"  id="2" value = 'Entrar' class="text-center btn btn-success btn-lg ">
                            </div>
                        </form>
                        <div>
                            <p class=" border-2" style="text-align: left;">
                                Perdeu sua senha?&nbsp&nbsp<u><a class="text-dark" href="passwordRecovery.php">Recuperar Senha</a></u>
                            </p>    
                            <p class=" border-2" style="text-align: left;">  
                                Não possui conta?&nbsp&nbsp<u><a class="text-dark" href="register-pt.php">Cadastre-se</a></u>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>