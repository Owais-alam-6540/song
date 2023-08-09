<?php
include "config.php";
include "header.php";

if (isset($_POST["submit"])) {
  $Fname = $_POST['Fname'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  // $date = $_POST['date'];
  $address = $_POST['address'];
  $pass = $_POST['pass'];
  $gender = $_POST['gender'];
  $query = "SELECT * FROM `user_acc` where  `User_Email`= '{$email}' OR `User_Name` = '{$Fname}'";
  $result = mysqli_query($conn, $query);
  $res1 = mysqli_num_rows($result);

  // $insert = "INSERT INTO `user_acc` ( `User_Name`, `User_Email`, `Contact_No`, `Gender`, `Date`, `Address`, `Password`) VALUES ( '$Fname', ' $email', '$contact', '$gender', '2023-07-10 21:19:58.000000', '$address', '$pass')";

  $FnameRE = "/[A-Z]{1}[a-z]{3,}/";
  $emailRE = "/[a-zA-Z0-9]{5,}@[a-z]{2,7}([\.a-z]{3,4}[\.a-z]{2,3})/";
  $passwordRE = "/[a-zA-Z0-9\.\@\*\,]{8}/";
  $contactnoRE = "/^((03)|(\+923))[0-9]{9}$/";

  if ($res1 > 0) {
    echo "<script>
                     alert ('account already exist')
                    </script>";
  } else {
    if (preg_match($FnameRE, $Fname) && preg_match($emailRE, $email) && preg_match($passwordRE, $pass) && preg_match($contactnoRE, $contact)) {
      $blowfish = password_hash($_POST['pass'], CRYPT_BLOWFISH);

      $insertquery = "INSERT INTO `user_acc` ( `User_Name`, `User_Email`, `Contact_No`, `Gender`, `Address`, `Password`) VALUES ( '$Fname', '$email', '$contact', '$gender', '$address', '$blowfish')";

      $insertresult = mysqli_query($conn, $insertquery);
      if ($insertresult) {
        echo "<script>
                          alert ('your account has been created');
                          window.location.href='login.php'
                        </script>";
        // header("location: login.php");
      } else {
        echo "<script>
                          alert ('your account is not created')
                        </script>";
      }

    } else {
      $passError = "Your password must contain at least 8 characters.";
    }
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
</head>
<style>
  *,
  *:before,
  *:after {
    box-sizing: border-box;
  }

  html {
    overflow-y: scroll;
  }

  body {
    background: #c1bdba;
    font-family: "Titillium Web", sans-serif;
    background-image: url(img/bg-img/form-bg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }

  a {
    text-decoration: none;
    color: rgb(255, 69, 69);
    transition: 0.5s ease;
  }

  a:hover {
    color: #179b77;
  }

  .form {
    background: rgba(19, 35, 47, 0.5);
    padding: 40px;
    max-width: 600px;
    margin: 40px auto;
    border-radius: 4px;
    box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);

  }

  .tab-group {
    list-style: none;
    padding: 0;
    margin: 0 0 40px 0;
  }

  .tab-group:after {
    content: "";
    display: table;
    clear: both;
  }

  .tab-group li a {
    display: block;
    text-decoration: none;
    padding: 15px;
    background: rgba(160, 179, 176, 0.25);
    color: #a0b3b0;
    font-size: 20px;
    float: left;
    width: 50%;
    text-align: center;
    cursor: pointer;
    transition: 0.5s ease;
  }

  .tab-group li a:hover {
    background: crimson;
    color: #ffffff;
  }

  .tab-group .active a {
   background: rgb(255, 69, 69);

    color: #ffffff;
  }

  .tab-content>div:last-child {
    display: none;
  }

  h1 {
    text-align: center;
    color: #ffffff;
    font-weight: 300;
    margin: 0 0 40px;
  }

  /* label {
    position: absolute;
    transform: translateY(6px);
    left: 13px;
    color: rgba(255, 255, 255, 0.5);
    transition: all 0.25s ease;
     -webkit-backface-visibility: hidden;
    pointer-events: none;
    font-size: 22px;
  } */

  label .req {
    margin: 2px;
    color: rgb(255, 69, 69);
  }

  label.active {
    transform: translateY(50px);
    left: 2px;
    font-size: 14px;
  }

  label.active .req {
    opacity: 0;
  }

  label.highlight {
    color: #ffffff;
  }

  input,
  textarea {
    font-size: 22px;
    display: block;
    width: 100%;
    height: 100%;
    padding: 5px 10px;
    background: none;
    background-image: none;
    border: 1px solid #a0b3b0;
    color: #ffffff;
    border-radius: 0;
    transition: border-color 0.25s ease, box-shadow 0.25s ease;
  }

  input:focus,
  textarea:focus {
    outline: 0;
    border-color: rgb(255, 69, 69);
  }

  textarea {
    border: 2px solid #a0b3b0;
    resize: vertical;
  }

  .field-wrap {
    position: relative;
    margin-bottom: 40px;
  }

  .top-row:after {
    content: "";
    display: table;
    clear: both;
  }

  .top-row>div {
    float: left;
    width: 48%;
    margin-right: 4%;
  }

  .top-row>div:last-child {
    margin: 0;
  }

  .button {
    border: 0;
    outline: none;
    border-radius: 0;
    padding: 15px 0;
    font-size: 2rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    background: rgb(255, 69, 69);
    color: white;
    transition: all 0.5s ease;
    /* -webkit-appearance: none; */
  }

  .button:hover,
  .button:focus {
    background: crimson;
  border-radius: 100px;
    color: white;
  }

  .button-block {
    display: block;
    width: 100%;
  }

  .forgot {
    margin-top: -20px;
    text-align: right;
  }

  .maindiv {
    display: flex; 
    /* justify-content: center; */

  }

  .gender{
    display: flex;
    align-items: center;
    justify-content: center;
   align-content: center;
    color: white; 
    margin: 0 10px;
  }
  
  .gender label{
    margin: 0 5px;
    
  }
  .gender input{
    margin-bottom: 5px;
    
  }
  .error{
    color: red;
  }
</style>

<body>
  <div class="form">

    <ul class="tab-group">
      <li class="tab active"><a href="#">Sign Up</a></li>
      <li class="tab"><a href="login.php">Log In</a></li>
    </ul>

    <div class="tab-content">
      <div id="signup">
        <h1>Sign Up for Free</h1>

        <form method="POST">

          <div class="top-row">
            <div class="field-wrap">
              <input type="text" placeholder="Full Name" name="Fname" required autocomplete="off" />
            </div>
            
            <div class="field-wrap">
              <input type="email" placeholder="Email" name="email" required autocomplete="off" />
            </div>
          </div>
          
          <div class="field-wrap">
            <input type="text" placeholder="Contact No" name="contact" required autocomplete="off" />
          </div>
          
          
          <!-- <div class="field-wrap">
            <input type="date" name="date" value="<?php echo date("$y-m-d")?>" required autocomplete="off" />
          </div> -->

          <div class="field-wrap">
            <input type="text" placeholder="Address" name="address" required autocomplete="off" />
          </div>
          
          <div class="field-wrap">
            <input type="password" placeholder="Password" name="pass" required autocomplete="off"  maxlength="8"/>
            <p class='error'><?php echo  @$passError;?></p>
          </div>
          

          <div class="maindiv">
            <div class="gender">
              <input type="radio" name="gender" value="M" required autocomplete="off" />
              <label for="">Male</label>
            </div>


            <div class="gender">
              <input type="radio" name="gender" value="F" required autocomplete="off" />
              <label for="">Female</label>
            </div>
          </div>
          <br>
          <button type="submit" name="submit" class="button button-block" >Get Started</button>

        </form>

      </div>

      <div id="login">
        <h1>Welcome Back!</h1>

        <form action="/" method="post">

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" />
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" />
          </div>

          <p class="forgot"><a href="#">Forgot Password?</a></p>

          <button class="button button-block" >Log In</button>

        </form>

      </div>

    </div><!-- tab-content -->

  </div> <!-- /form -->

  <script>

    $('.form').find('input, textarea').on('keyup blur focus', function (e) {

      var $this = $(this),
        label = $this.prev('label');

      if (e.type === 'keyup') {
        if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
      } else if (e.type === 'blur') {
        if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.removeClass('highlight');
        }
      } else if (e.type === 'focus') {

        if ($this.val() === '') {
          label.removeClass('highlight');
        }
        else if ($this.val() !== '') {
          label.addClass('highlight');
        }
      }

    });

    $('.tab a').on('click', function (e) {

      e.preventDefault();

      $(this).parent().addClass('active');
      $(this).parent().siblings().removeClass('active');

      target = $(this).attr('href');

      $('.tab-content > div').not(target).hide();

      $(target).fadeIn(600);

    });
</script>

<script src="js/jquery.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/razo.bundle.js"></script>

<script src="js/default-assets/active.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7e1e01fc8a41e459","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>

</html>