<?php

function login($username, $pass){
	$pass = md5($pass);
	
	while(strpos('--', $username) !== false){
	
		$username = str_replace('--', '', $username);
	}
	while(strpos(';', $username) !== false){
	
		$username = str_replace(';', '', $username);
	}
	
	$loginQuery = "SELECT * FROM users WHERE username='$username' AND password='$pass'";
	$queryResult = sqlQuery($loginQuery);
	// echo "<br><br><br>";
	// echo $loginQuery;
	if(mysql_num_rows($queryResult) > 0){
		$_SESSION['logged'] = true;
		$_SESSION['userData'] = mysql_fetch_object($queryResult);
		$userData = $_SESSION['userData'];
		if($userData->username == "r00t"){
			$_SESSION['logged_as_root'] = true;
			setcookie ("RootLoginFlag", getFlags("RootLoginFlag"), time() + 3600, "/");
			// setcookie ("RootLoginFlag", "aze", time() + 3600);
		}
		return true;
	}else{
		return false;
	}
}

?>
