<?php require_once("include/DB.php");
require_once("include/functions.php");
require_once("include/DB.php");?>
<?php

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jai Infotech</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery-3.3.1.js"> </script>
    <script src="js/bootstrap.min.js" ></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="top">
      <div class="row">
        <div class="col-sm-3">
<img class="img-responsive logo" src="images/logo.png" alt="">

        </div>
        <div class="col-sm-3 ">
<div class="row">
  <div class="col-sm-2">
<i class="glyphicon glyphicon-envelope  pull-left"></i>
  </div>
  <div class="col-sm-10">
<h3 class="border top-title">&nbsp;Email Us</h3>
<p class="top-content">Jaib5053@gmail.com</p>
  </div>
  </div>

        </div>
        <div class="col-sm-3">
          <div class="row">
            <div class="col-sm-2">
          <i class="glyphicon glyphicon-earphone  pull-left"></i>
            </div>
            <div class="col-sm-10">
          <h3 class="border top-title">&nbsp;Call&nbsp;Us</h3>
          <p class="top-content">+91 9829205053</p>
            </div>
            </div>
        </div>
        <div class="col-sm-3">
<div class="social">
  <a href="http://<?php show_social('facebook'); ?>" target="_blank"> <i class="fab fa-facebook-square fa-3x"></i></a>
  <a href="http://<?php show_social('twitter'); ?>"target="_blank"> <i class="fab fa-twitter-square fa-3x"></i></a>
  <a href="http://<?php show_social('instagram'); ?>"target="_blank"> <i class="fab fa-instagram fa-3x"></i></a>
  <a href="http://<?php show_social('google'); ?>"target="_blank"> <i class="fab fa-google-plus-square fa-3x"></i></a>
</div>

        </div>
      </div>

<div class="row">


    <nav class="nav navbar-inverse " role="navigation">

<div class="container">

    <div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" name="button" data-toggle="collapse" data-target="#collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>

</button>


     </div>
     <div class="collapse navbar-collapse" id="collapse">


      <ul class="nav navbar-nav">
        <li  class="active"><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Web Solutions<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Website Design & Development</a></li>
            <li><a href="#">E-commerce Solution</a></li>
            <li><a href="#">Website Maintainence</a></li>

          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Web Promotion<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Social Media Optimization</a></li>
            <li><a href="#">Search Engine Optimization</a></li>
            <li><a href="#">Bulk SMS</a></li>
            <li><a href="#">Digital Marketing</a></li>
            <li><a href="#">PPC Campaign Management</a></li>
          </ul>
        </li>
        <li><a href="blog.php?page=1" target=_blank >Blog</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#about">About us</a></li>
        </ul>



      </div>
</div>
</nav></div>
  <div class="row">
                  <div class="col-sm-12">
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" role="listbox">
                              <div class="item active">
                                  <img src="slider/<?php imgname(1); ?>" alt="">
                                  <div class="carousel-caption">
                                      <h1><?php imgcaption(1); ?></h1>
                                      <p><?php imgdisc(1); ?></p>
                                  </div>
                              </div>
                              <div class="item">
                                  <img src="slider/<?php imgname(2); ?>" alt="">
                                  <div class="carousel-caption">
                                      <h1><?php imgcaption(2); ?></h1>
                                      <p><?php imgdisc(2); ?></p>
                                  </div>
                              </div>
                              <div class="item">
                                  <img src="slider/<?php imgname(3); ?>" alt="">
                                  <div class="carousel-caption">
                                      <h1><?php imgcaption(3); ?></h1>
                                      <p><?php imgdisc(3); ?></p>
                                  </div>
                              </div>
                              <div class="item">
                                  <img src="slider/<?php imgname(4); ?>" alt="">
                                  <div class="carousel-caption">
                                      <h1><?php imgcaption(4); ?></h1>
                                      <p><?php imgdisc(4); ?></p>
                                  </div>
                              </div>
                          </div>

                          <!-- Controls -->
                          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                      </div>
                  </div>
              </div>     <!-- ending main slider -->
              <div class="row video_section"> <!-- starting video section -->
                <div class="col-sm-7">
