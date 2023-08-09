<?php
include "header.php";
?>
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Editable Table</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div id="table" class="table-editable">
                              <span class="table-add float-right mb-3 mr-2">
                              <button class="btn btn-sm iq-bg-success"><i
                                 class="ri-add-fill"><span class="pl-1">Add New</span></i>
                              </button>
                              </span>
                              <table class="table table-bordered table-responsive-md table-striped text-center">
                                 <thead>
                                    <tr>
                                       <th>Name</th>
                                       <th>Age</th>
                                       <th>Company Name</th>
                                       <th>Country</th>
                                       <th>City</th>
                                       <th>Sort</th>
                                       <th>Remove</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td contenteditable="true">Gio Metric</td>
                                       <td contenteditable="true">25</td>
                                       <td contenteditable="true">Deepends</td>
                                       <td contenteditable="true">Spain</td>
                                       <td contenteditable="true">Madrid</td>
                                       <td>
                                          <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                                          <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></span>
                                       </td>
                                       <td>
                                          <span class="table-remove"><button type="button"
                                             class="btn iq-bg-danger btn-rounded btn-sm my-0">Remove</button></span>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td contenteditable="true">Manny Petty</td>
                                       <td contenteditable="true">45</td>
                                       <td contenteditable="true">Insectus</td>
                                       <td contenteditable="true">France</td>
                                       <td contenteditable="true">San Francisco</td>
                                       <td>
                                          <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                                          <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></span>
                                       </td>
                                       <td>
                                          <span class="table-remove"><button type="button"
                                             class="btn iq-bg-danger btn-rounded btn-sm my-0">Remove</button></span>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td contenteditable="true">Lucy Tania</td>
                                       <td contenteditable="true">26</td>
                                       <td contenteditable="true">Isotronic</td>
                                       <td contenteditable="true">Germany</td>
                                       <td contenteditable="true">Frankfurt am Main</td>
                                       <td>
                                          <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                                          <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></span>
                                       </td>
                                       <td>
                                          <span class="table-remove"><button type="button"
                                             class="btn iq-bg-danger btn-rounded btn-sm my-0">Remove</button></span>
                                       </td>
                                    </tr>
                                    <tr class="hide">
                                       <td contenteditable="true">Anna Mull</td>
                                       <td contenteditable="true">35</td>
                                       <td contenteditable="true">Portica</td>
                                       <td contenteditable="true">USA</td>
                                       <td contenteditable="true">Oregon</td>
                                       <td>
                                          <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                                          <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></span>
                                       </td>
                                       <td>
                                          <span class="table-remove"><button type="button"
                                             class="btn iq-bg-danger btn-rounded btn-sm my-0">Remove</button></span>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
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