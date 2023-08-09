<?php
    require './config.php';
    session_start();
    if(isset($_REQUEST['feedback'])){
        echo $user = $_SESSION['user']['user_id'];
        echo $rating = $_REQUEST['rating'];
        echo $feedback = $_REQUEST['feedback'];
        echo $ost = $_REQUEST['ost_id'];


        $query = "SELECT COUNT(*) FROM `ost-review` WHERE user_id = ? AND ost_id = ?";
        $stmt = mysqli_prepare($conn,$query);
        mysqli_stmt_bind_param($stmt,"ii",$user, $ost);
        mysqli_stmt_bind_result($stmt,$count);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);


        var_dump($count);


        
        if($count == 1){
            $query = "UPDATE `ost-review` SET `rating` = ?, `feedback` = ?";
            $stmt = mysqli_prepare($conn,$query);
            mysqli_stmt_bind_param($stmt,'is',$rating,$feedback);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }else{
            // $query = "INSERT INTO `review`(`user_id`, `song_id`, `rating`, `feedback`) VALUES (?,?,?,?)";
            $query = "INSERT INTO `ost-review` (`rating`, `feedback`, `user_id`, `ost_id`) VALUES (?,?,?,?)";
            $stmt = mysqli_prepare($conn,$query);
            mysqli_stmt_bind_param($stmt,'isii',$rating,$feedback,$user,$ost);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        
        
        mysqli_close($conn);

    }

    header("location:song.php")
?>