<?php

function userDataSess(){
	
	if(isset($_SESSION['userData'])){
		return $_SESSION['userData'];
	}
	return false;
}

?>