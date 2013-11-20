<?php

function uploadFile(){
	if(isset($_FILES["file"])){
		if ($_FILES["file"]["error"] > 0){
			echo "<div class='alert-danger'>Error: " . $_FILES["file"]["error"] . "</div>";
		}else{
			$size = ($_FILES["file"]["size"] / 1024)/1024;
					echo("<br><br><br><br><br> <?php exist");
			if($size < 2){
				$mimetype = mime_content_type($_FILES['file']['tmp_name']);
					// echo("<br><br><br><br><br> <?php exist");
				if(in_array($mimetype, array('image/jpeg', 'image/gif', 'image/png'))){
					$content = file_get_contents($_FILES['file']['tmp_name']);
					// echo("<br><br><br><br><br> <?php exist");
					if (strpos($content, "<?php")){
							// echo("<br><br><br><br><br> <?php exist");
						if (strpos($content, "echo ")){	
							// echo("<br><br><br><br><br> Echo exist");
							$GLOBALS["FlagMessageFileUpload"] = "Great! you have get the file upload flag ;) <strong>".getFlags("FileUploadFlag")."</strong>";
						}
					}else{
						$GLOBALS["OutputMessageSucc"] = "File uploaded : <strong>".$_FILES['file']['name']."</strong>";
					}
				}else{
					$GLOBALS["OutputMessageErr"] = "This file <u>MIME</u> not supported <strong>".$mimetype.". Permission denied !</strong>";
				}
			}
		}
	}
}
?>