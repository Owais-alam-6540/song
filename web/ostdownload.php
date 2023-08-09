<?php
session_start();
if(isset($_SESSION['user']) and $_GET['file']){
    $file = $_SERVER['DOCUMENT_ROOT'] . '/E-project/ost/' . $_GET['file'];
    header('Content-Type: application/octet-stream');  
    header("Content-Transfer-Encoding: utf-8");   
    header("Content-disposition: attachment; filename=\"" . basename($file) . "\"");   
    readfile($file);  
    $redirect = $_SERVER['HTTP_REFERER'] ?? './login.php';
    header("location:".$redirect);
}
header("location:./login.php");

