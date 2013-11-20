<?php

function checkComment($currPostID){
	// echo "<br><br><br><br><pre>";
	// print_r($_POST);
	// echo "</pre>";
	// $GLOBAL["PostPageErrors"] = "";
	if(isset($_POST['addComment'])){
		if(isset($_POST['cname']) && isset($_POST['cemail']) && isset($_POST['comment'])){
			// echo "Congrats";
			$cname = $_POST['cname'];
			$cemail = $_POST['cemail'];
			
			$com= $_POST['comment'];
			$com= nl2br($com);
			$com1= str_replace("<script>", "", strtolower($com));
			// $com = str_replace("<", "", $com);
			// $com = str_replace(">", "", $com);
			if(strpos($com, "<script>") !== false){
				// echo "Congrats";
				$GLOBALS['XSSFlag1Message'] = "This is your XSS Exploit Flag 1 : <strong>".getFlags("XSSFlag1")."</strong>";
				return 0;
			}else{
				$email = (isset($_POST['cemail']));
				$addComQuery = "INSERT INTO comments (`id`, `comment`, `post`, `cname`, `cemail`) VALUES (NULL, '$com', '$currPostID', '$cname', '$cemail');";
				mysql_query($addComQuery);
			}
		}
		
	}
	
}

?>
