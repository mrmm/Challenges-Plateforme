<?php


$GLOBALS["FlagMessage"] = "";
function getFlags($flag){
	#From here yous put flags
	$flags["RootLoginFlag"] = "R00tFlagLogin";
	$flags["XSSFlag1"] = "XSSFlag1 _ ";
	$flags["XSSFlag2"] = "XSSFlag2 _ ";
	$flags["FileUploadFlag"] = "FileUploadFlag _ ";
	return $flags[$flag];
}

?>
