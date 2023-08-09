
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
                              <h4 class="card-title">Grid options</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table..</p>
                           <table class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th></th>
                                    <th class="text-center">
                                       Extra small<br>
                                       <small>&lt;576px</small>
                                    </th>
                                    <th class="text-center">
                                       Small<br>
                                       <small>≥576px</small>
                                    </th>
                                    <th class="text-center">
                                       Medium<br>
                                       <small>≥768px</small>
                                    </th>
                                    <th class="text-center">
                                       Large<br>
                                       <small>≥992px</small>
                                    </th>
                                    <th class="text-center">
                                       Extra large<br>
                                       <small>≥1200px</small>
                                    </th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <th class="text-nowrap text-left" scope="row">Max container width</th>
                                    <td>None (auto)</td>
                                    <td>540px</td>
                                    <td>720px</td>
                                    <td>960px</td>
                                    <td>1140px</td>
                                 </tr>
                                 <tr>
                                    <th class="text-nowrap text-left" scope="row">Class prefix</th>
                                    <td><code>.col-</code></td>
                                    <td><code>.col-sm-</code></td>
                                    <td><code>.col-md-</code></td>
                                    <td><code>.col-lg-</code></td>
                                    <td><code>.col-xl-</code></td>
                                 </tr>
                                 <tr>
                                    <th class="text-nowrap text-left" scope="row"># of columns</th>
                                    <td colspan="5" class="text-left" >12</td>
                                 </tr>
                                 <tr>
                                    <th class="text-nowrap text-left" scope="row">Gutter width</th>
                                    <td colspan="5" class="text-left">30px (15px on each side of a column)</td>
                                 </tr>
                                 <tr>
                                    <th class="text-nowrap text-left" scope="row">Nestable</th>
                                    <td colspan="5" class="text-left">Yes</td>
                                 </tr>
                                 <tr>
                                    <th class="text-nowrap text-left" scope="row">Column ordering</th>
                                    <td colspan="5" class="text-left">Yes</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Equal-width</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>For example, here are two grid layouts that apply to every device and viewport, from <code>xs</code> to <code>xl</code>. Add any number of unit-less classes for each breakpoint you need and every column will be the same width.</p>
                           <div class="iq-example-row">
                              <div class="container-fluid">
                                 <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                                 <div class="row mb-3">
                                    <div class="col-12 col-md-8">.col-12 .col-md-8</div>
                                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                 </div>
                                 <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                                 <div class="row mb-3">
                                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                 </div>
                                 <!-- Columns are always 50% wide, on mobile and desktop -->
                                 <div class="row">
                                    <div class="col-6">.col-6</div>
                                    <div class="col-6">.col-6</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Setting one column width</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Auto-layout for flexbox grid columns also means you can set the width of one column and have the sibling columns automatically resize around it. You may use predefined grid classes (as shown below), grid mixins, or inline widths. Note that the other columns will resize no matter the width of the center column.</p>
                           <div class="iq-example-row">
                              <div class="container-fluid">
                                 <div class="row mb-3">
                                    <div class="col">
                                       1 of 3
                                    </div>
                                    <div class="col-6">
                                       2 of 3 (wider)
                                    </div>
                                    <div class="col">
                                       3 of 3
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col">
                                       1 of 3
                                    </div>
                                    <div class="col-5">
                                       2 of 3 (wider)
                                    </div>
                                    <div class="col">
                                       3 of 3
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Variable width content</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Use <code>col-{breakpoint}-auto</code> classes to size columns based on the natural width of their content.</p>
                           <div class="iq-example-row">
                              <div class="container-fluid">
                                 <div class="row justify-content-md-center mb-3">
                                    <div class="col col-lg-2">
                                       1 of 3
                                    </div>
                                    <div class="col-md-auto">
                                       Variable width content
                                    </div>
                                    <div class="col col-lg-2">
                                       3 of 3
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col">
                                       1 of 3
                                    </div>
                                    <div class="col-md-auto">
                                       Variable width content
                                    </div>
                                    <div class="col col-lg-2">
                                       3 of 3
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Equal-width multi-row</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Create equal-width columns that span multiple rows by inserting a <code>.w-100</code> where you want the columns to break to a new line. Make the breaks responsive by mixing the <code>.w-100</code> with some <a href="https://getbootstrap.com/" target="_blank">responsive display utilities</a>.</p>
                           <div class="iq-example-row">
                              <div class="container-fluid">
                                 <div class="row">
                                    <div class="col">col</div>
                                    <div class="col">col</div>
                                    <div class="w-100"></div>
                                    <div class="col">col</div>
                                    <div class="col">col</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Responsive classes</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Bootstrap’s grid includes five tiers of predefined classes for building complex responsive layouts. Customize the size of your columns on extra small, small, medium, large, or extra large devices however you see fit.</p>
                           <h4 class="card-title">All breakpoints</h4>
                           <p>For grids that are the same from the smallest of devices to the largest, use the <code>.col</code> and <code>.col-*</code> classes. Specify a numbered class when you need a particularly sized column; otherwise, feel free to stick to <code>.col</code>.</p>
                           <div class="iq-example-row">
                              <div class="container-fluid">
                                 <div class="row mb-3">
                                    <div class="col">col</div>
                                    <div class="col">col</div>
                                    <div class="col">col</div>
                                    <div class="col">col</div>
                                 </div>
                                 <div class="row">
                                    <div class="col-8">col-8</div>
                                    <div class="col-4">col-4</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Stacked to horizontal</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Using a single set of <code>.col-sm-*</code> classes, you can create a basic grid system that starts out stacked and becomes horizontal at the small breakpoint (<code>sm</code>).</p>
                           <div class="iq-example-row">
                              <div class="container-fluid">
                                 <div class="row mb-3">
                                    <div class="col-sm-8">col-sm-8</div>
                                    <div class="col-sm-4">col-sm-4</div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm">col-sm</div>
                                    <div class="col-sm">col-sm</div>
                                    <div class="col-sm">col-sm</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Mix and match</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Don’t want your columns to simply stack in some grid tiers? Use a combination of different classes for each tier as needed. See the example below for a better idea of how it all works.</p>
                           <div class="iq-example-row">
                              <div class="container-fluid">
                                 <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                                 <div class="row mb-3">
                                    <div class="col-12 col-md-8">.col-12 .col-md-8</div>
                                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                 </div>
                                 <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                                 <div class="row mb-3">
                                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                 </div>
                                 <!-- Columns are always 50% wide, on mobile and desktop -->
                                 <div class="row">
                                    <div class="col-6">.col-6</div>
                                    <div class="col-6">.col-6</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Gutters</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Gutters can be responsively adjusted by breakpoint-specific padding and negative margin utility classes. To change the gutters in a given row, pair a negative margin utility on the <code>.row</code> and matching padding utilities on the <code>.col</code>s. The <code>.container</code> or <code>.container-fluid</code> parent may need to be adjusted too to avoid unwanted overflow, using again matching padding utility.</p>
                           <p>Here’s an example of customizing the Bootstrap grid at the large (<code>lg</code>) breakpoint and above. We’ve increased the <code>.col</code> padding with <code>.px-lg-5</code>, counteracted that with <code>.mx-lg-n5</code> on the parent <code>.row</code> and then adjusted the <code>.container</code> wrapper with <code>.px-lg-5</code>.</p>
                           <div class="iq-example-row">
                              <div class="container-fluid px-lg-5">
                                 <div class="row mx-lg-n5">
                                    <div class="col py-3 px-lg-5 border bg-light">Custom column padding</div>
                                    <div class="col py-3 px-lg-5 border bg-light">Custom column padding</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Alignment</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Use flexbox alignment utilities to vertically and horizontally align columns. <strong>Internet Explorer 10-11 do not support vertical alignment of flex items when the flex container has a <code>min-height</code> as shown below.</strong> <a href="https://github.com/philipwalton/flexbugs#flexbug-3">See Flexbugs #3 for more details.</a></p>
                           <h4 class="mb-3">Vertical alignment</h4>
                           <div class="iq-example-row iq-example-row-flex-cols">
                              <div class="container-fluid">
                                 <div class="row align-items-start">
                                    <div class="col">
                                       One of three columns
                                    </div>
                                    <div class="col">
                                       One of three columns
                                    </div>
                                    <div class="col">
                                       One of three columns
                                    </div>
                                 </div>
                                 <div class="row align-items-center">
                                    <div class="col">
                                       One of three columns
                                    </div>
                                    <div class="col">
                                       One of three columns
                                    </div>
                                    <div class="col">
                                       One of three columns
                                    </div>
                                 </div>
                                 <div class="row align-items-end">
                                    <div class="col">
                                       One of three columns
                                    </div>
                                    <div class="col">
                                       One of three columns
                                    </div>
                                    <div class="col">
                                       One of three columns
                                    </div>
                                 </div>
                              </div>
                              <div class="container-fluid">
                                 <div class="row">
                                    <div class="col align-self-start">
                                       One of three columns
                                    </div>
                                    <div class="col align-self-center">
                                       One of three columns
                                    </div>
                                    <div class="col align-self-end">
                                       One of three columns
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Horizontal alignment</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Create equal-width columns that span multiple rows by inserting a <code>.w-100</code> where you want the columns to break to a new line. Make the breaks responsive by mixing the <code>.w-100</code> with some <a href="/docs/4.3/utilities/display/">responsive display utilities</a>.</p>
                           <div class="iq-example-row">
                              <div class="container-fluid">
                                 <div class="row justify-content-start mb-3">
                                    <div class="col-4">
                                       One of two columns
                                    </div>
                                    <div class="col-4">
                                       One of two columns
                                    </div>
                                 </div>
                                 <div class="row justify-content-center mb-3">
                                    <div class="col-4">
                                       One of two columns
                                    </div>
                                    <div class="col-4">
                                       One of two columns
                                    </div>
                                 </div>
                                 <div class="row justify-content-end mb-3">
                                    <div class="col-4">
                                       One of two columns
                                    </div>
                                    <div class="col-4">
                                       One of two columns
                                    </div>
                                 </div>
                                 <div class="row justify-content-around mb-3">
                                    <div class="col-4">
                                       One of two columns
                                    </div>
                                    <div class="col-4">
                                       One of two columns
                                    </div>
                                 </div>
                                 <div class="row justify-content-between">
                                    <div class="col-4">
                                       One of two columns
                                    </div>
                                    <div class="col-4">
                                       One of two columns
                                    </div>
                                 </div>
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
<!-- Music js -->
   <script src="js/music-player.js"></script>
   <!-- Music-player js -->
   <script src="js/music-player-dashboard.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
   </body>
</html>