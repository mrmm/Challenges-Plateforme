<?php
include('include/config.inc.php');

if(isset($POST['login'])){
	if(isset($_POST['username']) && isset($_POST['password'])){

		$user = $_POST['username'];
		$pass = $_POST['password'];
		
		echo login($user, $pass);
	}
}
if(isset($POST['logout'])){
	unset($_SESSION['logged']);
	unset($_SESSION['userData']);
}

?>