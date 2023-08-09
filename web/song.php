<?php
include "header.php";
include "config.php";
include "./utils/avg_rating.php";
include "./utils/avg-ost-rating.php";
?>
<!-- ost -->
<!-- Modal -->
<div class="modal fade" id="ost_rating_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ost Review & Ratting</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="ostrating.php" method="post">
            <input type="hidden" name="ost_id">
            <input type="text" name="feedback">
            <select name="rating">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <button class="btn razo-btn btn-sm" type="submit">Give rating</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- song -->
<!-- Modal -->
<div class="modal fade" id="rating_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Songs Review & Ratting</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="rating.php" method="post">
            <input type="hidden" name="song" value="">
            <input type="text" name="feedback">
            <select name="rating">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <button class="btn razo-btn btn-sm" type="submit">Give rating</button>
        </form>
      </div>
    </div>
  </div>
</div>



<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <video controls width="100%"></video>
        </div>
    </div>
</div>

<!-- ALL OST    -->

<section class="razo-latest-podcast-area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="section-heading">
                    <h2>All OST:</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $query1 = "SELECT * FROM `ost`";
            $res1 = mysqli_query($conn, $query1);
            while ($row1 = mysqli_fetch_array($res1)) {
                $image1 = "../ost-themnail/" . $row1[8];
                $video = "../ost/" . $row1[2];
            ?>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-podcast-area mb-30 wow fadeInUp" data-wow-delay="100ms">

                        <div class="podcast-thumb">
                            <img src="<?php echo $image1 ?>" alt="" style="height: 250px; object-fit: cover;">
                            <!-- <img src="img/bg-img/69./jpg" alt=""> -->
                        </div>

                        <div class="podcast-content">
                            <div class="podcast-meta">
                                <a href="#"><i class="icon_calendar"></i>
                                    <?php echo $row1['Release_date'] ?>
                                </a>
                                <!-- <a href="#"><i class="icon_clock_alt"></i> 36 min</a> -->
                            </div>
                            <h5>
                                <?php echo $row1['Name'] ?>
                            </h5>
                            <div class="border-line"></div>
                            <div class="play-download-btn d-flex align-items-center justify-content-between">
                                <!-- <a href="#" class="btn razo-btn btn-sm">playing now</a> -->
                                <button onclick="fo('<?php echo $video ?>')" class="btn razo-btn btn-sm mb-3" style="margin-bottom: 0.5rem;">Play Now</button>
                                <a href="./ostdownload.php?file=<?php echo $row1[2]?>" class="music-download-btn"><i class="icon_download"></i></a>
                            </div>
                            <div>
                                <button class="btn razo-btn btn-sm" onclick="handle_rating1('<?php echo $row1['Ost_Id'] ?>')"><?php echo ost_get_rating($row1['Ost_Id'])?></button>
                            </div>
                            <?php echo get_ost_avg_rating($row1['Ost_Id'])?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    </div>
</section>


<!-- ALL SONGS   -->
<section class="razo-latest-podcast-area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="section-heading">
                    <h2>All songs:</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $query = "SELECT * FROM `Song`";
            $res = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($res)) {
                $image = "../thumbnails/" . $row[7];
                $video = "../songs/" . $row[2];
            ?>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-podcast-area mb-30 wow fadeInUp" data-wow-delay="100ms">

                        <div class="podcast-thumb">
                            <img src="<?php echo $image ?>" alt="" style="height: 250px; object-fit: cover;">
                            <!-- <img src="img/bg-img/69./jpg" alt=""> -->
                        </div>

                        <div class="podcast-content">
                            <div class="podcast-meta">
                                <a href="#"><i class="icon_calendar"></i>
                                    <?php echo $row['Release_date'] ?>
                                </a>
                                <!-- <a href="#"><i class="icon_clock_alt"></i> 36 min</a> -->
                            </div>
                            <h5>
                                <?php echo $row['Song_Name'] ?>
                            </h5>
                            <div class="border-line"></div>
                            <div class="play-download-btn d-flex align-items-center justify-content-between">
                                <!-- <a href="#" class="btn razo-btn btn-sm">playing now</a> -->
                                <button onclick="foo('<?php echo $video ?>')" class="btn razo-btn btn-sm" style="margin-bottom: 0.5rem;">Play Now</button>
                                <a href="./rrr.php?file=<?php echo $row[2]?>" class="music-download-btn"><i class="icon_download"></i></a>
                            </div>
                            <div>
                                <button class="btn razo-btn btn-sm" onclick="handle_rating('<?php echo $row['Song_Id'] ?>')"><?php echo get_rating($row['Song_Id'])?></button>
                            </div>
                            <?php echo avg_rating($row['Song_Id'])?>
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
    let vid1 = document.querySelector("video")

    function fo(src) {
        vid1.src = src
        vid1.play()
    }
</script>
<script>
    let vid = document.querySelector("video")

    function foo(src) {
        vid.src = src
        vid.play()
      
    }
</script>




<!-- custom script -->

<script>
    function handle_rating(id){


        const active_user = <?php echo isset($_SESSION['user'])? "'{$_SESSION['user']['name']}'" : 'null' ?>;
        
        if(active_user){
            $('#rating_model').modal('show')
            const form = document.forms[2];
            form.elements[0].value = id;
            console.log("%c"+id,"background:gray; color:white; padding:.5rem 1rem");

        }else{
            alert("You have to login in order to give review")
            location.href="./login.php"
        }
        
    }
    
</script>
<script>
    function handle_rating1(id){



        const active_user = <?php echo isset($_SESSION['user'])? "'{$_SESSION['user']['name']}'" : 'null' ?>;
        
        if(active_user){
            $('#ost_rating_model').modal('show')
            const form = document.forms[1];
            form.elements[0].value = id;
            console.log("%c"+name,"background:gray; color:white; padding:.5rem 1rem");

        }else{
            alert("You have to login in order to give review")
            location.href="./login.php"
            console.log(here);
        }
        
    }
</script>