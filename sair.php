<?php
	session_start();
	echo "<script>
			alert('You're loggin out!');
            </script>";
	session_destroy();
	echo "<script>
            location.href='index.php';
            </script>";
 

?>


