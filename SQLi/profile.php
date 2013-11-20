<?php
$pageName = "User profile";
$active ["home"] = '';
$active ["help"] = '';
$active ["profile"] = 'active';

$fn = array("Avatar", "Informations", "Messages", "Help");
$selected = ((isset($_GET['fn']) && (in_array($_GET['fn'],$fn))) ? $_GET['fn'] : "Messages" );
$menu_active[$selected] = 'active';

// echo "<br><br><br>";
// print_r($menu_active);
include('header.php');

uploadFile();
if(checkLogin()){
?>
	<div class="container" style="margin-top:35px;">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <span style="font-size:25px;"><span class="glyphicon glyphicon-wrench"></span> Profile</span>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4">
						<div class="list-group">
							<a href="?fn=Messages" class="list-group-item <?php echo($menu_active["Messages"]) ?>">
								<span class="glyphicon glyphicon-comment" style="font-size:15px;"></span> Messages <span class="badge">1</span>
							</a>
							<a href="?fn=Avatar" class="list-group-item <?php echo($menu_active["Avatar"]) ?>">
								<span class="glyphicon glyphicon-picture"></span> Upload Avatar
							</a>
							<a href="?fn=Informations" class="list-group-item <?php echo($menu_active["Informations"]) ?>">
								<span class="glyphicon glyphicon-list"></span> Edit informations
							</a>
							<a href="?fn=Help" class="list-group-item <?php echo($menu_active["Help"]) ?>">
								<span class="glyphicon glyphicon-info-sign"></span> Help <span class="badge">Check this section</span>
							</a>
						</div>
						</div>
					<div class="col-md-8">
						<div class="panel panel-primary">
							<div class="panel-heading">
							  <span style="font-size:15px;"><span class="glyphicon glyphicon-wrench"></span> Edit <?php echo($selected) ?></span>
							</div>
							<div class="panel-body">
							<?php 
							if(isset($GLOBALS["OutputMessageSucc"]) && $GLOBALS["OutputMessageSucc"] != ""){
							?>
								<div class="alert alert-success">
									<?php echo $GLOBALS["OutputMessageSucc"] ?>
								</div>
							<?php
							}
							if(isset($GLOBALS["OutputMessageErr"]) && $GLOBALS["OutputMessageErr"] != ""){
							?>
								<div class="alert alert-danger">
									<?php echo $GLOBALS["OutputMessageErr"] ?>
								</div>
							<?php
							}
							if($selected == "Avatar"){
							?> 
								<form method="post" enctype="multipart/form-data">
								<label for="file">Select an image <span class="label label-warning">Info : ONLY png/jpg type are accepted</span></label>
								<input type="file" name="file" id="file"><br>
								<button class="btn btn-primary btn-block" style="submit" name="login">Send</button>
								<?php
								if(isset($GLOBALS["FlagMessageFileUpload"]) && $GLOBALS["FlagMessageFileUpload"] != ""){
								?>
									<div class="alert alert-success">
										<?php echo $GLOBALS["FlagMessageFileUpload"] ?>
									</div>
								<?php
								}
								?>
								</form>
								
							<?php
							}elseif($selected == "Help"){
							?> 
								<div class="alert alert-danger">
									<strong>The goal !</strong> Upload php script that print your name ;). <br>For example : <pre><\?php <b>echo('Your_Name');</b> \?></pre>
								</div>
							<?php
							}else{
							?>
								<div class="alert alert-info">
									<strong>Nothing useful here !</strong> This alert needs your attention, but it's not super important.
								</div>
							<?php
							}
							
							?>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
}else{
?>
<div class="jumbotron" style="margin-top:35px">
  <div class="container">
	<h1>Error 403 Forbidden</h1>
	<p>You are not allowed here !</p>
	<p><a class="btn btn-primary btn-lg" href="index.php">Back &raquo;</a></p>
  </div>
</div>
<?php
}
include('footer.php');
?>
