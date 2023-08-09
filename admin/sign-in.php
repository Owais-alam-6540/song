<?php
include 'config.php';
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    header("location:index.php");
    exit;
}

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pass"]; 

    $paque = "SELECT `Password` FROM `admin_acc` WHERE  `Admin_Name`= '{$name}'";
    $res = mysqli_query($conn,$paque);
    $passwordfetch = mysqli_fetch_assoc($res);

    $query = "SELECT * FROM `admin_acc` where `Admin_Name`= '{$name}' AND `Admin_Email`= '{$email}'";
    $result = mysqli_query($conn,$query);
    
    if(mysqli_num_rows($result) == 1){
        if(password_verify($password,$passwordfetch['Password'])){
            echo "Login";
            $_SESSION['login'] = true;
            header("location:index.php");
        }else{
            echo "Error";
        }
    }else{
    echo"<script>
    alert('ERROR')
</script>";
    };
};
?>
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Muzik - Responsive Bootstrap 4 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Sign in Start -->
      <section class="sign-in-page">
         <div class="container">
            <div class="row justify-content-center align-items-center height-self-center">
               <div class="col-md-6 col-sm-12 col-12 align-self-center">
                  <div class="sign-user_card ">
                     <div class="d-flex justify-content-center">
                        <!-- <div class="sign-user_logo">
                           <img src="images/login/user.png" class=" img-fluid" alt="Logo">
                        </div> -->
                     </div>
                     <div class="sign-in-page-data">
                        <div class="sign-in-from w-100 pt-5 m-auto">
                           <h1 class="mb-3 text-center">Login Account</h1>
                           <form class="mt-4" method="post">
                              <div class="form-group">
                                 <label for="exampleInputEmail2">Admin Name</label>
                                 <input type="text" class="form-control mb-0" name="name" id="name" placeholder="Enter admin name" >
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail2">Email address</label>
                                 <input type="email" class="form-control mb-0" name="email" id="email" placeholder="Enter email" >
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputPassword2">Password</label>
                                 <input type="password" class="form-control mb-0" name="pass" id="pass" placeholder="Password" >
                              </div>
                              <div class="d-inline-block w-100">
                                 <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Show Password</label>
                                 </div>
                              </div>
                              <div class="sign-info mt-2">
                                 <button type="submit" name="submit" class="btn btn-primary mb-2">Login</button>
                                 <span class="dark-color d-block line-height-2">Don't have an account? <a href="#">Sign up</a></span>
                              </div>
                              
                              <script>
        let a = document.getElementById("pass");
                    document.getElementById("customCheck1").addEventListener('change', () => {
                        if (customCheck1.checked) {
                            a.type="text";
                        }else{
                            a.type="password";
                        };
                    }); 
    </script>
                           </form>
                        </div>
                     </div>
                     
                     <!-- <div class="mt-2">
                        <div class="d-flex justify-content-center links">
                           Don't have an account? <a href="#" class="ml-2">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center links">
                           <a href="pages-recoverpw.html">Forgot your password?</a>
                        </div>
                     </div> -->
                  </div>
               </div>
            </div>
            <!-- Sign in END -->
            <!-- color-customizer -->
         </div>
      </section>
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
      <!-- Style Customizer -->
      <script src="js/style-customizer.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
   </body>
</html>