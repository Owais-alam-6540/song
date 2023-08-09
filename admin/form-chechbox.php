<?php
include "header.php";
?>
       <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Basic Checkbox</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <div class="checkbox d-inline-block mr-2">
                              <input type="checkbox" class="checkbox-input" id="checkbox1" >
                              <label for="checkbox1">Primary / Inactive</label>
                           </div>
                           <div class="checkbox d-inline-block mr-2">
                              <input type="checkbox" class="checkbox-input" id="checkbox2" checked="" >
                              <label for="checkbox2">Primary / Active</label>
                           </div>
                           <div class="checkbox d-inline-block mr-2">
                              <input type="checkbox" class="checkbox-input" id="checkbox3" disabled="">
                              <label for="checkbox3">Disable / Inactive</label>
                           </div>
                           <div class="checkbox d-inline-block mr-2">
                              <input type="checkbox" class="checkbox-input" id="checkbox4" checked="" disabled="">
                              <label for="checkbox4">Active / Disable</label>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Custom Color</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-primary" id="customCheck-11">
                              <label class="custom-control-label" for="customCheck-11">Primary </label>
                           </div>
                           <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-success" id="customCheck-22">
                              <label class="custom-control-label" for="customCheck-22">Success</label>
                           </div>
                           <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-danger" id="customCheck-33">
                              <label class="custom-control-label" for="customCheck-33">Danger</label>
                           </div>
                           <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-warning" id="customCheck-44">
                              <label class="custom-control-label" for="customCheck-44">Warning</label>
                           </div>
                           <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-dark" id="customCheck-55">
                              <label class="custom-control-label" for="customCheck-55">Dark</label>
                           </div>
                           <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-info" id="customCheck-66">
                              <label class="custom-control-label" for="customCheck-66"> Info</label>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Boolean Checkbox</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <div class="custom-control custom-checkbox custom-control-inline">
                              <input type="checkbox" class="custom-control-input" id="customCheck-t" checked="">
                              <label class="custom-control-label" for="customCheck-t">True</label>
                           </div>
                           <div class="custom-control custom-checkbox custom-control-inline">
                              <input type="checkbox" class="custom-control-input" id="customCheck-f">
                              <label class="custom-control-label" for="customCheck-f">False</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Custom Checkbox</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <div class="custom-control custom-checkbox custom-control-inline">
                              <input type="checkbox" class="custom-control-input" id="customCheck5">
                              <label class="custom-control-label" for="customCheck5">Primary / Inactive</label>
                           </div>
                           <div class="custom-control custom-checkbox custom-control-inline">
                              <input type="checkbox" class="custom-control-input" id="customCheck6" Checked="">
                              <label class="custom-control-label" for="customCheck6">Primary - active</label>
                           </div>
                           <div class="custom-control custom-checkbox custom-control-inline">
                              <input type="checkbox" class="custom-control-input" id="customCheck7"  disabled="">
                              <label class="custom-control-label" for="customCheck7">Primary - inactive - disabled</label>
                           </div>
                           <div class="custom-control custom-checkbox custom-control-inline">
                              <input type="checkbox" class="custom-control-input" id="customCheck8"  checked="" disabled="">
                              <label class="custom-control-label" for="customCheck8">Primary - active - disabled</label>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Color</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-primary" id="customCheck-1" checked="">
                              <label class="custom-control-label" for="customCheck-1"> Primary</label>
                           </div>
                           <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-success" id="customCheck-2" checked="">
                              <label class="custom-control-label" for="customCheck-2">Success</label>
                           </div>
                           <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-danger" id="customCheck-3" checked="">
                              <label class="custom-control-label" for="customCheck-3">Danger</label>
                           </div>
                           <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-warning" id="customCheck-4" checked="">
                              <label class="custom-control-label" for="customCheck-4">Warning</label>
                           </div>
                           <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-dark" id="customCheck-5" checked="">
                              <label class="custom-control-label" for="customCheck-5">Dark</label>
                           </div>
                           <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-info" id="customCheck-6" checked="">
                              <label class="custom-control-label" for="customCheck-6">Info</label>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Change Icon</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                              <input type="checkbox" class="custom-control-input" id="customCheck-10" checked="">
                              <label class="custom-control-label" for="customCheck-10"><i class="fa fa-music"></i>Music</label>
                           </div>
                           <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                              <input type="checkbox" class="custom-control-input" id="customCheck-20" checked="">
                              <label class="custom-control-label" for="customCheck-20"><i class="fa fa-commenting-o"></i>SMS</label>
                           </div>
                           <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                              <input type="checkbox" class="custom-control-input" id="customCheck-30" checked="">
                              <label class="custom-control-label" for="customCheck-30"><i class="fa fa-times"></i>Cancel</label>
                           </div>
                           <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                              <input type="checkbox" class="custom-control-input" id="customCheck-40" checked="">
                              <label class="custom-control-label" for="customCheck-40"><i class="fa fa-file"></i>File</label>
                           </div>
                           <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                              <input type="checkbox" class="custom-control-input" id="customCheck-50" checked="">
                              <label class="custom-control-label" for="customCheck-50"><i class="fa fa-bold"></i>Bold</label>
                           </div>
                           <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                              <input type="checkbox" class="custom-control-input" id="customCheck-60" checked="">
                              <label class="custom-control-label" for="customCheck-60"><i class="fa fa-map-marker"></i>Location</label>
                           </div>
                           <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                              <input type="checkbox" class="custom-control-input" id="customCheck-70" checked="">
                              <label class="custom-control-label" for="customCheck-70"><i class="fa fa-camera"></i>Camera</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="iq-footer">
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
      </footer>
      <!-- Footer END -->
      <!-- color-customizer -->
      <div class="iq-colorbox color-fix">
         <div class="buy-button"> <a class="color-full" href="#"><i class="fa fa-spinner fa-spin"></i></a> </div>
         <div class="clearfix color-picker">
            <h3 class="iq-font-black">Muzik Awesome Color</h3>
            <p>This color combo available inside whole template. You can change on your wish, Even you can create your own with limitless possibilities! </p>
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
            <a target="_blank" class="btn btn-primary d-block mt-3" href="https://themeforest.net/item/muzik-music-streaming-admin-template/27967164">Purchase Now</a>
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
      <!-- Style Customizer -->
      <script src="js/style-customizer.js"></script>
      <script src="js/chart-custom.js"></script>
      <!-- music js -->
      <script src="js/music-player.js"></script>
      <!-- music-player js -->
      <script src="js/music-player-dashboard.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
   </body>
</html>