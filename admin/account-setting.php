<?php 
include 'header.php';
?>
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Account Setting</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="acc-edit">
                              <form>
                                 <div class="form-group">
                                    <label for="uname">User Name:</label>
                                    <input type="text" class="form-control" id="uname" value="Barry@01">
                                 </div>
                                 <div class="form-group">
                                    <label for="email">Email Id:</label>
                                    <input type="email" class="form-control" id="email" value="Barryjohn@gmail.com">
                                 </div>
                                 <div class="form-group">
                                    <label for="altemail">Alternate Email:</label>
                                    <input type="email" class="form-control" id="altemail" value="designtheme@gmail.com">
                                 </div>
                                 <div class="form-group">
                                    <label class="d-block">Language Known:</label>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                       <input type="checkbox" class="custom-control-input" id="english" checked="">
                                       <label class="custom-control-label" for="english">English</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                       <input type="checkbox" class="custom-control-input" id="french" checked="">
                                       <label class="custom-control-label" for="french">French</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                       <input type="checkbox" class="custom-control-input" id="hindi">
                                       <label class="custom-control-label" for="hindi">Hindi</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                       <input type="checkbox" class="custom-control-input" id="spanish" checked="">
                                       <label class="custom-control-label" for="spanish">Spanish</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                       <input type="checkbox" class="custom-control-input" id="arabic">
                                       <label class="custom-control-label" for="arabic">Arabic</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                       <input type="checkbox" class="custom-control-input" id="italian">
                                       <label class="custom-control-label" for="italian">Italian</label>
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                                 <button type="reset" class="btn iq-bg-danger">Cancel</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Social Media</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="acc-edit">
                              <form>
                                 <div class="form-group">
                                    <label for="facebook">Facebook:</label>
                                    <input type="text" class="form-control" id="facebook" value="www.facebook.com">
                                 </div>
                                 <div class="form-group">
                                    <label for="twitter">Twitter:</label>
                                    <input type="text" class="form-control" id="twitter" value="www.twitter.com">
                                 </div>
                                 <div class="form-group">
                                    <label for="google">Google +:</label>
                                    <input type="text" class="form-control" id="google" value="www.google.com">
                                 </div>
                                 <div class="form-group">
                                    <label for="instagram">Instagram:</label>
                                    <input type="text" class="form-control" id="instagram" value="www.instagram.com">
                                 </div>
                                 <div class="form-group">
                                    <label for="youtube">You Tube:</label>
                                    <input type="text" class="form-control" id="youtube" value="www.youtube.com">
                                 </div>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                                 <button type="reset" class="btn iq-bg-danger">Cancel</button>
                              </form>
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
      <!-- Chart Custom JavaScript -->
      <script src="js/chart-custom.js"></script>
      <!-- Music js -->
      <script src="js/music-player.js"></script>
      <!-- Music-player js -->
      <script src="js/music-player-dashboard.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
   </body>
</html>