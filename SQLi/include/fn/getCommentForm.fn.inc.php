<?php


function getCommentForm($currPostID){

?>
<div class="page-header">
	<h4> Leave Comment :  </h4>
</div>
	<?php
	if (isset($GLOBALS['XSSFlag1Message']) && ($GLOBALS['XSSFlag1Message'] != "")){
	?>
		<div class="alert alert-success">
			<?php echo $GLOBALS["XSSFlag1Message"] ?>
		</div>
	<?php
	}
	?>
<form class="form-horizontal" method="post">
	<div class="form-group">
		<label for="inputEmail1" class="col-lg-2 control-label">Name</label>
		<div class="col-lg-7">
			<input type="text" class="form-control"  name="cname" placeholder="Name">
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
		<div class="col-lg-7">
			<input type="email" class="form-control"  name="cemail" placeholder="Email">
			<input type="hidden" class="form-control"  name="postid" value="<?php echo $currPostID ?>">
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail1" class="col-lg-2 control-label">Comments</label>
		<div class="col-lg-7">
			<textarea name="comment" class="form-control" rows="6" placeholder="Comments..."></textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-2 control-label"></div>
		<div class="col-lg-7">
			<button type="submit" class="btn btn-primary pull-right" name="addComment">Send</button>
		</div>
	</div>
</form>

<?php
}

?>