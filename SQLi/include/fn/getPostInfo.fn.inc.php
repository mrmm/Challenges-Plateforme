<?php

function getPostInfo($id,$randPost=null){

	$query = "SELECT * FROM posts ".($randPost==null ? "WHERE id=$id ;" : "WHERE ID <> 1 ORDER BY RAND() LIMIT $randPost;");
	$queryResult = sqlQuery($query);
	$return = ($randPost==null ? mysql_fetch_object($queryResult) : array() );
	if($randPost!=null){
		while($row = mysql_fetch_object($queryResult)){
			$return[] = $row;
		}
	}
	// print_r($return);
	return $return;
}

?>