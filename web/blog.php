<?php
include "header.php";
include "config.php";

?>

<section class="razo-latest-news-area bg-overlay bg-img jarallax" style="background-image: url(img/bg-img/32.jpg);">

    <div class="razo-latest-news-slide owl-carousel">

        <div class="razo-single-latest-news-area bg-overlay bg-img" style="background-image: url(img/bg-img/22.jpg);">

            <div class="post-content">
                <a href="#" class="post-title">The light and music exposition hits los angeles</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>

            <div class="post-date">
                <h2>24</h2>
                <p>March</p>
            </div>

            <div class="read-more-btn">
                <a href="#" class="btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
        </div>

        <div class="razo-single-latest-news-area bg-overlay bg-img" style="background-image: url(img/bg-img/23.jpg);">

            <div class="post-content">
                <a href="#" class="post-title">The light and music exposition hits los angeles</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>

            <div class="post-date">
                <h2>24</h2>
                <p>March</p>
            </div>

            <div class="read-more-btn">
                <a href="#" class="btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
        </div>

        <div class="razo-single-latest-news-area bg-overlay bg-img" style="background-image: url(img/bg-img/24.jpg);">

            <div class="post-content">
                <a href="#" class="post-title">The light and music exposition hits los angeles</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>

            <div class="post-date">
                <h2>24</h2>
                <p>March</p>
            </div>

            <div class="read-more-btn">
                <a href="#" class="btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>


<section class="uza-news-area section-padding-80">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Artist Bio</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <style>
            #alignment .col-12:nth-child(even) .col-md-8{
                order:-1;
            }
        </style>
        <div class="row razo-blog-masonary" id="alignment">

            <!-- main -->
            <?php
            $query = "SELECT * FROM `artist` INNER JOIN `nationality` ON `nationality` =`Nationality_Id`";
            $queryres = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($queryres)) {
                ?>
                <div class="col-12 razo-blog-masonary-item mb-30">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <a href="#"><img style="height: 350px;" src="./img/artistimg/<?php echo $row['Img'] ?>"
                                        class="img-fluid rounded w-100" alt=""></a>
                            </div>
                            <div class="col-md-8">
                                <div class="">
                                    <div class="post-content">
                                        <div class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>
                                            <?php echo $row['Date_of_birth'] ?>
                                        </div>
                                        <a href="#" class="post-title"> 
                                            <h4>

                                            <?php echo $row['Artist_Name'] ?>
                                        </h4>
                                        </a>
                                        <h6>
                                            <?php echo $row['Nationality_Name'] ?>
                                        </h6>
                                        <p>
                                            <?php echo $row['Description'] ?>
                                        </p>
                                        <!-- <a href="#" class="btn read-more-btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>




            <!-- <div class="col-12 col-sm-6 col-lg-4 razo-blog-masonary-item mb-30">
<div class="razo-blog-masonary-single-item">

<div class="post-thumbnail">
<a href="#"><img src="img/bg-img/45.jpg" alt=""></a>
</div>

<div class="post-content">
<div class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> March 19, 2018</div>
<a href="#" class="post-title">In the medical journal The Lancet, a study out of Seattle which looked at alcohol consumption.</a>
<p>Quite a piuece of research. Quote, "The conclusions of the study are clear and unambiguous.</p>
<a href="#" class="btn read-more-btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
</div>
</div>
</div>

<div class="col-12 col-sm-6 col-lg-4 razo-blog-masonary-item mb-30">
<div class="razo-blog-masonary-single-item">

<div class="post-thumbnail">
<a href="#"><img src="img/bg-img/46.jpg" alt=""></a>
</div>
<div class="post-content">
fa-calendar" aria-hidden="true"></i> March 19, 2018</div>
<a href="#" class="post-title">Richard Harman from Politik joins us to talk about the latest development in this intriguing.</a>
<p>Steve Hanson wants government funding for the All Blacks to help stave off lucrative offers from abroad.</p>
<a href="#" class="btn read-more-btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
</div>
</div>
</div>

<div class="col-12 col-sm-6 col-lg-4 razo-blog-masonary-item mb-30">
<div class="razo-blog-masonary-single-item">

<div class="post-thumbnail">
<a href="#"><img src="img/bg-img/48.jpg" alt=""></a>
</div>

<div class="post-content">
<div class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> March 19, 2018</div>
<a href="#" class="post-title">Departure cards deported</a>
<p>Departure cards will soon be no more, after Iain Lees-Galloway announced they'd be phased out by November.</p>
<a href="#" class="btn read-more-btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
</div>
</div>
</div>

<div class="col-12 col-sm-6 col-lg-4 razo-blog-masonary-item mb-30">
<div class="razo-blog-masonary-single-item">

<div class="post-thumbnail">
<a href="#"><img src="img/bg-img/49.jpg" alt=""></a>
</div>

<div class="post-content">
<div class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> March 19, 2018</div>
<a href="#" class="post-title">Susan Rogers on her four intense years working for Prince</a>
<p>Susan Rogers was working as a studio tech for Crosby Stills and Nash when she got the call.</p>
<a href="#" class="btn read-more-btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
</div>
</div>
</div>

<div class="col-12 col-sm-6 col-lg-4 razo-blog-masonary-item mb-30">
<div class="razo-blog-masonary-single-item">

<div class="post-thumbnail">
<a href="#"><img src="img/bg-img/50.jpg" alt=""></a>
</div>

<div class="post-content">
<div class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> March 19, 2018</div>
<a href="#" class="post-title">Suicide prevention strategies need more resources</a>
<p>My heart goes out to the family and friends of the 668 people believed to have died by suicide.</p>
<a href="#" class="btn read-more-btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
</div>
</div>
</div>

<div class="col-12 col-sm-6 col-lg-4 razo-blog-masonary-item mb-30">
<div class="razo-blog-masonary-single-item">

<div class="post-thumbnail">
<a href="#"><img src="img/bg-img/51.jpg" alt=""></a>
</div>

<div class="post-content">
<div class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> March 19, 2018</div>
<a href="#" class="post-title">Christchurch musician Roy Montgomery on his latest album Suffuse</a>
<p>Roy Montgomery is a NZ guitarist more well known in international cult music circles.</p>
<a href="#" class="btn read-more-btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
</div>
</div>
</div>

<div class="col-12 col-sm-6 col-lg-4 razo-blog-masonary-item mb-30">
<div class="razo-blog-masonary-single-item">

<div class="post-thumbnail">
<a href="#"><img src="img/bg-img/52.jpg" alt=""></a>
</div>

<div class="post-content">
<div class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> March 19, 2018</div>
<a href="#" class="post-title">Pacific Heights' new album A Lost Light came to him in a dream</a>
<p>Ex Shapeshifter man Devin Abrams now makes music under the name Pacific Heights.</p>
<a href="#" class="btn read-more-btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
</div>
</div>
 </div> -->
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="#" class="btn razo-btn mt-30">Load More</a>
            </div>
        </div>
    </div>
</section>

<?php
include "footer.php";
?>