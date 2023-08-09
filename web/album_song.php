<?php
include "header.php";
include "config.php";
if (!isset($_GET['id'])) {
    header('location:album.php');
    exit;
}
$artist_id = $_GET['id'];
$songs = [];
function get_songs_artist_id($id)
{
    global $conn;
    global $artist_id;
    $query = "SELECT * FROM song JOIN artist ON artist.Artist_Id = song.Artist where artist.Artist_Id = $artist_id";
    $results = mysqli_query($conn, $query);
    $songs = mysqli_fetch_all($results);
    return $songs;
}

$songs = get_songs_artist_id($artist_id);
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <video controls width="100%"></video>
        </div>
    </div>
</div>

<section class="razo-latest-podcast-area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="section-heading">
                    <h2>Song:</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
            foreach($songs as $row){
            $image = "../thumbnails/" . $row[7];
            $video = "../songs/" .$row[2];
            ?>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-podcast-area mb-30 wow fadeInUp" data-wow-delay="100ms">
                        <div class="podcast-thumb">
                            <img src="<?php echo $image?>" alt="" style="height: 250px; object-fit: cover;">
                        </div>

                        <div class="podcast-content">
                            <div class="podcast-meta">
                                <a href="#"><i class="icon_calendar"></i>
                                    <?php echo $row[6] ?>
                                </a>
                                <!-- <a href="#"><i class="icon_clock_alt"></i> 36 min</a> -->
                            </div>
                            <h5>
                                <?php echo $row[1] ?>
                            </h5>
                            <div class="border-line"></div>
                            <div class="play-download-btn d-flex align-items-center justify-content-between">
                                <!-- <a href="#" class="btn razo-btn btn-sm">playing now</a> -->
                                <button onclick="foo('<?php echo $video?>')" class="btn razo-btn btn-sm">Play now</button>
                                <!-- <a href="" class="music-download-btn" download><i class="icon_download"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="view-more-button text-center">
                <a href="#" class="btn razo-btn mt-50">View More</a>
            </div>
        </div>
    </div>
    </div>
</section>

<?php
include "footer.php";
?>
<script>
   let vid =document.querySelector("video")  
                
    function foo(src){
        vid.src=src
        vid.play()
    }
</script>