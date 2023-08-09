<?php

include "config.php";
 
$S_id = $_GET['id'];
$query = "DELETE FROM `song` WHERE `Song_Id` = '{$S_id}'";
$queryResult = mysqli_query($conn,$query);
if ($queryResult) {
    header("location: admin-song.php");
}
?>
