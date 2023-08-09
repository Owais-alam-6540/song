<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Razo - Radio HTML Template | Home</title>

<link rel="icon" href="./img/core-img/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="style.css">
</head>
<body>

<div id="preloader">
<div>
<div class="spinner">
<div class="double-bounce1"></div>
<div class="double-bounce2"></div>
</div>
<span>Wait, please...</span>
</div>
</div>


<div class="top-search-area">
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-body">

<button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>

<form action="index.html" method="post">
<input type="search" name="top-search-bar" class="form-control" placeholder="Type keywords and hit enter...">
<button type="submit">Search</button>
</form>

<div class="search-btn"><i class="icon_search"></i></div>
</div>
</div>
</div>
</div>
</div>


<div class="razo-social-share-area">
<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
<a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
<a href="#" class="ss-close-btn"><i class="arrow_right"></i></a>
</div>


<header class="header-area">

<div class="main-header-area">
<div class="classy-nav-container breakpoint-off">
<div class="container">

<nav class="classy-navbar justify-content-between" id="razoNav">

<a class="nav-brand" href="index.php"><img src="./img/core-img/logo.png" alt=""></a>

<div class="classy-navbar-toggler">
<span class="navbarToggler"><span></span><span></span><span></span></span>
</div>

<div class="classy-menu">

<div class="classycloseIcon">
<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
</div>

<div class="classynav">
<ul id="nav">
<li><a href="./index.php">Home</a></li>
<!-- <li><a href="#">Pages</a>
<ul class="dropdown">
<li><a href="./index.php">- Home</a></li>
<li><a href="./charts.php">- Charts</a></li>
<li><a href="./single-charts.html">- Charts Details</a></li>
<li><a href="./podcast.php">- Podcast</a></li>
<li><a href="./single-podcast.html">- Podcast Details</a></li>
<li><a href="./show.php">- Show</a></li>
<li><a href="./signup.php">Registration</a></li>
<li><a href="./blog.php">- Blog</a></li>
<li><a href="./single-blog.html">- Blog Details</a></li>
<li><a href="#">- Dropdown</a>
<ul class="dropdown">
<li><a href="#">- Dropdown Item</a></li>
<li><a href="#">- Dropdown Item</a></li>
<li><a href="#">- Dropdown Item</a></li>
<li><a href="#">- Dropdown Item</a></li>
</ul>
</li>
</ul>
</li> -->
<li><a href="./show.php">Shows</a></li>
<li><a href="./album.php">Album</a></li>
<li><a href="./song.php">Songs</a></li>
<!-- <li><a href="#">Mega</a>
<div class="megamenu">
<ul class="single-mega cn-col-4">
<li><a href="./index.php">- Home</a></li>
<li><a href="./charts.php">- Charts</a></li>
<li><a href="./single-charts.html">- Charts Details</a></li>
<li><a href="./podcast.php">- Podcast</a></li>
<li><a href="./single-podcast.php">- Podcast Details</a></li>
</ul>
<ul class="single-mega cn-col-4">
<li><a href="./show.php">- Show</a></li>
<li><a href="./signup.php">Registration</a></li>
<li><a href="./blog.php">- Blog</a></li>
<li><a href="./single-blog.html">- Blog Details</a></li>
<li><a href="./index.php">- Home</a></li>
</ul>
<ul class="single-mega cn-col-4">
<li><a href="./charts.php">- Charts</a></li>
<li><a href="./single-charts.html">- Charts Details</a></li>
<li><a href="./podcast.php">- Podcast</a></li>
<li><a href="./single-podcast.html">- Podcast Details</a></li>
<li><a href="./show.php">- Show</a></li>
</ul>
<ul class="single-mega cn-col-4">
<li><a href="./show.php">- Show</a></li>
<li><a href="./signup.php">Registration</a></li>
<li><a href="./blog.php">- Blog</a></li> 
<li><a href="./single-blog.html">- Blog Details</a></li>
<li><a href="./index.php">- Home</a></li>
</ul>
</div>
</li> -->
<li><a href="./signup.php">Registration</a></li>
<li><a href="./blog.php">Blog</a></li>
</ul>

<div class="social-share-icon">
<i class="social_share"></i>
</div>

<div class="search-icon" data-toggle="modal" data-target="#searchModal">
<i class="icon_search"></i>
</div>
<div class="search-icon" >
<a href="logout.php"><i class="fa-sharp fa-solid fa-arrow-right-from-bracket" style="color: #f9fafb;"></i></a>
</div>
</div>

</div>
</nav>
</div>
</div>
</div>
</header>
