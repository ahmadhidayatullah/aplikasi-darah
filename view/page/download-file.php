<?php
$file_name = isset($_GET['file']) ? $_GET['file'] : null;
if(!empty($file_name)){
    $base_file = "file/".$file_name;
    if (file_exists($base_file)) {
        header('Content-Description: File Transfer');
//        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
        header("Content-Transfer-Encoding: binary");
//        header('Expires: 0');
//        header('Cache-Control: must-revalidate');
        header('Cache-Control: public');
        header('Content-Type: mime/type');
        header('Pragma: public');
        header('Content-Length: ' . filesize($base_file));
        readfile($base_file);
        exit;
    }
}else{
    header("Location:index.php?page=not-found");
}