<h1 class="video_heading">Website Development and Digital Marketing Solution in India </h1>
<p class="video_content">Our company has been working smartly to offer professional Web & Mobile App Development Services and Marketing Solutions to clients across the globe from our main branch office in Kota. With having lot of experience, you can trust us for your custom web design, web development, CMS, ecommerce, mobile apps or digital marketing needs. With a history of successfully delivering profitable solutions to our clients, we are expecting to work for you in future.</p>
<a class="btn btn-info btn-lg" href="Aboutus.php">More About Us</a>
                </div>
                <div class="col-sm-5 sizer">
                  <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item"width="800" height="300"  src="<?php video(); ?>"></iframe>
                  </div>
                </div>
              </div>          <!-- ending video section -->
  <div class="row digital_marketing" id="services">
    <h1 class="center dig-top" >Our Digital Services Includes</h1>
<div class="col-sm-12">
<div class="row row1">
  <div class="col-sm-4">
            <div class="col-sm-2">
        <i class="fas fa-desktop fa-4x pull-left"></i>
            </div>
            <div class="col-sm-10">
          <h3 class="border dig-title">Website Development</h3>
          <p class="dig-content">A skilled team of web designers at our company can help by providing thoughtful and effective web designs.</p>
            </div>
  </div>
  <div class="col-sm-4">
            <div class="col-sm-2">
        <i class="fas fa-share-square fa-4x pull-left"></i>
            </div>
            <div class="col-sm-10">
          <h3 class="border dig-title">Digital Marketing</h3>
          <p class="dig-content">
SEO services which we offer solutions for a ranking issues, and deficiencies. Depending on your goals, and needs one, or a combination.</p>
            </div>
  </div>
  <div class="col-sm-4">
            <div class="col-sm-2">
        <i class="fab fa-amazon fa-4x pull-left"></i>
            </div>
            <div class="col-sm-10">
          <h3 class="border dig-title">E-Commerce Solution</h3>
          <p class="dig-content">We Provides You An Excellent Tailor-Made & Customizable Ecommerce Solutions For Deployment And Development.</p>
            </div>
  </div>
</div>
<div class="row row2">
  <div class="col-sm-4">
              <div class="col-sm-2">
          <i class="fab fa-android fa-4x pull-left"></i>
              </div>
              <div class="col-sm-10">
            <h3 class="border dig-title">Mobile App Development</h3>
            <p class="dig-content">We build a mobile application for your organization, no matter the platform it is to be built on or device it is to be used in conjunction with. </p>
              </div>
  </div>
  <div class="col-sm-4">
                <div class="col-sm-2">
            <i class="fab fa-codepen fa-4x pull-left"></i>
                </div>
                <div class="col-sm-10">
              <h3 class="border dig-title">Software Development</h3>
              <p class="dig-content">We build high quality software to make your business effortless. We're India-based, experience-rich team & leading software development company in kota.</p>
                </div>
  </div>
  <div class="col-sm-4">
              <div class="col-sm-2">
          <i class="fas fa-images fa-4x pull-left"></i>
              </div>
              <div class="col-sm-10">
            <h3 class="border dig-title">Graphics Designing</h3>
            <p class="dig-content">Our branding designs ensure that your company is perceived with your unique and enduring brand identity.</p>
              </div>
  </div>
</div>
</div>
  </div>
  <div class="row tech_section"><!-- technolgies section -->
    <div class="row">


    <div class="col-md-12 text-center"><h2  class="tech_head">Our Technical Expertise<br></h2></div>
<div class="col-md-12 ">
<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
  <div class="carousel-inner in">
    <div class="item active">
      <div class="col-md-2 col-sm-6 col-xs-12"><i class="fab fa-angular fa-10x"></i></div>
    </div>
    <div class="item">
      <div class="col-md-2 col-sm-6 col-xs-12"><i class="fab fa-css3-alt fa-10x"></i></div>
    </div>
    <div class="item">
      <div class="col-md-2 col-sm-6 col-xs-12"><i class="fab fa-php fa-10x"></i></div>
    </div>
    <div class="item">
      <div class="col-md-2 col-sm-6 col-xs-12"><i class="fab fa-js fa-10x"></i></div>
    </div>
    <div class="item">
      <div class="col-md-2 col-sm-6 col-xs-12"><i class="fab fa-java fa-10x"></i></div>
    </div>
    <div class="item">
      <div class="col-md-2 col-sm-6 col-xs-12"><i class="fab fa-google fa-10x"></i></div>
    </div>
    <div class="item">
      <div class="col-md-2 col-sm-6 col-xs-12"><i class="fab fa-wordpress fa-10x"></i></div>
    </div>
    <div class="item">
      <div class="col-md-2 col-sm-6 col-xs-12"><a href="#"><i class="fab fa-html5 fa-10x"></i>
    </div>
  </div>

