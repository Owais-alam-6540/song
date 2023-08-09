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
                              <h4 class="card-title">Bootstrap Datatables</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Images in Bootstrap are made responsive with <code>.img-fluid</code>. <code>max-width: 100%;</code> and <code>height: auto;</code> are applied to the image so that it scales with the parent element.</p>
                           <div class="table-responsive">
                              <table id="datatable" class="table table-striped table-bordered" >
                                 <thead>
                                    <tr>
                                       <th>Name</th>
                                       <th>Position</th>
                                       <th>Office</th>
                                       <th>Age</th>
                                       <th>Start date</th>
                                       <th>Salary</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Tiger Nixon</td>
                                       <td>System Architect</td>
                                       <td>Edinburgh</td>
                                       <td>61</td>
                                       <td>2011/04/25</td>
                                       <td>$320,800</td>
                                    </tr>
                                    <tr>
                                       <td>Garrett Winters</td>
                                       <td>Accountant</td>
                                       <td>Tokyo</td>
                                       <td>63</td>
                                       <td>2011/07/25</td>
                                       <td>$170,750</td>
                                    </tr>
                                    <tr>
                                       <td>Ashton Cox</td>
                                       <td>Junior Technical Author</td>
                                       <td>San Francisco</td>
                                       <td>66</td>
                                       <td>2009/01/12</td>
                                       <td>$86,000</td>
                                    </tr>
                                    <tr>
                                       <td>Cedric Kelly</td>
                                       <td>Senior Javascript Developer</td>
                                       <td>Edinburgh</td>
                                       <td>22</td>
                                       <td>2012/03/29</td>
                                       <td>$433,060</td>
                                    </tr>
                                    <tr>
                                       <td>Airi Satou</td>
                                       <td>Accountant</td>
                                       <td>Tokyo</td>
                                       <td>33</td>
                                       <td>2008/11/28</td>
                                       <td>$162,700</td>
                                    </tr>
                                    <tr>
                                       <td>Brielle Williamson</td>
                                       <td>Integration Specialist</td>
                                       <td>New York</td>
                                       <td>61</td>
                                       <td>2012/12/02</td>
                                       <td>$372,000</td>
                                    </tr>
                                    <tr>
                                       <td>Herrod Chandler</td>
                                       <td>Sales Assistant</td>
                                       <td>San Francisco</td>
                                       <td>59</td>
                                       <td>2012/08/06</td>
                                       <td>$137,500</td>
                                    </tr>
                                    <tr>
                                       <td>Rhona Davidson</td>
                                       <td>Integration Specialist</td>
                                       <td>Tokyo</td>
                                       <td>55</td>
                                       <td>2010/10/14</td>
                                       <td>$327,900</td>
                                    </tr>
                                    <tr>
                                       <td>Colleen Hurst</td>
                                       <td>Javascript Developer</td>
                                       <td>San Francisco</td>
                                       <td>39</td>
                                       <td>2009/09/15</td>
                                       <td>$205,500</td>
                                    </tr>
                                    <tr>
                                       <td>Sonya Frost</td>
                                       <td>Software Engineer</td>
                                       <td>Edinburgh</td>
                                       <td>23</td>
                                       <td>2008/12/13</td>
                                       <td>$103,600</td>
                                    </tr>
                                    <tr>
                                       <td>Jena Gaines</td>
                                       <td>Office Manager</td>
                                       <td>London</td>
                                       <td>30</td>
                                       <td>2008/12/19</td>
                                       <td>$90,560</td>
                                    </tr>
                                    <tr>
                                       <td>Quinn Flynn</td>
                                       <td>Support Lead</td>
                                       <td>Edinburgh</td>
                                       <td>22</td>
                                       <td>2013/03/03</td>
                                       <td>$342,000</td>
                                    </tr>
                                    <tr>
                                       <td>Charde Marshall</td>
                                       <td>Regional Director</td>
                                       <td>San Francisco</td>
                                       <td>36</td>
                                       <td>2008/10/16</td>
                                       <td>$470,600</td>
                                    </tr>
                                    <tr>
                                       <td>Haley Kennedy</td>
                                       <td>Senior Marketing Designer</td>
                                       <td>London</td>
                                       <td>43</td>
                                       <td>2012/12/18</td>
                                       <td>$313,500</td>
                                    </tr>
                                    <tr>
                                       <td>Tatyana Fitzpatrick</td>
                                       <td>Regional Director</td>
                                       <td>London</td>
                                       <td>19</td>
                                       <td>2010/03/17</td>
                                       <td>$385,750</td>
                                    </tr>
                                    <tr>
                                       <td>Michael Silva</td>
                                       <td>Marketing Designer</td>
                                       <td>London</td>
                                       <td>66</td>
                                       <td>2012/11/27</td>
                                       <td>$198,500</td>
                                    </tr>
                                    <tr>
                                       <td>Paul Byrd</td>
                                       <td>Chief Financial Officer (CFO)</td>
                                       <td>New York</td>
                                       <td>64</td>
                                       <td>2010/06/09</td>
                                       <td>$725,000</td>
                                    </tr>
                                    <tr>
                                       <td>Gloria Little</td>
                                       <td>Systems Administrator</td>
                                       <td>New York</td>
                                       <td>59</td>
                                       <td>2009/04/10</td>
                                       <td>$237,500</td>
                                    </tr>
                                    <tr>
                                       <td>Bradley Greer</td>
                                       <td>Software Engineer</td>
                                       <td>London</td>
                                       <td>41</td>
                                       <td>2012/10/13</td>
                                       <td>$132,000</td>
                                    </tr>
                                    <tr>
                                       <td>Dai Rios</td>
                                       <td>Personnel Lead</td>
                                       <td>Edinburgh</td>
                                       <td>35</td>
                                       <td>2012/09/26</td>
                                       <td>$217,500</td>
                                    </tr>
                                    <tr>
                                       <td>Jenette Caldwell</td>
                                       <td>Development Lead</td>
                                       <td>New York</td>
                                       <td>30</td>
                                       <td>2011/09/03</td>
                                       <td>$345,000</td>
                                    </tr>
                                    <tr>
                                       <td>Yuri Berry</td>
                                       <td>Chief Marketing Officer (CMO)</td>
                                       <td>New York</td>
                                       <td>40</td>
                                       <td>2009/06/25</td>
                                       <td>$675,000</td>
                                    </tr>
                                    <tr>
                                       <td>Caesar Vance</td>
                                       <td>Pre-Sales Support</td>
                                       <td>New York</td>
                                       <td>21</td>
                                       <td>2011/12/12</td>
                                       <td>$106,450</td>
                                    </tr>
                                    <tr>
                                       <td>Doris Wilder</td>
                                       <td>Sales Assistant</td>
                                       <td>Sydney</td>
                                       <td>23</td>
                                       <td>2010/09/20</td>
                                       <td>$85,600</td>
                                    </tr>
                                    <tr>
                                       <td>Angelica Ramos</td>
                                       <td>Chief Executive Officer (CEO)</td>
                                       <td>London</td>
                                       <td>47</td>
                                       <td>2009/10/09</td>
                                       <td>$1,200,000</td>
                                    </tr>
                                    <tr>
                                       <td>Gavin Joyce</td>
                                       <td>Developer</td>
                                       <td>Edinburgh</td>
                                       <td>42</td>
                                       <td>2010/12/22</td>
                                       <td>$92,575</td>
                                    </tr>
                                    <tr>
                                       <td>Jennifer Chang</td>
                                       <td>Regional Director</td>
                                       <td>Singapore</td>
                                       <td>28</td>
                                       <td>2010/11/14</td>
                                       <td>$357,650</td>
                                    </tr>
                                    <tr>
                                       <td>Brenden Wagner</td>
                                       <td>Software Engineer</td>
                                       <td>San Francisco</td>
                                       <td>28</td>
                                       <td>2011/06/07</td>
                                       <td>$206,850</td>
                                    </tr>
                                    <tr>
                                       <td>Fiona Green</td>
                                       <td>Chief Operating Officer (COO)</td>
                                       <td>San Francisco</td>
                                       <td>48</td>
                                       <td>2010/03/11</td>
                                       <td>$850,000</td>
                                    </tr>
                                    <tr>
                                       <td>Shou Itou</td>
                                       <td>Regional Marketing</td>
                                       <td>Tokyo</td>
                                       <td>20</td>
                                       <td>2011/08/14</td>
                                       <td>$163,000</td>
                                    </tr>
                                    <tr>
                                       <td>Michelle House</td>
                                       <td>Integration Specialist</td>
                                       <td>Sydney</td>
                                       <td>37</td>
                                       <td>2011/06/02</td>
                                       <td>$95,400</td>
                                    </tr>
                                    <tr>
                                       <td>Suki Burks</td>
                                       <td>Developer</td>
                                       <td>London</td>
                                       <td>53</td>
                                       <td>2009/10/22</td>
                                       <td>$114,500</td>
                                    </tr>
                                    <tr>
                                       <td>Prescott Bartlett</td>
                                       <td>Technical Author</td>
                                       <td>London</td>
                                       <td>27</td>
                                       <td>2011/05/07</td>
                                       <td>$145,000</td>
                                    </tr>
                                    <tr>
                                       <td>Gavin Cortez</td>
                                       <td>Team Leader</td>
                                       <td>San Francisco</td>
                                       <td>22</td>
                                       <td>2008/10/26</td>
                                       <td>$235,500</td>
                                    </tr>
                                    <tr>
                                       <td>Martena Mccray</td>
                                       <td>Post-Sales support</td>
                                       <td>Edinburgh</td>
                                       <td>46</td>
                                       <td>2011/03/09</td>
                                       <td>$324,050</td>
                                    </tr>
                                    <tr>
                                       <td>Unity Butler</td>
                                       <td>Marketing Designer</td>
                                       <td>San Francisco</td>
                                       <td>47</td>
                                       <td>2009/12/09</td>
                                       <td>$85,675</td>
                                    </tr>
                                    <tr>
                                       <td>Howard Hatfield</td>
                                       <td>Office Manager</td>
                                       <td>San Francisco</td>
                                       <td>51</td>
                                       <td>2008/12/16</td>
                                       <td>$164,500</td>
                                    </tr>
                                    <tr>
                                       <td>Hope Fuentes</td>
                                       <td>Secretary</td>
                                       <td>San Francisco</td>
                                       <td>41</td>
                                       <td>2010/02/12</td>
                                       <td>$109,850</td>
                                    </tr>
                                    <tr>
                                       <td>Vivian Harrell</td>
                                       <td>Financial Controller</td>
                                       <td>San Francisco</td>
                                       <td>62</td>
                                       <td>2009/02/14</td>
                                       <td>$452,500</td>
                                    </tr>
                                    <tr>
                                       <td>Timothy Mooney</td>
                                       <td>Office Manager</td>
                                       <td>London</td>
                                       <td>37</td>
                                       <td>2008/12/11</td>
                                       <td>$136,200</td>
                                    </tr>
                                    <tr>
                                       <td>Jackson Bradshaw</td>
                                       <td>Director</td>
                                       <td>New York</td>
                                       <td>65</td>
                                       <td>2008/09/26</td>
                                       <td>$645,750</td>
                                    </tr>
                                    <tr>
                                       <td>Olivia Liang</td>
                                       <td>Support Engineer</td>
                                       <td>Singapore</td>
                                       <td>64</td>
                                       <td>2011/02/03</td>
                                       <td>$234,500</td>
                                    </tr>
                                    <tr>
                                       <td>Bruno Nash</td>
                                       <td>Software Engineer</td>
                                       <td>London</td>
                                       <td>38</td>
                                       <td>2011/05/03</td>
                                       <td>$163,500</td>
                                    </tr>
                                    <tr>
                                       <td>Sakura Yamamoto</td>
                                       <td>Support Engineer</td>
                                       <td>Tokyo</td>
                                       <td>37</td>
                                       <td>2009/08/19</td>
                                       <td>$139,575</td>
                                    </tr>
                                    <tr>
                                       <td>Thor Walton</td>
                                       <td>Developer</td>
                                       <td>New York</td>
                                       <td>61</td>
                                       <td>2013/08/11</td>
                                       <td>$98,540</td>
                                    </tr>
                                    <tr>
                                       <td>Finn Camacho</td>
                                       <td>Support Engineer</td>
                                       <td>San Francisco</td>
                                       <td>47</td>
                                       <td>2009/07/07</td>
                                       <td>$87,500</td>
                                    </tr>
                                    <tr>
                                       <td>Serge Baldwin</td>
                                       <td>Data Coordinator</td>
                                       <td>Singapore</td>
                                       <td>64</td>
                                       <td>2012/04/09</td>
                                       <td>$138,575</td>
                                    </tr>
                                    <tr>
                                       <td>Zenaida Frank</td>
                                       <td>Software Engineer</td>
                                       <td>New York</td>
                                       <td>63</td>
                                       <td>2010/01/04</td>
                                       <td>$125,250</td>
                                    </tr>
                                    <tr>
                                       <td>Zorita Serrano</td>
                                       <td>Software Engineer</td>
                                       <td>San Francisco</td>
                                       <td>56</td>
                                       <td>2012/06/01</td>
                                       <td>$115,000</td>
                                    </tr>
                                    <tr>
                                       <td>Jennifer Acosta</td>
                                       <td>Junior Javascript Developer</td>
                                       <td>Edinburgh</td>
                                       <td>43</td>
                                       <td>2013/02/01</td>
                                       <td>$75,650</td>
                                    </tr>
                                    <tr>
                                       <td>Cara Stevens</td>
                                       <td>Sales Assistant</td>
                                       <td>New York</td>
                                       <td>46</td>
                                       <td>2011/12/06</td>
                                       <td>$145,600</td>
                                    </tr>
                                    <tr>
                                       <td>Hermione Butler</td>
                                       <td>Regional Director</td>
                                       <td>London</td>
                                       <td>47</td>
                                       <td>2011/03/21</td>
                                       <td>$356,250</td>
                                    </tr>
                                    <tr>
                                       <td>Lael Greer</td>
                                       <td>Systems Administrator</td>
                                       <td>London</td>
                                       <td>21</td>
                                       <td>2009/02/27</td>
                                       <td>$103,500</td>
                                    </tr>
                                    <tr>
                                       <td>Jonas Alexander</td>
                                       <td>Developer</td>
                                       <td>San Francisco</td>
                                       <td>30</td>
                                       <td>2010/07/14</td>
                                       <td>$86,500</td>
                                    </tr>
                                    <tr>
                                       <td>Shad Decker</td>
                                       <td>Regional Director</td>
                                       <td>Edinburgh</td>
                                       <td>51</td>
                                       <td>2008/11/13</td>
                                       <td>$183,000</td>
                                    </tr>
                                    <tr>
                                       <td>Michael Bruce</td>
                                       <td>Javascript Developer</td>
                                       <td>Singapore</td>
                                       <td>29</td>
                                       <td>2011/06/27</td>
                                       <td>$183,000</td>
                                    </tr>
                                    <tr>
                                       <td>Donna Snider</td>
                                       <td>Customer Support</td>
                                       <td>New York</td>
                                       <td>27</td>
                                       <td>2011/01/25</td>
                                       <td>$112,000</td>
                                    </tr>
                                 </tbody>
                                 <tfoot>
                                    <tr>
                                       <th>Name</th>
                                       <th>Position</th>
                                       <th>Office</th>
                                       <th>Age</th>
                                       <th>Start date</th>
                                       <th>Salary</th>
                                    </tr>
                                 </tfoot>
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