<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$websiteLink = "http://127.0.0.1/wamp_1/ESPRIT_Challenge/SQLi/";

####################################
# Database Configuration
####################################
$host = "localhost";
$user = "esprit_challenge";
$password = "esprit_challenge";
$dbname = "esprit_challenge";

mysql_connect($host, $user, $password);
mysql_select_db($dbname);

####################################
# Including Functions
####################################
include("fn/uploadFile.fn.inc.php");
include("fn/getFlags.fn.inc.php");
include("fn/checkLogin.fn.inc.php");
include("fn/login.fn.inc.php");
include("fn/sqlQuery.fn.inc.php");
include("fn/userDataSess.fn.inc.php");
include("fn/getPostInfo.fn.inc.php");
include("fn/getPostLayout.fn.inc.php");
include("fn/getCommentForm.fn.inc.php");
include("fn/getCommentsLayout.fn.inc.php");
include("fn/checkComment.fn.inc.php");


####################################
# Inisializing variable
####################################
// ';

?>
