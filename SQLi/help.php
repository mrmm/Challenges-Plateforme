<?php
$pageName = "Help";
$active ["home"] = '';
$active ["help"] = 'active';
include('header.php');

$randPost = getPostInfo(-1, 6);
// echo "<br><br><br><br><br>";print_r($randPost);
?>


<div class="jumbotron" style="margin-top:35px">
  <div class="container">
	<h1>Help ?</h1>
	<p>You have just to login as <strong>r00t [#999]</strong> .</p>
	<p><a class="btn btn-primary btn-lg" href="index.php">Back &raquo;</a></p>
  </div>
</div>
<?php
include('footer.php');
?>