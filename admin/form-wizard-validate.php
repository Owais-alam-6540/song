<?php
include "header.php";
?>
<!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Validate Wizard</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="stepwizard mt-4">
                              <div class="stepwizard-row setup-panel">
                                 <div id="user" class="wizard-step active">
                                    <a href="#user-detail" class="active btn">
                                    <i class="ri-lock-unlock-line text-primary"></i><span>User Detail</span>
                                    </a>
                                 </div>
                                 <div id="document" class="wizard-step">
                                    <a href="#document-detail" class="btn btn-default disabled" >
                                    <i class="ri-user-fill text-danger"></i><span>Document Detail</span>
                                    </a>
                                 </div>
                                 <div id="bank" class="wizard-step">
                                    <a href="#bank-detail" class="btn btn-default disabled">
                                    <i class="ri-camera-fill text-success"></i><span>Bank Detail</span>
                                    </a>
                                 </div>
                                 <div id="confirm" class="wizard-step">
                                    <a href="#cpnfirm-data" class="btn btn-default disabled">
                                    <i class="ri-check-fill text-warning"></i><span>Confirm</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <form class="form">
                              <div class="row setup-content" id="user-detail">
                                 <div class="col-sm-12">
                                    <div class="col-md-12 p-0">
                                       <h3 class="mb-4">User Information:</h3>
                                       <div class="row">
                                          <div class="form-group col-md-6">
                                             <label class="control-label">First Name</label>
                                             <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  />
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label class="control-label">Last Name</label>
                                             <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label for="uname" class="control-label">User Name: *</label>
                                             <input type="text" class="form-control" id="uname" required="required" name="uname" placeholder="Enter User Name">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label for="emailid" class="control-label">Email Id: *</label>
                                             <input type="email" id="emailid" class="form-control" required="required" name="emailid" placeholder="Email ID">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label for="pwd" class="control-label">Password: *</label>
                                             <input type="password" class="form-control" required="required" id="pwd" name="pwd" placeholder="Password">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label for="cpwd" class="control-label">Confirm Password: *</label>
                                             <input type="password" class="form-control" id="cpwd" required="required" name="cpwd" placeholder="Confirm Password">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label for="cno" class="control-label">Contact Number: *</label>
                                             <input type="text" class="form-control" required="required" id="cno" name="cno" placeholder="Contact Number">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label for="acno" class="control-label">Alternate Contact Number: *</label>
                                             <input type="text" class="form-control" required="required" id="acno" name="acno" placeholder="Alternate Contact Number">
                                          </div>
                                          <div class="col-md-12 mb-3 form-group">
                                             <label for="address" class="control-label">Address: *</label>
                                             <textarea name="address" class="form-control" id="address" rows="5" required="required"></textarea>
                                          </div>
                                       </div>
                                       <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="row setup-content" id="document-detail">
                                 <div class="col-sm-12">
                                    <div class="col-md-12 p-0">
                                       <h3 class="mb-4">Document Details:</h3>
                                       <div class="row">
                                          <div class="col-md-6 form-group">
                                             <label for="fname" class="control-label">Company Name: *</label>
                                             <input type="text" class="form-control" required="required" id="fname" name="fname" placeholder="Company Name">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <div class="form-group">
                                                <label for="ccno" class="control-label">Contact Number: *</label>
                                                <input type="text" class="form-control" required="required" id="ccno" name="ccno" placeholder="Contact Number">
                                             </div>
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <div class="form-group">
                                                <label for="url" class="control-label">Company Url: *</label>
                                                <input type="text" class="form-control" required="required" id="url" name="url" placeholder="Company Url.">
                                             </div>
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <div class="form-group">
                                                <label for="cemail" class="control-label">Company Mail Id: *</label>
                                                <input type="email" class="form-control" required="required" id="cemail" name="cemail" placeholder="Company Mail Id.">
                                             </div>
                                          </div>
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="cadd" class="control-label">Company Address: *</label>
                                                <textarea name="cadd" required="required" id="cadd" class="form-control" rows="5"></textarea>
                                             </div>
                                          </div>
                                       </div>
                                       <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="row setup-content" id="bank-detail">
                                 <div class="col-sm-12">
                                    <div class="col-md-12 p-0">
                                       <h3 class="mb-4">Bank Detail:</h3>
                                       <div class="row">
                                          <div class="col-md-6 form-group">
                                             <label for="panno" class="control-label">Pan No: *</label>
                                             <input type="text" class="form-control" required="required" id="panno" name="panno" placeholder="Pan No.">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label for="accno" class="control-label">Account No: *</label>
                                             <input type="text" class="form-control" required="required" id="accno" name="accno" placeholder="Account No.">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label for="accname" class="control-label">Account Holder Name: *</label>
                                             <input type="text" class="form-control" required="required" id="accname" name="accname" placeholder="Account Holder Name.">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label for="ifsc" class="control-label">IFSC Code: *</label>
                                             <input type="text" class="form-control" required="required" id="ifsc" name="ifsc" placeholder="IFSC Code.">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label for="bankname" class="control-label">Bank Name: *</label>
                                             <input type="text" class="form-control" required="required" id="bankname" name="bankname" placeholder="Bank Name.">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label for="branch" class="control-label">Bank Branch Name: *</label>
                                             <input type="text" class="form-control" required="required" id="branch" name="branch" placeholder="Bank Branch Name.">
                                          </div>
                                       </div>
                                       <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="row setup-content" id="cpnfirm-data">
                                 <div class="col-sm-12">
                                    <div class="col-md-12 p-0">
                                       <h3 class="mb-4 text-left">Finish:</h3>
                                       <div class="row justify-content-center">
                                          <div class="col-3"> <img src="images/page-img/img-success.png" class="fit-image" alt="img-success"> </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </form>
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