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
                              <h4 class="card-title">Vertical Wizard</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="row">
                              <div class="col-md-3">
                                 <ul id="top-tabbar-vertical" class="p-0">
                                    <li class="active" id="personal">
                                       <a href="javascript:void();">
                                       <i class="ri-lock-unlock-line text-primary"></i><span>Personal</span>
                                       </a>
                                    </li>
                                    <li id="contact">
                                       <a href="javascript:void();">
                                       <i class="ri-user-fill text-danger"></i><span>Contact</span>
                                       </a>
                                    </li>
                                    <li id="official">
                                       <a href="javascript:void();">
                                       <i class="ri-camera-fill text-success"></i><span>Official</span>
                                       </a>
                                    </li>
                                    <li id="payment">
                                       <a href="javascript:void();">
                                       <i class="ri-check-fill text-warning"></i><span>Payment</span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="col-md-9">
                                 <form id="form-wizard3" class="text-center">
                                    <!-- fieldsets -->
                                    <fieldset>
                                       <div class="form-card text-left">
                                          <div class="row">
                                             <div class="col-12">
                                                <h3 class="mb-4">User Information:</h3>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="fname">First Name: *</label>
                                                   <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required="required" />
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="lname">Last Name: *</label>
                                                   <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" />
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label>Gender: *</label>
                                                   <div class="form-check">
                                                      <div class="custom-control custom-radio custom-control-inline">
                                                         <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                         <label class="custom-control-label" for="customRadio1"> Male</label>
                                                      </div>
                                                      <div class="custom-control custom-radio custom-control-inline">
                                                         <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                         <label class="custom-control-label" for="customRadio2"> Female</label>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="dob">Date Of Birth: *</label>
                                                   <input type="date" class="form-control" id="dob" name="dob" />
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <button id="submit" type="button" name="next" class="btn btn-primary next action-button float-right" value="Next" >Next</button>
                                    </fieldset>
                                    <fieldset>
                                       <div class="form-card text-left">
                                          <div class="row">
                                             <div class="col-12">
                                                <h3 class="mb-4">Contact Information:</h3>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="email">Email Id: *</label>
                                                   <input type="email" class="form-control" id="email" name="email" placeholder="Email Id" />
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="ccno">Contact Number: *</label>
                                                   <input type="text" class="form-control" id="ccno" name="ccno" placeholder="Contact Number" />
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="city">City: *</label>
                                                   <input type="text" class="form-control" id="city" name="city" placeholder="City." />
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="state">State: *</label>
                                                   <input type="text" class="form-control" id="state" name="state" placeholder="State." />
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <button type="button" name="next" class="btn btn-primary next action-button float-right" value="Next" >Next</button>
                                       <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-right mr-3" value="Previous" >Previous</button>
                                    </fieldset>
                                    <fieldset>
                                       <div class="form-card text-left">
                                          <div class="row">
                                             <div class="col-12">
                                                <h3 class="mb-4">Official Information:</h3>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="empid">Employee Id: *</label>
                                                   <input type="email" class="form-control" id="empid" name="empid" placeholder="Employee Id." />
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="desg">Designation: *</label>
                                                   <input type="text" class="form-control" id="desg" name="desg" placeholder="Designation." />
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="accname">Departmrnt Name: *</label>
                                                   <input type="text" class="form-control" id="accname" name="accname" placeholder="Departmrnt Name." />
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="workhour">Working Hour: *</label>
                                                   <input type="text" class="form-control" id="workhour" name="workhour" placeholder="Working Hour." />
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <button type="button" name="next" class="btn btn-primary next action-button float-right" value="Submit" >Submit</button>
                                       <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-right mr-3" value="Previous" >Previous</button>
                                    </fieldset>
                                    <fieldset>
                                       <div class="form-card text-left">
                                          <div class="row">
                                             <div class="col-12">
                                                <h3 class="mb-4 text-left">Payment:</h3>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="panno">Pan No: *</label>
                                                   <input type="text" class="form-control" id="panno" name="panno" placeholder="Pan No." />
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="accno">Account No: *</label>
                                                   <input type="text" class="form-control" id="accno" name="accno" placeholder="Account No." />
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="holname">Account Holder Name: *</label>
                                                   <input type="text" class="form-control" id="holname" name="accname" placeholder="Account Holder Name." />
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="ifsc">IFSC Code: *</label>
                                                   <input type="text" class="form-control" id="ifsc" name="ifsc" placeholder="IFSC Code." />
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <a class="btn btn-primary action-button float-right" href="form-wizard-vertical.html" >Submit</a>
                                       <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-right mr-3" value="Previous" >Previous</button>
                                    </fieldset>
                                 </form>
                              </div>
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