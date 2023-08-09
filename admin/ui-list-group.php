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
                              <h4 class="card-title">List group</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>The most basic list group is an unordered list with list items and the proper classes. Build upon it with the options that follow, or with your own CSS as needed.</p>
                           <ul class="list-group">
                              <li class="list-group-item">Cras justo odio</li>
                              <li class="list-group-item">Dapibus ac facilisis in</li>
                              <li class="list-group-item">Morbi leo risus</li>
                              <li class="list-group-item">Porta ac consectetur ac</li>
                              <li class="list-group-item">Vestibulum at eros</li>
                           </ul>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Disabled items</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Add <code>.disabled</code> to a <code>.list-group-item</code> to make it <em>appear</em> disabled. Note that some elements with <code>.disabled</code> will also require custom JavaScript to fully disable their click events (e.g., links).</p>
                           <ul class="list-group">
                              <li class="list-group-item disabled" aria-disabled="true">Cras justo odio</li>
                              <li class="list-group-item">Dapibus ac facilisis in</li>
                              <li class="list-group-item">Morbi leo risus</li>
                              <li class="list-group-item">Porta ac consectetur ac</li>
                              <li class="list-group-item">Vestibulum at eros</li>
                           </ul>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Flush</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Add <code class="highlighter-rouge">.list-group-flush</code> to remove some borders and rounded corners to render list group items edge-to-edge in a parent container (e.g., cards).</p>
                           <ul class="list-group list-group-flush">
                              <li class="list-group-item">Cras justo odio</li>
                              <li class="list-group-item">Dapibus ac facilisis in</li>
                              <li class="list-group-item">Morbi leo risus</li>
                              <li class="list-group-item">Porta ac consectetur ac</li>
                              <li class="list-group-item">Vestibulum at eros</li>
                           </ul>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Contextual classes</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Use contextual classes to style list items with a stateful background and color.</p>
                           <ul class="list-group">
                              <li class="list-group-item">Dapibus ac facilisis in</li>
                              <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
                              <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
                              <li class="list-group-item list-group-item-success">A simple success list group item</li>
                              <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
                              <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
                              <li class="list-group-item list-group-item-info">A simple info list group item</li>
                              <li class="list-group-item list-group-item-light">A simple light list group item</li>
                              <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
                           </ul>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">With badges</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Add badges to any list group item to show unread counts, activity, and more with the help of some <a href="/docs/4.3/utilities/flex/">utilities</a>.</p>
                           <ul class="list-group">
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                 Cras justo odio
                                 <span class="badge badge-primary badge-pill">14</span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                 Dapibus ac facilisis in
                                 <span class="badge badge-success badge-pill">2</span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                 Morbi leo risus
                                 <span class="badge badge-danger badge-pill">1</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">With badges</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Add badges to any list group item to show unread counts, activity, and more with the help of some <a href="/docs/4.3/utilities/flex/">utilities</a>.</p>
                           <ul class="list-group">
                              <li class="list-group-item d-flex justify-content-between align-items-center iq-bg-primary">
                                 Cras justo odio
                                 <span class="badge badge-primary badge-pill">14</span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center iq-bg-success" >
                                 Dapibus ac facilisis in
                                 <span class="badge badge-success badge-pill">2</span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center iq-bg-danger">
                                 Morbi leo risus
                                 <span class="badge badge-danger badge-pill">1</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">List Active</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Add <code>.active</code> to a <code>.list-group-item</code> to indicate the current active selection.</p>
                           <ul class="list-group">
                              <li class="list-group-item active">Cras justo odio</li>
                              <li class="list-group-item">Dapibus ac facilisis in</li>
                              <li class="list-group-item">Morbi leo risus</li>
                              <li class="list-group-item">Porta ac consectetur ac</li>
                              <li class="list-group-item">Vestibulum at eros</li>
                           </ul>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Links and buttons</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Use <code>&lt;a&gt;</code>s or <code>&lt;button&gt;</code>s to create <em>actionable</em> list group items with hover, disabled, and active states by adding <code>.list-group-item-action</code>. We separate these pseudo-classes to ensure list groups made of non-interactive elements (like <code>&lt;li&gt;</code>s or <code>&lt;div&gt;</code>s) don’t provide a click or tap affordance.</p>
                           <p>Be sure to <strong>not use the standard <code>.btn</code> classes here</strong>.</p>
                           <div class="list-group">
                              <a href="#" class="list-group-item list-group-item-action active">
                              Cras justo odio
                              </a>
                              <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                              <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                              <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                              <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Horizontal</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Add <code>.list-group-horizontal</code> to change the layout of list group items from vertical to horizontal across all breakpoints. Alternatively, choose a responsive variant <code>.list-group-horizontal-{sm|md|lg|xl}</code> to make a list group horizontal starting at that breakpoint’s <code>min-width</code>. Currently <strong>horizontal list groups cannot be combined with flush list groups.</strong></p>
                           <p><strong>ProTip:</strong> Want equal-width list group items when horizontal? Add <code>.flex-fill</code> to each list group item.</p>
                           <ul class="list-group list-group-horizontal">
                              <li class="list-group-item">Cras justo odio</li>
                              <li class="list-group-item">Dapibus ac facilisis in</li>
                              <li class="list-group-item">Morbi leo risus</li>
                           </ul>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Contextual classes Action</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Use contextual classes to style list items with a stateful background and color.</p>
                           <div class="list-group">
                              <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                              <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>
                              <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group item</a>
                              <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
                              <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>
                              <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>
                              <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>
                              <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>
                              <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Custom content</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Add nearly any HTML within, even for linked list groups like the one below, with the help of <a href="/docs/4.3/utilities/flex/">flexbox utilities</a>.</p>
                           <div class="list-group">
                              <a href="#" class="list-group-item list-group-item-action active">
                                 <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1 text-white">List group item heading</h5>
                                    <small>3 days ago</small>
                                 </div>
                                 <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                 <small>Donec id elit non mi porta.</small>
                              </a>
                              <a href="#" class="list-group-item list-group-item-action">
                                 <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                    <small class="text-muted">3 days ago</small>
                                 </div>
                                 <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                 <small class="text-muted">Donec id elit non mi porta.</small>
                              </a>
                              <a href="#" class="list-group-item list-group-item-action">
                                 <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                    <small class="text-muted">3 days ago</small>
                                 </div>
                                 <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                 <small class="text-muted">Donec id elit non mi porta.</small>
                              </a>
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