</div>
</div>

</div>  <br> </a>
      </div>
    <div class="row"id="about">
      <div class="col-sm-12">
        <div class="parallax">
          <div class="parallax-inner">
            <h1 class="center why-head">Why Choose Us?</h1>
<div class="row">
  <div class="col-sm-2">
<i class="far fa-edit fa-5x pull-right ic"></i>
  </div>
  <div class="col-sm-4 " >
<h2>Unique Design</h2>
<p class="why">We Jai Infotech is better known in kota for creative,unique,fresh and clean HTML Designs.Our Expert Proffesional can offer you unmatchable design which can give you brand a distinct identity.</p>
  </div>
  <div class="col-sm-2">
<i class="fas fa-truck fa-5x pull-right ic"></i>
  </div>
  <div class="col-sm-4">
    <h2>On Time Delivery</h2>
    <p class="why">We take the project as a task and ashere to complete in given time period in which, we commited to our clients and make them assured that project will be deliverd in time.Jai Infotech value your time and totally Non-negotiable to deliver projects on time...</p>
  </div>
</div>
<div class="row">
  <div class="col-sm-2">
<i class="fas fa-hand-holding-usd fa-5x pull-right ic"></i>
  </div>
  <div class="col-sm-4">
    <h2>No Hidden Charges</h2>
    <p class="why">Our prospective clients will be aware of all disclosure of all our payments option and T&C and all pricing structures will be in place.We do not beleive tp charge any hidden charge and make our clients discomfort...</p>
  </div>
  <div class="col-sm-2">
<i class="fas fa-trophy fa-5x pull-right ic"></i>
  </div>
  <div class="col-sm-4">
    <h2>Certified Experts</h2>
    <p class="why"> Jai Infotech have well qualified and certified developers to provide services in any field from web designing to SEO. Our proven track records of maintaing high quality make us count professional as pivotal.</p>
  </div>
