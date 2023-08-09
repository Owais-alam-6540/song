<?php
require './config.php';
session_start();

if (isset($_REQUEST['feedback'])) {
    $user = $_SESSION['user']['user_id'];
    $rating = $_REQUEST['rating'];
    $feedback = $_REQUEST['feedback'];
    $song = $_REQUEST['song'];
    
    // Check if the song ID exists in the song table
    $songExistsQuery = "SELECT COUNT(*) FROM song WHERE Song_Id = ?";
    $songExistsStmt = mysqli_prepare($conn, $songExistsQuery);
    mysqli_stmt_bind_param($songExistsStmt, "i", $song);
    mysqli_stmt_execute($songExistsStmt);
    mysqli_stmt_bind_result($songExistsStmt, $songCount);
    mysqli_stmt_fetch($songExistsStmt);
    mysqli_stmt_close($songExistsStmt);

    if ($songCount == 1) {
        $updateOrInsertQuery = "INSERT INTO review (user_id, song_id, rating, feedback)
                                VALUES (?, ?, ?, ?)
                                ON DUPLICATE KEY UPDATE rating = VALUES(rating), feedback = VALUES(feedback)";
        $stmt = mysqli_prepare($conn, $updateOrInsertQuery);
        mysqli_stmt_bind_param($stmt, "iiis", $user, $song, $rating, $feedback);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    } else {
        echo "Invalid song ID.";
        // echo $song;
    
    }

    mysqli_close($conn);
}
header("location:song.php");
?>