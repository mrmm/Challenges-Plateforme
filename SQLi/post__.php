<?php
$pageName = "Post";
$active ["home"] = '';
$active ["help"] = '';
$active ["profile"] = '';

include('header.php');
$currPostID = (isset($_GET['id']) ? $_GET['id'] : 1);
$currPost = getPostInfo($currPostID);
// echo "<br><br><br>".$currPostID;
// print_r($currPost);
checkComment($currPostID);
getPostLayout($currPost,2);
getCommentForm($currPostID);
getCommentsLayout($currPostID);
?>
<?php
include('footer.php');
?>