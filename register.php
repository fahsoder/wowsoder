<?php
session_start();
if(!empty($_SESSION)){
	echo "<script> alert('You're already logged in!');
					location.href='character.php';
		<script>";
}
include_once('db/SQL.class.php');
if(ISSET($_POST['submit'])){
	$nome = $_POST['name'];
	$login = $_POST['login'];
	$pass = $_POST['password'];
	$pass = sha1(strtoupper($login).':'.strtoupper($pass));
	$email = $_POST['email'];

	$insert_1 = "INSERT INTO account (username, sha_pass_hash, email) VALUES ('$login', '$pass', '$email')";
    $conn = new SQL();
    $select = "SELECT * FROM ACCOUNT WHERE username = '$login'";
    $pesquisa = $conn->consultar($select);
    if(empty($pesquisa)){
        $conn->executar($insert_1);
        if($conn){
            echo "<script>
                alert('Account registered!')
                location.href='Register.php';
            </script>";
        }else{
            echo "<script>
                alert('Error while registering account!')
                location.href='register.php';
            </script>";
        
        }
    }else{
        echo "<script>
			alert('This account already exists!')
			location.href='register.php';
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
    <meta name = "author" content = "Fabiano Soder">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/bg.css">
    <link rel="stylesheet" href="css/border.css">
    <link rel="icon" href="img/wow_store.icon" type="image/ico">    
</head>
<body class="bg2">
    <?php include_once('header.php'); ?>           
    <div class = 'container-fluid ' style = "overflow: hidden;">
        <div class = "row">
            <div class = "col-md-3 col-md-offset-8"></div>
            <div class = "col-md-6">
                <div class="jumbotron col-lg-15" style="width: 100%; padding-bottom: 80vh; position: absolute; opacity: 0.5;"></div>
                <div class="jumbotron col-lg-15" style="position: relative; background: none">
                    <form class="form-horizontal" action="register.php" method="POST">
                        <div>
                            <div class="border-1" style="text-align: center;">Account registration</div>
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="login">Login:</label>						
                            <input type="text" name="login" required="" autocomplete="off" class="form-control" id="login" placeholder="Login">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="senha" >Password:</label>						
                            <input type="password" name="password" required="" autocomplete="off" class="form-control" id="senha" placeholder="******">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="nome_completo" >Name:</label>						
                            <input type="text" name="name" required="" autocomplete="off" class="form-control" id="nome_completo" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="email" >E-mail:</label>						
                            <input type="text" name="email" required="" autocomplete="off" class="form-control" id="email" placeholder="e-mail@domain.com">
                        </div>
                        <div lass="form-group" >
                            <input type="radio" name="tipo" required="" id="1" onClick="if(document.getElementById('2').disabled = !this.checked){
                                                                                                                document.getElementById('1').disabled = !this.checked;
                                                                                                                }">  <label class=" border-2">I accept the <u><a class="text-dark" href="termsrules.php">Terms and Rules  </a></label></u>
                        
                        </div>
                        <br>
                        <div class = "form-group text-center">
                                <input type = "submit" name = "submit" disabled id="2" value = 'Submit' class="btn btn-success btn-lg col-lg-6">
                        </div>
                        <div>
                            <p class=" border-2" style="text-align: left;">
                                Lost your password?&nbsp&nbsp<u><a class="text-dark" href="passwordRecovery.php">Password recovery</a></u>
                            </p>    
                            <p class=" border-2" style="text-align: left;">  
                                Already have an account?&nbsp&nbsp<u><a class="text-dark" href="login.php">Login</a></u>
                            </p>
                        </div>
                    </form>	
                </div>                    
            </div>
        </div>
    <?php include_once('footer_horizontal.php'); ?>
</body>
</html>