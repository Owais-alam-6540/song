<?php 
include 'header.php';
?>
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-3">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Add New User</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form>
                              <div class="form-group">
                                 <div class="add-img-user profile-img-edit">
                                    <img class="profile-pic img-fluid" src="images/user/11.png" alt="profile-pic">
                                    <div class="p-image">
                                       <a href="javascript:void();" class="upload-button btn iq-bg-primary">File Upload</a>
                                       <input class="file-upload" type="file" accept="image/*">
                                    </div>
                                 </div>
                                 <div class="img-extension mt-3">
                                    <div class="d-inline-block align-items-center">
                                       <span>Only</span>
                                       <a href="javascript:void();">.jpg</a>
                                       <a href="javascript:void();">.png</a>
                                       <a href="javascript:void();">.jpeg</a>
                                       <span>allowed</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label>User Role:</label>
                                 <select class="form-control" id="selectuserrole">
                                    <option>Select</option>
                                    <option>Web Designer</option>
                                    <option>Web Developer</option>
                                    <option>Tester</option>
                                    <option>Php Developer</option>
                                    <option>Ios Developer </option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="furl">Facebook Url:</label>
                                 <input type="text" class="form-control" id="furl" placeholder="Facebook Url">
                              </div>
                              <div class="form-group">
                                 <label for="turl">Twitter Url:</label>
                                 <input type="text" class="form-control" id="turl" placeholder="Twitter Url">
                              </div>
                              <div class="form-group">
                                 <label for="instaurl">Instagram Url:</label>
                                 <input type="text" class="form-control" id="instaurl" placeholder="Instagram Url">
                              </div>
                              <div class="form-group">
                                 <label for="lurl">Linkedin Url:</label>
                                 <input type="text" class="form-control" id="lurl" placeholder="Linkedin Url">
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-9">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">New User Information</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="new-user-info">
                              <form>
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="fname">First Name:</label>
                                       <input type="text" class="form-control" id="fname" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="lname">Last Name:</label>
                                       <input type="text" class="form-control" id="lname" placeholder="Last Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="add1">Street Address 1:</label>
                                       <input type="text" class="form-control" id="add1" placeholder="Street Address 1">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="add2">Street Address 2:</label>
                                       <input type="text" class="form-control" id="add2" placeholder="Street Address 2">
                                    </div>
                                    <div class="form-group col-md-12">
                                       <label for="cname">Company Name:</label>
                                       <input type="text" class="form-control" id="cname" placeholder="Company Name">
                                    </div>
                                    <div class="form-group col-sm-12">
                                       <label>Country:</label>
                                       <select class="form-control" id="selectcountry">
                                          <option>Select Country</option>
                                          <option>Caneda</option>
                                          <option>Noida</option>
                                          <option >USA</option>
                                          <option>India</option>
                                          <option>Africa</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="mobno">Mobile Number:</label>
                                       <input type="text" class="form-control" id="mobno" placeholder="Mobile Number">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="altconno">Alternate Contact:</label>
                                       <input type="text" class="form-control" id="altconno" placeholder="Alternate Contact">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="email">Email:</label>
                                       <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="pno">Pin Code:</label>
                                       <input type="text" class="form-control" id="pno" placeholder="Pin Code">
                                    </div>
                                    <div class="form-group col-md-12">
                                       <label for="city">Town/City:</label>
                                       <input type="text" class="form-control" id="city" placeholder="Town/City">
                                    </div>
                                 </div>
                                 <hr>
                                 <h5 class="mb-3">Security</h5>
                                 <div class="row">
                                    <div class="form-group col-md-12">
                                       <label for="uname">User Name:</label>
                                       <input type="text" class="form-control" id="uname" placeholder="User Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="pass">Password:</label>
                                       <input type="password" class="form-control" id="pass" placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="rpass">Repeat Password:</label>
                                       <input type="password" class="form-control" id="rpass" placeholder="Repeat Password ">
                                    </div>
                                 </div>
                                 <div class="checkbox">
                                    <label><input class="mr-2" type="checkbox">Enable Two-Factor-Authentication</label>
                                 </div>
                                 <button type="submit" class="btn btn-primary">Add New User</button>
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
      <script src="js/chart-custom.js"></script>
      <!-- music js -->
      <script src="js/music-player.js"></script>
      <!-- music-player js -->
      <script src="js/music-player-dashboard.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
   </body>
</html>