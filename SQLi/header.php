<?php
include('include/config.inc.php');
// include('flags.inc.php');
if(!checkLogin()){
		
		// echo '<h1>aaaaaaaaa111</h1>';
		if(isset($_POST['username']) && isset($_POST['password'])){

			$user = $_POST['username'];
			$pass = $_POST['password'];
			
			login($user, $pass);
			// echo '<h1>aaaaaaaaa</h1>';
		}
}
$userData = userDataSess();
?>
<!-- header -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/sqli_favico.jpg">
	<script src="css/bootstrap-3.0.0/assets/js/jquery.js"></script>
    <script src="css/bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
    
    <title><?php echo $pageName ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
	<!-- style="background:url('img/bg.png') repeat-x fixed;background-color:rgba(0,0,0,0.2);" -->
  <body >
	<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Security Challenge</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="<?php echo $active["home"]; ?>"><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="<?php echo $active["help"]; ?>"><a href="help.php">Help</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php
			if(checkLogin()){
			?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> [#<?php echo $userData->id ?>] - <?php echo $userData->username ?></a></li>
					<li class="<?php echo $active["profile"]; ?>"><a href="<?php echo $websiteLink."profile.php"; ?>"><span class="glyphicon glyphicon-wrench"></span> Profile</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-remove-circle" style="cursor:pointer;"></span> Logout</a></li>
				</ul>
			<?php
			}else{
			?>
				<li class="dropdown" style="padding-right:15px" id="loginForm">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Login <b class="caret"></b></a>
				  <ul class="dropdown-menu"  style="padding: 10px;">
					<form action="index.php" method="post">
						<li><input type="text" class="form-control" placeholder="Username" name="username"></li>
						<li><input type="password" class="form-control" placeholder="Password" name="password"></li>
						<li class="divider"></li>
						<li><button class="btn btn-primary btn-block" style="submit" name="login">Login</button></li>
					</form>
				  </ul>
				</li>
				<!--<li class="dropdown" style="padding-right:15px" id="loginForm">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Sign Up <b class="caret"></b></a>
				  <ul class="dropdown-menu"  style="padding: 10px;">
					<form action="signup.php" method="post">
						<li>Username : <input type="text" class="form-control" placeholder="Username" name="username"></li>
						<li>Password : <input type="password" class="form-control" placeholder="Password" name="password"></li>
						<li>Re-Password : <input type="password" class="form-control" placeholder="Password" name="repassword"></li>
						<li>E-Mail : <input type="text" class="form-control" placeholder="email" name="email"></li>
						<li class="divider"></li>
						<li><button class="btn btn-primary btn-block" style="submit" name="login">Sign Up</button></li>
					</form>
				  </ul>
				</li>-->
			<?php
			}
			
			if($GLOBALS["FlagMessage"] != ""){
			?>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="alert alert-success"><span class="glyphicon glyphicon-exclamation-sign"></span><strong> <?php echo $GLOBALS["FlagMessage"] ?></strong></span></a></li>
			</ul>
			<?php			
			}
			?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
<!-- /header -->    
