<?php

function checkLogin(){

	if(isset($_SESSION['logged']) && ($_SESSION['logged']==true)){
		if(isset($_SESSION['logged_as_root']) && ($_SESSION['logged_as_root'] == true)){
			// echo '<br><br><br><h1>aaaaaaaaaaaaaaaa</h1>';
			$GLOBALS["FlagMessage"] = "Your flag is here try to find it ;)";
			// setcookie ("RootLoginFlag", getFlags("RootLoginFlag"), time() + 3600, "/");
		}
		return true;
	}else{
		return false;
	}
	
}

?>