<?php
include "header.php";
include "config.php";


?>


<section class="razo-music-charts-area section-padding-80 bg-overlay bg-img jarallax"
    style="background-image: url(img/bg-img/34.jpg);">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="section-heading text-center white">
                    <h2>latest song</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <?php
$query = "SELECT * FROM `song` ORDER BY `Release_date` DESC LIMIT 3";
$res =mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($res)){
  $audio = "../songs/" . $row[2];
?>

                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp"
                    data-wow-delay="100ms">

                    <div class="music-content d-flex align-items-center">
                        <!-- <div class="sl-number">
                            <h5>1.</h5>
                        </div> -->
                        <div class="music-thumb">
                            <img src="../thumbnails/<?php echo $row [7]?>" alt="">
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" src="<?php echo  $audio;?>" controls></audio>
                        </div>
                        <div class="music-title">
                            <h5><?php echo $row [1]?></h5>
                        </div>
                    </div>
                    <div class="music-price">
                        <!-- <a href="#"  class="btn razo-btn btn-2">Play song</a> -->
                        <button onclick="foo('<?php echo $audio ?>')" class="btn razo-btn btn-2">Play song</button>
                    </div>
                </div>
                <?php }?>
                <!-- <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp"
                    data-wow-delay="300ms">

                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>2.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="img/bg-img/26.jpg" alt="">
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>Goodbye &amp; Good Riddance - <span>Juice World</span></h5>
                        </div>
                    </div>

                    <div class="music-price">
                        <a href="#" class="btn razo-btn btn-2">$10.99</a>
                    </div>
                </div>

                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp"
                    data-wow-delay="500ms">

                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>3.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="img/bg-img/27.jpg" alt="">
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>The Greatest Showman - <span>Soundtrack</span></h5>
                        </div>
                    </div>

                    <div class="music-price">
                        <a href="#" class="btn razo-btn btn-2">$10.99</a>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-12">
                <div class="view-more-button text-center">
                    <a href="#" class="btn razo-btn mt-50">View More</a>
                </div>
            </div>
        </div> -->
    </div>
</section> 


<section class="razo-charts-portfolio-area section-padding-80">
    <div class="container">
        <div class="row">
            <?php
            $qurey = "SELECT * FROM `artist`";
            $res = mysqli_query($conn, $qurey);
            while ($row = mysqli_fetch_array($res)) {
                ?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="album_song.php?id=<?php echo $row['Artist_Id'] ?>">
                    <div class="single-charts-portfolio mb-30">
                        <img style="height: 350px;" src="./img/artistimg/<?php echo $row['Img'] ?>" class="w-100" alt="author-profile">

                        <div class="overlay-content">
                            <div class="text-center">
                                <h5>
                                    <?php echo $row['Artist_Name'] ?>
                                </h5>
                                <p>
                                    <?php echo $row['Date_of_birth'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            <?php } ?>

</div>
<div class="row">
    <div class="col-12">
        <div class="view-more-button text-center">
            <a href="#" class="btn razo-btn mt-30">View More</a>
        </div>
    </div>
</div>
</section>
<script>
function playSong(src) {
    var audioPlayer = new Audio(src);
    audioPlayer.play();
}

    let aud = document.querySelector("audio")
    function foo(src) {
      aud.src = src
      aud.play()
      
    }
</script>
<?php
include "footer.php";
?>