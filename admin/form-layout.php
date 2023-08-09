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
                              <h4 class="card-title">Basic Form</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <form>
                              <div class="form-group">
                                 <label for="email">Email address:</label>
                                 <input type="email" class="form-control" id="email1">
                              </div>
                              <div class="form-group">
                                 <label for="pwd">Password:</label>
                                 <input type="password" class="form-control" id="pwd">
                              </div>
                              <div class="checkbox mb-3">
                                 <label><input type="checkbox"> Remember me</label>
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                              <button type="submit" class="btn iq-bg-danger">Cancel</button>
                           </form>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Form Grid</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <form>
                              <div class="row">
                                 <div class="col">
                                    <input type="text" class="form-control" placeholder="First name">
                                 </div>
                                 <div class="col">
                                    <input type="text" class="form-control" placeholder="Last name">
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Input</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <form>
                              <div class="form-group">
                                 <label for="exampleInputText1">Input Text </label>
                                 <input type="text" class="form-control" id="exampleInputText1" value="Mark Tech" placeholder="Enter Name">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail3">Email Input</label>
                                 <input type="email" class="form-control" id="exampleInputEmail3" value="markTech@gmail.com" placeholder="Enter Email">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputurl">Url Input</label>
                                 <input type="url" class="form-control" id="exampleInputurl" value="https://getbootstrap.com" placeholder="Enter Url">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputphone">Teliphone Input</label>
                                 <input type="tel" class="form-control" id="exampleInputphone" value="1-(555)-555-5555">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputNumber1">Number Input</label>
                                 <input type="number" class="form-control" id="exampleInputNumber1" value="2356">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputPassword3">Password Input</label>
                                 <input type="password" class="form-control" id="exampleInputPassword3" value="markTech123" placeholder="Enter Password">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputdate">Date Input</label>
                                 <input type="date" class="form-control" id="exampleInputdate" value="2019-12-18">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputmonth">Month Input</label>
                                 <input type="month" class="form-control" id="exampleInputmonth" value="2019-12">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputweek">Week Input</label>
                                 <input type="week" class="form-control" id="exampleInputweek" value="2019-W46">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputtime">Time Input</label>
                                 <input type="time" class="form-control" id="exampleInputtime" value="13:45">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputdatetime">Date and Time Input</label>
                                 <input type="datetime-local" class="form-control" id="exampleInputdatetime" value="2019-12-19T13:45:00">
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlTextarea1">Example textarea</label>
                                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                              <button type="submit" class="btn iq-bg-danger">Cancel</button>
                           </form>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Input Size</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <form>
                              <div class="form-group">
                                 <label for="colFormLabelSm">Small</label>
                                 <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="form-control-sm">
                              </div>
                              <div class="form-group">
                                 <label for="colFormLabel">Default</label>
                                 <input type="email" class="form-control" id="colFormLabel" placeholder="form-control">
                              </div>
                              <div class="form-group mb-0">
                                 <label for="colFormLabelLg" class="pb-0">Large</label>
                                 <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="form-control-lg">
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Horizontal Form</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <form class="form-horizontal" action="/action_page.php">
                              <div class="form-group row">
                                 <label class="control-label col-sm-2 align-self-center mb-0" for="email">Email:</label>
                                 <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Enter Your  email">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="control-label col-sm-2 align-self-center mb-0" for="pwd1">Password:</label>
                                 <div class="col-sm-10">
                                    <input type="password" class="form-control" id="pwd1" placeholder="Enter Your password">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="checkbox">
                                    <label><input type="checkbox"> Remember me</label>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <button type="submit" class="btn btn-primary">Submit</button>
                                 <button type="submit" class="btn iq-bg-danger">Cancel</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Form row</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <form>
                              <div class="form-row">
                                 <div class="col">
                                    <input type="text" class="form-control" placeholder="First name">
                                 </div>
                                 <div class="col">
                                    <input type="text" class="form-control" placeholder="Last name">
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Input</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <form>
                              <div class="form-group">
                                 <label for="exampleInputDisabled1">Disabled Input</label>
                                 <input type="text" class="form-control" id="exampleInputDisabled1" disabled="" value="Mark Tech">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputPlaceholder">Placeholder</label>
                                 <input type="text" class="form-control" id="exampleInputPlaceholder" placeholder="This is Placeholder">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputReadonly">Readonly</label>
                                 <input type="text" class="form-control" id="exampleInputReadonly" readonly="" value="Mark Tech">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputcolor">Input Color </label>
                                 <input type="color" class="form-control" id="exampleInputcolor" value="#ff4545">
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Select Input</label>
                                 <select class="form-control" id="exampleFormControlSelect1">
                                    <option selected="" disabled="">Select your age</option>
                                    <option>0-18</option>
                                    <option>18-26</option>
                                    <option>26-46</option>
                                    <option>46-60</option>
                                    <option>Above 60</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect2">Example multiple select</label>
                                 <select multiple="" class="form-control" id="exampleFormControlSelect2">
                                    <option>select-1</option>
                                    <option>select-2</option>
                                    <option>select-3</option>
                                    <option>select-4</option>
                                    <option>select-5</option>
                                    <option>select-6</option>
                                    <option>select-7</option>
                                    <option>select-8</option>
                                 </select>
                              </div>
                              <div class="form-groupp">
                                 <label for="customRange1">Range Input</label>
                                 <input type="range" class="custom-range" id="customRange1">
                              </div>
                              <div class="form-group">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Default checkbox</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" Checked="">
                                    <label class="custom-control-label" for="customCheck2">Checked</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3"  disabled="">
                                    <label class="custom-control-label" for="customCheck3">Disabled checkbox</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4"  checked="" disabled="">
                                    <label class="custom-control-label" for="customCheck4">Disabled checkbox</label>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                    <label class="custom-control-label" for="customCheck5">Default checkbox</label>
                                 </div>
                                 <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6" Checked="">
                                    <label class="custom-control-label" for="customCheck6">Checked</label>
                                 </div>
                                 <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck7"  disabled="">
                                    <label class="custom-control-label" for="customCheck7">Disabled checkbox</label>
                                 </div>
                                 <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck8"  checked="" disabled="">
                                    <label class="custom-control-label" for="customCheck8">Disabled checkbox</label>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="form-check">
                                    <div class="custom-control custom-radio">
                                       <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                       <label class="custom-control-label" for="customRadio1"> Default radio</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                       <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                       <label class="custom-control-label" for="customRadio2"> Default radio</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                       <input type="radio" id="customRadio3" name="customRadio3" class="custom-control-input" checked="">
                                       <label class="custom-control-label" for="customRadio3"> Selected radio</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                       <input type="radio" id="customRadio4" name="customRadio4" class="custom-control-input" disabled="">
                                       <label class="custom-control-label" for="customRadio4"> disabled radio</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                       <input type="radio" id="customRadio5" name="customRadio5" class="custom-control-input" disabled="" checked="">
                                       <label class="custom-control-label" for="customRadio5"> Selected and  disabled radio</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio6" name="customRadio1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio6"> Default radio</label>
                                 </div>
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio7"> Default radio</label>
                                 </div>
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio8" name="customRadio6" class="custom-control-input" checked="">
                                    <label class="custom-control-label" for="customRadio8"> Selected radio</label>
                                 </div>
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio9" name="customRadio7" class="custom-control-input" disabled="">
                                    <label class="custom-control-label" for="customRadio9"> disabled radio</label>
                                 </div>
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio10" name="customRadio8" class="custom-control-input" disabled="" checked="">
                                    <label class="custom-control-label" for="customRadio10"> Selected and  disabled radio</label>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                                 </div>
                                 <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch2" checked="">
                                    <label class="custom-control-label" for="customSwitch2">Toggle this switch element</label>
                                 </div>
                                 <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" disabled id="customSwitch3">
                                    <label class="custom-control-label" for="customSwitch3">Disabled switch element</label>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlFile1">Example file input</label>
                                 <input type="file" class="form-control-file" id="exampleFormControlFile1">
                              </div>
                              <div class="form-group">
                                 <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                 </div>
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                              <button type="submit" class="btn iq-bg-danger">Cancel</button>
                           </form>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Select Size</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <div class="form-group">
                              <label>Small</label>
                              <select class="form-control form-control-sm mb-3">
                                 <option selected="">Open this select menu</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <label>Default</label>
                              <select class="form-control mb-3">
                                 <option selected="">Open this select menu</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <label>Large</label>
                              <select class="form-control form-control-lg">
                                 <option selected="">Open this select menu</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                              </select>
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