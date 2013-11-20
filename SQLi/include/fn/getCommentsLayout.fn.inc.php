<?php

function getCommentsLayout($currPostID){

	$comQuery = "SELECT * FROM comments WHERE post=$currPostID ORDER BY  `id` DESC  ;";
	$comData = mysql_query($comQuery);
	// print_r ($comData);
	?>
	<div class="page-header">
		<h3> Comments :  </h3>
	</div>
	<?php
	while($row = mysql_fetch_object($comData)){
	?>
	<blockquote>
		<p><?php echo $row->comment ?></p>
		<small>By <cite title="By"><a href="mailto:<?php echo $row->cemail ?>"><?php echo $row->cname ?></a></cite></small>
	</blockquote>
	<?php
	}
}

?>