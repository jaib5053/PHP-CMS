<?php
require_once("include/DB.php");
require_once("include/sessions.php");
require_once("include/functions.php");
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Terms of Use</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/publicstyles.css">


      <script src="js/jquery-3.3.1.js"> </script>
  <script src="js/bootstrap.min.js" ></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />

  <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-classic.css" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>





  <style>


  .comments-area{
background-color: #d9d9d9;
  }
  .commentdetails{
    margin-left:30px;
  }
  textarea{
    resize: none;
  }
  .logo {
    margin-left: 10px;
    margin-right: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
    width: 100px;
    height: 90px;
  }
.jssocials-share-link{color:white;}


  </style>
  </head>
  <body>

      <nav class="nav navbar-inverse navbar-fixed-top bor" role="navigation">

  <div class="container">

      <div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" name="button" data-toggle="collapse" data-target="#collapse">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>

</button>

      <a class="navbar-brand" href="blog.php?page=1">
        <span style="color:red; font-weight:bold;">Content Management System</span>
</a>
       </div>
       <div class="collapse navbar-collapse" id="collapse">


        <ul class="nav navbar-nav">
          <li><a href="blog.php?page=1">Home</a></li>
          <li class="active"><a href="blog.php">Blog</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">About us</a></li>
          </ul>

          <form class="navbar-form navbar-right" action="blog.php">
            <div class="form-group">
               <input class="form-control" type="text" name="Search" placeholder="Search...">

            <button class="btn btn-default" name="searchbutton">
              <i class="glyphicon glyphicon-search"></i>
            </button>
              </div>

          </form>

        </div>
</div>
    </nav>
<div class="container">
  <div class="blog-header">
    <h1>Content management System </h1>

    <p class="lead">complete responsive content management system by jai bhutani</p>
  </div>
<div class="row">
  <div class="col-sm-8">
      <?php echo message(); echo success_message(); ?>
    <h1>Terms Of Use</h1>
    <?php pages('termsofuse'); ?>
  </div><!-- main -->


  <div class="col-sm-offset-1 col-sm-3">
    <div class="side">


    <img class="img-responsive img-circle author-image " src="images/author.jpg" alt="">
    <h2>About Me</h2>
    <blockquote><p class="author-about">Hi, My Name is <strong>Jai Bhutani</strong> I am a Passionate Programmer, currently persuing B.C.A from Career Point University, Kota. i'm currently Learning Web Development using PHP, HTML, CSS, SQL, JavaScript,Bootstrap.</p></blockquote>
    </div>
<hr> <hr>
  <div class="panel panel-primary">
    <div class="panel-heading">
    <span class="heading">Categories</span>
    </div>
    <div class="panel panel-body">
  <?php
  $categoryquery="SELECT * FROM category ORDER BY id desc";
  $categoryexecute=mysql_query($categoryquery);
  while ($categorydata=mysql_fetch_array($categoryexecute)) {
    $categoryname=$categorydata['name'];
    $categoryid=$categorydata['id'];

   ?>

  <span><a href="blog.php?category=<?php echo $categoryname; ?>"><?php echo $categoryname; ?> </a></span>
  <br>
  <?php } ?>
    </div>
    <div class="panel-footer">
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <span class="heading">Recent Posts</span>
    </div>
  <div class="panel-body">
    <div class="list-group">

    <?php
    $recentquery="SELECT * FROM admin_panel ORDER BY id desc LIMIT 0,5";
    $recentexecute=mysql_query($recentquery);
    while ($recentdata=mysql_fetch_array($recentexecute)) {
      $recenttitle=$recentdata['title'];
      $recentid=$recentdata['id'];
  ?>

  <a class="list-group-item" href="fullpost.php?id=<?php echo $recentid; ?>"><?php echo $recenttitle; ?> </a>
  <?php } ?>



  </div>
  </div>
  <div class="panel-footer">

  </div>
  </div>

  </div><!-- side -->


</div> <!-- row -->


</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 footer">
      <ul class="list-group">
        <li class="pull-left "><a href="Aboutus.php" class="li">About Us</a> </li> &nbsp;&nbsp;
        <li class="pull-left "><a href="Disclaimer.php" class="li">Disclaimer</a> </li>
        <li class="pull-left"><a href="Privacypolicy.php"class="li">Privacy Policy</a> </li>
      <li class="pull-left"><a href="Termsofuse.php"class="li">Terms of Use</a> </li>
      </ul>
      <p class="info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright &copy; 2018| All rights Reserved| Theme By Jai Bhutani</p>

    </div>

  </div>

</div>

  </body>
</html>
