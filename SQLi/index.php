<?php
$pageName = "Homepage";
$active ["home"] = 'active';
$active ["help"] = '';
$active ["profile"] = '';
include('header.php');

$randPost = getPostInfo(-1, 9);
// echo "<br><br><br><br><br>";print_r($randPost);
?>


<div class="jumbotron" style="margin-top:35px">
  <div class="container">
	<h1>What is CyberWar ?</h1>
	<p>Cyberwarfare refers to politically motivated hacking to conduct sabotage and espionage.</p>
	<p><a class="btn btn-primary btn-lg" href="post.php?id=1">Learn more &raquo;</a></p>
  </div>
</div>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
	<?php getPostLayout($randPost, 1, 3); ?>
  </div>
<?php
include('footer.php');
?>
