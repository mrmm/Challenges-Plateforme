<?php

function sqlQuery($query,$param=null){
	
	$queryResult =  mysql_query($query);
	switch ($param) {
		case null:
			return $queryResult;
			break;
		case "NumRows":
			return mysql_num_rows($queryResult);
			break;
		default : break;
	}
}

?>