<?php

include "config.php";
 
$O_id = $_GET['id'];
$query = "DELETE FROM `ost` WHERE `Ost_Id` = '{$O_id}'";
$queryResult = mysqli_query($conn,$query);
if ($queryResult) {
    header("location: admin-ost.php");
}
?>
