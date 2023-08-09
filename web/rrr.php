<?php
session_start();
if(isset($_SESSION['user']) and $_GET['file']){
    $file = $_SERVER['DOCUMENT_ROOT'] . '/E-project/songs/' . $_GET['file'];
    header('Content-Type: application/octet-stream');  
    header("Content-Transfer-Encoding: utf-8");   
    header("Content-disposition: attachment; filename=\"" . basename($file) . "\"");   
    readfile($file);  
    $redirect = $_SERVER['HTTP_REFERER'] ?? './login.php';
    header("location:".$redirect);
}
header("location:./login.php");


// set_time_limit(0);              // making maximum execution time unlimited
// ob_implicit_flush(1);           // Send content immediately to the browser on every statement which produces output
// ob_end_flush(); 



// print "<p>Line 1</p>";
// sleep(1);
// print "<p>Line 2</p>";
// sleep(1);
// print "<p>Line 3</p>";
// sleep(1);
// print "<p>Line 4</p>";
// sleep(1);
// print "<p>Line 5</p>";
// sleep(1);
// print "<p>Line 6</p>";
// print "<p>Line 7</p>";
// sleep(1);
// print "<p>Line 8</p>";
// sleep(1);
// print "<p>Line 9</p>";
// sleep(1);
// print "<p>Line 10</p>";
