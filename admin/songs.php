<?php
include "header.php";
include "config.php";
?>
<!-- Page Content  -->
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <video controls width="100%"></video>
         </div>
         <!-- all ost  -->
         <div class="col-lg-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">All Ost</h4>
                  </div>
               </div>
               <div class="iq-card-body col">
                  <ul class="list-unstyled row iq-box-hover mb-0">
                     <?php
                     $query = "SELECT * FROM `ost`";
                     $res = mysqli_query($conn, $query);
                     while ($row1 = mysqli_fetch_array($res)) {
                        $image1 = "../ost-themnail/" . $row1[8];
                        $video = "../ost/" . $row1[2];
                        ?>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="iq-card">
                              <div class="iq-card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="music-player.html">
                                       <img src="<?php echo $image1 ?>" class="img-border-radius img-fluid w-100" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <!-- <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a> -->
                                       <button onclick="fo('<?php echo $video ?>')" class="btn razo-btn btn-sm">Play
                                          Now</button>
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">
                                       <?php echo $row1['Name'] ?>
                                    </h6>
                                    <p class="mb-0">
                                       <?php echo $row1['Drama'] ?>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                     <?php } ?>
                  </ul>
               </div>
            </div>
         </div>
         <!-- all song  -->
         <div class="col-lg-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">All Songs</h4>
                  </div>
               </div>
               <div class="iq-card-body col">
               <ul class="list-unstyled row iq-box-hover mb-0">
                     <?php
                     $query = "SELECT * FROM `Song`INNER JOIN `artist` ON `artist`=`Artist_Id`";
                     $res = mysqli_query($conn, $query);
                     while ($row = mysqli_fetch_array($res)) {
                        $image = "../thumbnails/" . $row[7];
                        $video = "../songs/" . $row[2];
                        ?>
                        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                           <div class="iq-card">
                              <div class="iq-card-body p-0">
                                 <div class="iq-thumb">
                                    <div class="iq-music-overlay"></div>
                                    <a href="music-player.html">
                                       <img src="<?php echo $image ?>" class="w-100 rounded" height="200" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                       <button onclick="foo('<?php echo $video ?>')" class="btn razo-btn btn-sm">
                                       <a >
                                             <i class="las la-play-circle"></i>
                                          </a>
                                          </button>
                                       
                                    </div>
                                 </div>
                                 <div class="feature-list text-center">
                                    <h6 class="font-weight-600 mb-0">
                                       <?php echo $row['Song_Name'] ?>
                                    </h6>
                                    <p class="mb-0">
                                       <?php echo $row['Artist_Name'] ?>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                     <?php } ?>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<!-- Wrapper END -->
<!-- Footer -->
<!-- <footer class="iq-footer">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <div class="player row">
                  <div class="details col-6 col-sm-4 col-md-4 col-lg-4">
                     <div class="now-playing"></div>
                     <div class="track-art"></div>
                     <div>
                        <div class="track-name">Pop Smoke </div>
                        <div class="track-artist">Cascada</div>
                     </div>
                  </div>
                  <div class="slider_container slider_music col-sm-5 col-md-4 col-lg-4">
                     <div class="current-time">00:00</div>
                     <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
                     <div class="total-duration">00:00</div>
                  </div>
                  <div class="buttons col-6  col-sm-3 col-md-2  col-lg-2">
                     <div class="prev-track" onclick="prevTrack()"><i class="fa fa-step-backward fa-2x"></i></div>
                     <div class="playpause-track" onclick="playpauseTrack()"><i class="fa fa-play-circle fa-3x"></i></div>
                     <div class="next-track" onclick="nextTrack()"><i class="fa fa-step-forward fa-2x"></i></div>
                  </div>
                  <div class="slider_container sound col-sm-6 col-md-2  col-lg-2">
                     <i class="fa fa-volume-down"></i>
                     <input type="range" min="1" max="100" value="99" class="volume_slider" onchange="setVolume()">
                     <i class="fa fa-volume-up"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer> -->
<!-- Footer END -->
<!-- color-customizer -->
<div class="iq-colorbox color-fix">
   <div class="buy-button"> <a class="color-full" href="#"><i class="fa fa-spinner fa-spin"></i></a> </div>
   <div id="right-sidebar-scrollbar" class="iq-colorbox-inner">
      <div class="clearfix color-picker">
         <h3 class="iq-font-black">music Awesome Color</h3>
         <p>This color combo available inside whole template. You can change on your wish, Even you can create your own
            with limitless possibilities! </p>
         <ul class="iq-colorselect clearfix">
            <li class="color-1 iq-colormark" data-style="color-1"></li>
            <li class="color-2" data-style="iq-color-2"></li>
            <li class="color-3" data-style="iq-color-3"></li>
            <li class="color-4" data-style="iq-color-4"></li>
            <li class="color-5" data-style="iq-color-5"></li>
            <li class="color-6" data-style="iq-color-6"></li>
            <li class="color-7" data-style="iq-color-7"></li>
            <li class="color-8" data-style="iq-color-8"></li>
            <li class="color-9" data-style="iq-color-9"></li>
            <li class="color-10" data-style="iq-color-10"></li>
            <li class="color-11" data-style="iq-color-11"></li>
            <li class="color-12" data-style="iq-color-12"></li>
            <li class="color-13" data-style="iq-color-13"></li>
            <li class="color-14" data-style="iq-color-14"></li>
            <li class="color-15" data-style="iq-color-15"></li>
            <li class="color-16" data-style="iq-color-16"></li>
            <li class="color-17" data-style="iq-color-17"></li>
            <li class="color-18" data-style="iq-color-18"></li>
            <li class="color-19" data-style="iq-color-19"></li>
            <li class="color-20" data-style="iq-color-20"></li>
         </ul>
         <a target="_blank" class="btn btn-primary d-block mt-3"
            href="https://themeforest.net/item/muzik-music-streaming-admin-template/27967164">Purchase Now</a>
      </div>
   </div>
</div>
<!-- color-customizer END -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Appear JavaScript -->
<script src="js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="js/countdown.min.js"></script>
<!-- Counterup JavaScript -->
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="js/wow.min.js"></script>
<!-- Apexcharts JavaScript -->
<script src="js/apexcharts.js"></script>
<!-- Slick JavaScript -->
<script src="js/slick.min.js"></script>
<!-- Select2 JavaScript -->
<script src="js/select2.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="js/smooth-scrollbar.js"></script>
<!-- am core JavaScript -->
<script src="js/core.js"></script>
<!-- am charts JavaScript -->
<script src="js/charts.js"></script>
<!-- am animated JavaScript -->
<script src="js/animated.js"></script>
<!-- am kelly JavaScript -->
<script src="js/kelly.js"></script>
<!-- am maps JavaScript -->
<script src="js/maps.js"></script>
<!-- am worldLow JavaScript -->
<script src="js/worldLow.js"></script>
<!-- Raphael-min JavaScript -->
<script src="js/raphael-min.js"></script>
<!-- Morris JavaScript -->
<script src="js/morris.js"></script>
<!-- Morris min JavaScript -->
<script src="js/morris.min.js"></script>
<!-- Flatpicker Js -->
<script src="js/flatpickr.js"></script>
<!-- Style Customizer -->
<script src="js/style-customizer.js"></script>
<!-- Chart Custom JavaScript -->
<script src="js/chart-custom.js"></script>
<!-- Music js -->
<script src="js/music-player.js"></script>
<!-- Music-player js -->
<script src="js/music-player-dashboard.js"></script>
<!-- Custom JavaScript -->
<script src="js/custom.js"></script>
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
</body>

</html>