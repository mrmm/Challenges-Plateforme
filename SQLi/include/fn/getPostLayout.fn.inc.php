<?php
######################################################################################################
# Function to get diffrent type of article's Layout 
# getPostLayout ($postInfo, $layoutType = 1, $cols=-1)
#	- postInfo 		: an array of object or an object
#	- layoutType 	: could be 
#		- 1 : for Thumbnail Loyout
#		- 2 : for Article Layout
#	- $cols :  the number of column per row for homepage 
#
######################################################################################################
function getPostLayout($postInfo, $layoutType = 1, $cols=3 ){
	
	if($layoutType == 1){
		$j=1;
		// echo "<br><br><br>";print_r($postInfo);
		for($i=0;$i<count($postInfo);$i++){
		// echo $i."<br>";
			?>
			<div class="col-lg-<?php echo 12/$cols ?>">
				<div class="panel panel-default">
					<div class="panel-body">
						<h2 style="margin-top:10px;"><?php echo $postInfo[$i]->title ?></h2><hr>
						<p style="text-overflow: ellipsis;overflow:hidden;height:100px;"><?php echo substr($postInfo[$i]->description, 0, 250) ?>...</p>
					</div>
					<div class="panel-footer" style="height:55px;">
						<span style="float:left">Author : <strong><?php echo $postInfo[$i]->author ?></strong></span>
						<a class="btn btn-default" href="post.php?id=<?php echo $postInfo[$i]->id ?>" style="float:right">View details &raquo;</a>
					</div>
				</div>
				
				
			</div>
			<?php
			if($j == $cols){
				$j=0;
				?>
				</div>
				
				<div class="row">
				
				<?php
			}
			$j++;
		}
	}
	if($layoutType == 2){
		// echo "<br><br><br>";print_r($postInfo);
		?>
		<script>document.title = "Post - <?php echo $postInfo->title ?>";</script>
		<div class="page-header">
			<h1><?php echo $postInfo->title ?>&nbsp;<small style="margin-top:35px;font-size:20px;"> By <?php  echo $postInfo->author ?></small></h1>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<p><?php echo  $postInfo->body ?></p>
			</div>
			<div class="panel-footer" style="text-align:right;padding-right:35px;">Author : <strong><?php echo  $postInfo->author ?></strong></div>
		</div>
		
		<?php
	}
}

?>