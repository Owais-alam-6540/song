<?php
include "config.php";
$S_id = $_GET['id'];
$query = "UPDATE `user_acc` SET `status` = '0' WHERE `User_id` = '{$S_id}'";
$queryResult = mysqli_query($conn,$query);
if ($queryResult) {
    header("location: user-list.php");
}
?>
