<?php
include "header.php";
include "config.php";

?>

    <!-- Page Content  -->
    <div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <h6>Singer</h6>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-primary font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                              <h2><?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as count FROM `artist`"))['count']?></h2>
                              <div class="rounded-circle iq-card-icon iq-bg-primary ml-3"> <i class="ri-inbox-fill"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <h6>Music Album</h6>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-success font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                              <h2><?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as count FROM `artist`"))['count']?></h2>
                              <div class="rounded-circle iq-card-icon iq-bg-success ml-3"><i class="ri-price-tag-3-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <h6>Music Followers</h6>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-danger font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                              <h2><?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as count FROM `user_acc`"))['count']?></h2>
                              <div class="rounded-circle iq-card-icon iq-bg-danger ml-3"><i class="ri-radar-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <h6>Music Comments</h6>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-info font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                              <h2><?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as count FROM `review`"))['count']?></h2>
                              <div class="rounded-circle iq-card-icon iq-bg-info ml-3"><i class="ri-refund-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div id="progress-chart-2"></div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Best artist</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <div class="dropdown">
                              <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown">
                              <i class="ri-more-fill"></i>
                              </span>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1" style="">
                                 <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                 <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                 <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                 <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                 <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <ul class="list-inline p-0 m-0">
                           <li class="d-flex mb-3 align-items-center p-3 sell-list border border-primary rounded">
                              <div class="user-img img-fluid">
                                 <img src="images/user/01.jpg" alt="story-img" class="img-fluid rounded-circle avatar-40">
                              </div>
                              <div class="media-support-info ml-3">
                                 <h6>Pete Sariya</h6>
                                 <p class="mb-0 font-size-12">24 jan, 2020</p>
                              </div>
                              <div class="iq-card-header-toolbar d-flex align-items-center">
                                 <div class="badge badge-pill badge-primary">157</div>
                              </div>
                           </li>
                           <li class="d-flex mb-3 align-items-center p-3 sell-list border border-success rounded">
                              <div class="user-img img-fluid">
                                 <img src="images/user/02.jpg" alt="story-img" class="img-fluid rounded-circle avatar-40">
                              </div>
                              <div class="media-support-info ml-3">
                                 <h6>Anna Mull</h6>
                                 <p class="mb-0 font-size-12">15 feb, 2020</p>
                              </div>
                              <div class="iq-card-header-toolbar d-flex align-items-center">
                                 <div class="badge badge-pill badge-success">280</div>
                              </div>
                           </li>
                           <li class="d-flex align-items-center p-3 sell-list border border-danger rounded">
                              <div class="user-img img-fluid">
                                 <img src="images/user/03.jpg" alt="story-img" class="img-fluid rounded-circle avatar-40">
                              </div>
                              <div class="media-support-info ml-3">
                                 <h6>Alex john</h6>
                                 <p class="mb-0 font-size-12">05 March, 2020</p>
                              </div>
                              <div class="iq-card-header-toolbar d-flex align-items-center">
                                 <div class="badge badge-pill badge-danger">200</div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div id="progress-chart-1"></div>
                        <div class="table-responsive">
                              <table class="table mb-0 table-borderless">
                                 <thead>
                                    <tr>
                                       <th scope="col">Album</th>
                                       <th scope="col">Song No</th>
                                       <th scope="col">Review</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Like That</td>
                                       <td>#1525</td>
                                       <td>3.5<i class="ri-star-fill text-warning pl-2"></i></td>
                                    </tr>
                                    <tr>
                                       <td>Said Sum</td>
                                       <td>#1200</td>
                                       <td>4.5<i class="ri-star-fill text-warning pl-2"></i></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="iq-card">
                    <div class="iq-card-body">
                        <div class="d-flex align-items-top justify-content-between">
                           <div class="media align-items-center">
                               <div class="music-icon-2 text-center text-danger">
                                   <i class="fa fa-smile-o"></i>
                               </div>
                               <div class="iq-card-text pl-3">
                                   <h5>Positive Comment</h5>
                                   <div class="d-block line-height">
                                       <span class="font-size-11 text-warning">
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                       </span>                                             
                                    </div>
                               </div>
                           </div>
                           <p class="mb-1">50/100</p>
                        </div>
                    </div>
                </div>
                <div class="iq-card">
                    <div class="iq-card-body">
                        <div class="d-flex align-items-top justify-content-between">
                           <div class="media align-items-center">
                               <div class="music-icon-2 text-center text-danger">
                                   <i class="fa fa-smile-o"></i>
                               </div>
                               <div class="iq-card-text pl-3">
                                   <h5>Average Comment</h5>
                                   <div class="d-block line-height">
                                       <span class="font-size-11 text-warning">
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                       </span>                                             
                                    </div>
                               </div>
                           </div>
                           <p class="mb-1">25/100</p>
                        </div>
                    </div>
                </div>
                <div class="iq-card">
                    <div class="iq-card-body">
                        <div class="d-flex align-items-top justify-content-between">
                           <div class="media align-items-center">
                               <div class="music-icon-2 text-center text-danger">
                                   <i class="fa fa-meh-o"></i>
                               </div>
                              <div class="iq-card-text pl-3">
                                <h5>Negative Comment</h5>
                                <div class="d-block line-height">
                                    <span class="font-size-11 text-warning">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                    </span>                                             
                                 </div>
                              </div>
                           </div>
                           <p class="mb-1">05/100</p>
                        </div>
                    </div>
               </div>
               <div class="iq-card mb-0">
                  <div class="iq-card-body p-2">
                     <div id="menu-chart-demo3"></div>
                  </div>
               </div>
            </div>
               <div class="col-lg-4">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <h2 class="mb-0"><span class="counter" style="visibility: visible;">3450</span></h2>
                        <p class="mb-0">Music Followers</p>
                        <h6 class="mb-4"><span class="text-success mr-2">20%</span>Positive reviews</h6>
                        <a href="javascript:void();" class="btn btn-danger d-block mt-5 mb-4"> Add Song</a>
                        <div class="mt-2">
                           <div class="d-flex align-items-center justify-content-between">
                              <p class="mt-1 mb-2">Songs</p>
                              <h4 class="counter" style="visibility: visible;">81</h4> 
                           </div>
                           <div class="iq-progress-bar-linear d-inline-block w-100">
                              <div class="iq-progress-bar bg-primary-light iq-progress-bar-icon">
                                 <span class="bg-primary" data-percent="50"></span>
                              </div>
                           </div>
                        </div>
                        <div class="mt-2">
                           <div class="d-flex align-items-center justify-content-between">
                              <p class="mt-1 mb-2">Albems</p>
                              <h4 class="counter" style="visibility: visible;">124</h4> 
                           </div>
                           <div class="iq-progress-bar-linear d-inline-block w-100">
                              <div class="iq-progress-bar bg-success-light iq-progress-bar-icon">
                                 <span class="bg-success" data-percent="50"></span>
                              </div>
                           </div>
                        </div>
                        <div class="mt-2">
                           <div class="d-flex align-items-center justify-content-between">
                              <p class="mt-1 mb-2">Videos</p>
                              <h4 class="counter" style="visibility: visible;">74</h4> 
                           </div>
                           <div class="iq-progress-bar-linear d-inline-block w-100">
                              <div class="iq-progress-bar bg-danger-light iq-progress-bar-icon">
                                 <span class="bg-danger" data-percent="50"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Song Table</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <button class="btn btn-outline-primary">View All</button>
                        </div>
                     </div>
                     <div class="iq-card-body rec-pat">
                        <div class="table-responsive">
                           <table class="table table-striped mb-0 table-borderless">
                              <thead>
                                 <tr>
                                    <th>No</th>
                                    <th>Song</th>
                                    <th>Name</th>
                                    <th>File Size</th>
                                    <th>Date</th>
                                    <th>Review</th>
                                    <th>Status</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>1</td>
                                    <td>Life Is Good</td>
                                    <td>
                                       <div class="media align-items-center">
                                          <img src="images/user/01.jpg" class="img-fluid avatar-35 rounded" alt="image">
                                          <div class="media-body ml-3">
                                             <p class="mb-0">Pete Sariya</p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>20.04 Mb</td>
                                    <td>20/08/2020</td>
                                    <td>
                                       <div class="d-block line-height">
                                          <span class="font-size-11 text-warning">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                          </span>                                             
                                       </div>
                                    </td>
                                    <td>
                                       <span class="badge badge-success">Success</span>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>Harry Styles</td>
                                    <td>
                                       <div class="media align-items-center">
                                          <img src="images/user/02.jpg" class="img-fluid avatar-35 rounded" alt="image">
                                          <div class="media-body ml-3">
                                             <p class="mb-0">Cliff Hanger</p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>45.00 Mb</td>
                                    <td>20/08/2020</td>
                                    <td>
                                       <div class="d-block line-height">
                                          <span class="font-size-11 text-warning">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star-half-o"></i>
                                          </span>                                             
                                       </div>
                                    </td>
                                    <td>
                                       <span class="badge badge-danger">Pending</span>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>Die From A..</td>
                                    <td>
                                       <div class="media align-items-center">
                                          <img src="images/user/03.jpg" class="img-fluid avatar-35 rounded" alt="image">
                                          <div class="media-body ml-3">
                                             <p class="mb-0">Terry Aki</p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>26.08 Mb</td>
                                    <td>20/08/2020</td>
                                    <td>
                                       <div class="d-block line-height">
                                          <span class="font-size-11 text-warning">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star-half-o"></i>                                             
                                             <i class="fa fa-star-half-o"></i>
                                          </span>                                             
                                       </div>
                                    </td>
                                    <td>
                                       <span class="badge badge-success">Success</span>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                    <td>Life's A Mess</td>
                                    <td>
                                       <div class="media align-items-center">
                                          <img src="images/user/04.jpg" class="img-fluid avatar-35 rounded" alt="image">
                                          <div class="media-body ml-3">
                                             <p class="mb-0">Rock lai</p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>15.04 Mb</td>
                                    <td>20/08/2020</td>
                                    <td>
                                       <div class="d-block line-height">
                                          <span class="font-size-11 text-warning">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                          </span>                                             
                                       </div>
                                    </td>
                                    <td>
                                       <span class="badge badge-danger">Pending</span>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>5</td>
                                    <td>Rags2Riches</td>
                                    <td>
                                       <div class="media align-items-center">
                                          <img src="images/user/05.jpg" class="img-fluid avatar-35 rounded" alt="image">
                                          <div class="media-body ml-3">
                                             <p class="mb-0">Anna Mull</p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>10.03 Mb</td>
                                    <td>20/08/2020</td>
                                    <td>
                                       <div class="d-block line-height">
                                          <span class="font-size-11 text-warning">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                          </span>                                             
                                       </div>
                                    </td>
                                    <td>
                                       <span class="badge badge-success">Success</span>
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
      <div id="right-sidebar-scrollbar" class="iq-colorbox-inner">
         <div class="clearfix color-picker">
            <h3 class="iq-font-black">music Awesome Color</h3>
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
   <!-- lottie JavaScript -->
   <script src="js/lottie.js"></script>
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
   <!-- Raphael-min JavaScript -->
   <script src="js/raphael-min.js"></script>
   <!-- Morris JavaScript -->
   <script src="js/morris.js"></script>
   <!-- Morris min JavaScript -->
   <script src="js/morris.min.js"></script>
   <!-- Flatpicker Js -->
   <script src="js/flatpickr.js"></script>
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