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
                              <h4 class="card-title"> Default Validation</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <form>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">First name</label>
                                    <input type="text" class="form-control" id="validationDefault01" required>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefault02">Last name</label>
                                    <input type="text" class="form-control" id="validationDefault02" required>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefaultUsername">Username</label>
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                       </div>
                                       <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefault03">City</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefault04">State</label>
                                    <select class="form-control" id="validationDefault04" required>
                                       <option selected disabled value="">Choose...</option>
                                       <option>...</option>
                                    </select>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefault05">Zip</label>
                                    <input type="text" class="form-control" id="validationDefault05" required>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                    <label class="form-check-label" for="invalidCheck2">
                                    Agree to terms and conditions
                                    </label>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <button class="btn btn-primary" type="submit">Submit form</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Supported elements</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <form class="was-validated">
                              <div class="mb-3">
                                 <label for="validationTextarea">Textarea</label>
                                 <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                                 <div class="invalid-feedback">
                                    Please enter a message in the textarea.
                                 </div>
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                                 <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
                                 <div class="invalid-feedback">Example invalid feedback text</div>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                 <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
                              </div>
                              <div class="custom-control custom-radio mb-3">
                                 <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                                 <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
                                 <div class="invalid-feedback">More example invalid feedback text</div>
                              </div>
                              <div class="form-group">
                                 <select class="custom-select" required>
                                    <option value="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                 </select>
                                 <div class="invalid-feedback">Example invalid custom select feedback</div>
                              </div>
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                 <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                 <div class="invalid-feedback">Example invalid custom file feedback</div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Custom Validation</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <form class="needs-validation" novalidate>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">First name</label>
                                    <input type="text" class="form-control" id="validationCustom01"  required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Last name</label>
                                    <input type="text" class="form-control" id="validationCustom02"  required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustomUsername">Username</label>
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                                       </div>
                                       <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                       <div class="invalid-feedback">
                                          Please choose a username.
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom03">City</label>
                                    <input type="text" class="form-control" id="validationCustom03" required>
                                    <div class="invalid-feedback">
                                       Please provide a valid city.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">State</label>
                                    <select class="form-control" id="validationCustom04" required>
                                       <option selected disabled value="">Choose...</option>
                                       <option>...</option>
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom05">Zip</label>
                                    <input type="text" class="form-control" id="validationCustom05" required>
                                    <div class="invalid-feedback">
                                       Please provide a valid zip.
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                       You must agree before submitting.
                                    </div>
                                 </div>
                              </div>
                              <button class="btn btn-primary" type="submit">Submit form</button>
                           </form>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Tooltips</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <form class="needs-validation" novalidate>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip01">First name</label>
                                    <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                                    <div class="valid-tooltip">
                                       Looks good!
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip02">Last name</label>
                                    <input type="text" class="form-control" id="validationTooltip02" value="Tech" required>
                                    <div class="valid-tooltip">
                                       Looks good!
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltipUsername">Username</label>
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                       </div>
                                       <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                       <div class="invalid-tooltip">
                                          Please choose a unique and valid username.
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip03">City</label>
                                    <input type="text" class="form-control" id="validationTooltip03" required>
                                    <div class="invalid-tooltip">
                                       Please provide a valid city.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">State</label>
                                    <select class="form-control" id="validationTooltip04" required>
                                       <option selected disabled value="">Choose...</option>
                                       <option>...</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip05">Zip</label>
                                    <input type="text" class="form-control" id="validationTooltip05" required>
                                    <div class="invalid-tooltip">
                                       Please provide a valid zip.
                                    </div>
                                 </div>
                              </div>
                              <button class="btn btn-primary" type="submit">Submit form</button>
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