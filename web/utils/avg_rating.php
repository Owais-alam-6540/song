<?php

include_once 'config.php';

function avg_rating($id){
    global $conn;
    $query="SELECT ROUND(AVG(Rating)) AS avg FROM `review` WHERE song_id = $id";
    $res=mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($res);
    $stars = "";
    for ($i=1; $i <= $data["avg"]; $i++) { 
        $stars .= '⭐';
    }
    return $stars ?? 'no rated yet';

}

function get_rating($song_id){
    global $conn;
    if (isset($_SESSION['user'])){
        $query="SELECT count(*) as status FROM `review` WHERE song_id = $song_id AND user_id = '{$_SESSION['user']['user_id']}'";
        $res=mysqli_query($conn,$query);
        ["status"=>$status] = mysqli_fetch_assoc($res);
        return $status ? '<div class="ratings">Update review</div>' : '<div class="ratings">Review</div>';
    }
    return '<div class="ratings">review</div>';
}

?>