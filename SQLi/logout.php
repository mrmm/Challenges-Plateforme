<?php

session_start();

session_destroy();

setcookie("RootLoginFlag", "", time()-3600, "/");
header("location:index.php");

?>