</div>
          </div>
        </div>
      </div>
    </div>
    <div class="row work"><!--how we work-->
      <div class="row">
    <div class="col-sm-12">
      <h1 class="center work-head">How We Work?</h1>
      <p class="center work-info">When you consult a doctor, you tell him the symptoms you have been facing and rest is his job right? Similarly, when you come to us, you don’t necessarily share the background in design to exactly state what you require. This is where our consultation comes into play. We propose a draft and examine what we can possibly do to get the desired results.</p>
    </div>
    <div class="col-sm-2">
      <img class="img-rounded img-responsive work-img" src="images/plan.png" alt="">
      <h3 class="center">Plan</h3>
    </div>
    <div class="col-sm-2">
      <img class="img-rounded img-responsive work-img" src="images/design.png" alt="">
      <h3 class="center">Design</h3>

    </div>
    <div class="col-sm-2">
      <img class="img-rounded img-responsive work-img" src="images/develop.png" alt="">
      <h3 class="center">Develop</h3>

    </div>
    <div class="col-sm-2">
      <img class="img-rounded img-responsive work-img" src="images/test.png" alt="">
      <h3 class="center">Test</h3>

    </div>
    <div class="col-sm-2">
      <img class="img-rounded img-responsive work-img " src="images/deliver.png" alt="">
      <h3 class="center">Deliver</h3>

    </div>
    <div class="col-sm-2">
      <img class="img-rounded img-responsive work-img" src="images/support.png" alt="">
      <h3 class="center">Support</h3>

    </div>
      </div>
    </div>
    <div class="row blog"> <!--blog -->
      <h1 class="blog-title center">Recent Posts</h1> <hr>
      <?php
       $viewquery="SELECT * FROM admin_panel ORDER BY id desc LIMIT 0,3";
        $execute=mysql_query($viewquery);
        while ($datarows=mysql_fetch_array($execute)) {
                  $post_id=$datarows['id'];
                  $post_datetime=$datarows['datetime'];
                  $post_category=$datarows['category'];
                  $post_author=$datarows['author'];
                  $post_image=$datarows['image'];
                  $post_title=$datarows['title'];
                  $post_content=$datarows['post'];
         ?>
         <div class="col-sm-4">
           <img class="img-responsive img-rounded " src="upload/<?php echo $post_image; ?>">
           <div class="caption">
             <h1 id="Title"> <a href="fullpost.php?id=<?php echo $post_id; ?>"><?php echo htmlentities($post_title);?></a> </h1>
             <p class="description"><i class="glyphicon glyphicon-tags blog-icon"></i> <?php echo htmlentities($post_category); ?>
               <i class="glyphicon glyphicon-user blog-icon"></i> <?php echo htmlentities($post_author); ?>
               <?php
               $connectingDB;
               $querycomm="SELECT COUNT(*) FROM comments WHERE post_id='$post_id' AND status='ON'";
               $executecomm=mysql_query($querycomm);
               $rowscomm=mysql_fetch_array($executecomm);
               $totalcomm=array_shift($rowscomm);

               ?>
               <i class="glyphicon glyphicon-comment  pull-right blog-icon"><?php echo $totalcomm; ?> </i>

             </p><br>

             <p class="post"> <?php
             if (strlen($post_content)>150) {
               $post_content=substr($post_content,0,150);}
               echo $post_content."[...]";
             ?></p>
           </div>
           <a href="fullpost.php?id=<?php echo $post_id; ?>">
             <span class="btn btn-info pull-right">Read More &rsaquo;&rsaquo;&rsaquo;</span>
           </a>

         </div>
       <?php } ?>

    </div>
    <div class="row foot">  <!-- last -->
    <div class="col-sm-4 jai">
<h2>Jai Infotech</h2><hr>
<i class="fas fa-map-marker-alt fa-2x"></i>  <span class="foot-desc" >Career Point Tower1 kota, Rajasthan</span> <br> <br>
<i class="fas fa-at fa-2x"></i>  <span class="foot-desc" >Jaib5053@gmail.com</span> <br> <br>
<i class="fas fa-phone fa-2x" ></i>  <span class="foot-desc" >9829205053</span><br> <br>
<i class="fas fa-mobile-alt fa-2x" ></i>  <span class="foot-desc" >7014562766</span> <br> <br>
    </div>
    <div class="col-sm-4 map">
<h2>Visit Us</h2><hr>

          <div id="map"></div>
    </div>
    <div class="col-sm-4">
<h2>Get Socials</h2><hr>
<div class="size">


<a class="btn btn-block btn-social btn-twitter" href="http://<?php show_social('twitter'); ?>"target="_blank">
    <span class="fab fa-twitter"></span> Find Us on Twitter
  </a>
  <a class="btn btn-block btn-social btn-facebook"href="http://<?php show_social('facebook'); ?>"target="_blank">
    <span class="fab fa-facebook"></span> Find Us on Facebook
  </a>
  <a class="btn btn-block btn-social btn-instagram"href="http://<?php show_social('Instagram'); ?>"target="_blank">
    <span class="fab fa-instagram"></span> Find Us on Instagram
  </a>
  <a class="btn btn-block btn-social btn-google"href="http://<?php show_social('google'); ?>"target="_blank">
    <span class="fab fa-youtube"></span> Find Us on Youtube
  </a>
  </div>
    </div>
    </div>
    <div class="row">
      <div class="col-sm-12 end">
&copy; 2018 jai Infotech pvt.ltd. All Rights Reserved
      </div>

    </div>
    <script>
      function initMap() {
        var uluru = {lat:25.1431585, lng:75.8599385};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFnHGhc3fp2S_3jPoUZdwubUQMWIWCACw &callback=initMap">
    </script>
<script type="text/javascript">
$('#carousel-example-generic').carousel({
interval: 3000,
pause: null
})
$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i=0;i<4;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}

    next.children(':first-child').clone().appendTo($(this));
  }
});
</script>
  </body>
</html>
