<?php
function funcUpload($path){
    if(is_dir($path)) {
        if (is_uploaded_file($_FILES["filename"]["tmp_name"])) {
            move_uploaded_file($_FILES["filename"]["tmp_name"], $path . $_FILES["filename"]["name"]);
            return true;
        } else return false;
    }else return false;
    return false;
}

function dirToArray($dir) {
    $result = array();
    if(is_dir($dir)) {
        $cdir = scandir($dir);
        foreach ($cdir as $key => $value) {
            if (!in_array($value, array(".", ".."))) {
                if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
                    $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
                } else {
                    $result[] = $value;
                }
            }
        }
        return $result;
    }
    return false;
}
function fileSise($var){
    return filesize(path.$var);
}

function ConvertBytes($number)
{
    $len = strlen($number);
    if($len < 4)
    {
        return sprintf("%d b", $number);
    }
    if($len >= 4 && $len <=6)
    {
        return sprintf("%0.2f Kb", $number/1024);
    }
    if($len >= 7 && $len <=9)
    {
        return sprintf("%0.2f Mb", $number/1024/1024);
    }

    return sprintf("%0.2f Gb", $number/1024/1024/1024);

}

function countFilesInDir($patch){
    if(is_dir($patch)) {
        $dir = opendir($patch);
        $count = 0;
        while ($file = readdir($dir)) {
            if ($file == '.' || $file == '..' || is_dir($patch . $file)) {
                continue;
            }
            $count++;
        }
        return $count;
    }
    return false;
}

function painTableWithFiles($var){
    if($var == 0){
        echo NO_FILES_INSIDE;
    }else{
        $arr = dirToArray(path);
        foreach ($arr as $value){
            $countSize = ConvertBytes(fileSise($value));
        }
        return include('templates/index.php');
    }
}

function deleteFile($file){
    if(isset($file)){
        unlink(path.$file);
        exit("<meta http-equiv='refresh' content='0; url= $_SERVER[PHP_SELF]'>");
    }
}

?>
