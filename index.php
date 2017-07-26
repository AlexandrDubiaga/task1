<?php
include('config.php');
include('libs/functions.php');
include('templates/uploadForm.php');

if($_FILES['filename']){
	$varForFile = funcUpload();
	echo good_download;
}
else not_download;
echo "<br>";
echo "<br>";
painTableWithFiles(countFilesInDir(path));

$val = dirToArray(path);
if(isset($_GET['valdelete'])){
    deleteFile($_GET['valdelete']);
}


?>
