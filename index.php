<?php
include('config.php');
include('libs/functions.php');
include('templates/uploadForm.php');

if($_FILES['filename']){
	$varForFile = funcUpload(path);
	if($varForFile){
		echo good_download;
	}else echo ERROR_FILE;
}
else not_download;
$conterFileinDir = countFilesInDir(path);
if(!$conterFileinDir){
    echo ERROR_PATCH;
}
$val = dirToArray(path);
if(!$val){
   echo ERROR_PATCH;
}
painTableWithFiles(countFilesInDir(path));
if(isset($_GET['valdelete'])){
    deleteFile($_GET['valdelete']);
}

?>
