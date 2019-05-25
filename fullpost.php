<?php
require_once("include/DB.php");
require_once("include/sessions.php");
require_once("include/functions.php");
?>

<?php
$post_Id=$_GET['id'];

if (isset($_POST['submit'])) {
$cname=mysql_real_escape_string($_POST['Name']);
$cemail=mysql_real_escape_string($_POST['Email']);
$cmessage=mysql_real_escape_string($_POST['Comment']);


date_default_timezone_set("Asia/Kolkata");
$currenttime=time();
$Datetime=strftime('%B-%d-%Y %H:%M:%S',$currenttime);

$admin=$_SESSION['Username'];
if (empty($cname)||empty($cemail||empty($cmessage)) ) {
  $_SESSION["error_message"]="All Fields Required!";
  redirect_to("fullpost.php?id=$post_Id");
}elseif (strlen($cmessage)>200) {
  $_SESSION["fullpost.php?<?php echo $post_Id ?>"]="Too long comment!";
  redirect_to("fullpost.php?id=$post_Id");}


else {
  global $connectingDB;
  $query="INSERT INTO comments(datetime,name,email,comment,approver,status,post_id) VALUES('$Datetime','$cname','$cemail','$cmessage','pending','OFF','$post_Id')";
  $execute=mysql_query($query);

  if ($execute) {
    $_SESSION["success_message"]="Comment Submited Successfully";
    redirect_to("fullpost.php?id=$post_Id");
  }else {
    $_SESSION["error_message"]="Failed to Submit Comment";
    redirect_to("fullpost.php?id=$post_Id");
  }
}
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Full post</title>
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
          <li class="active"><a href="blog.php?page=1">Blog</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="Aboutus.php">About us</a></li>
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
    <?php

    if (isset($_GET["searchbutton"])) {
      $search=$_GET["Search"];
      $viewquery="SELECT * FROM admin_panel
      WHERE datetime LIKE '%$search%'
      or category LIKE '%$search%'
      or title LIKE '%$search%'
      or post LIKE '%$search%'
      or author LIKE '%$search%'";
    }
else{
  $id=$_GET['id'];
    $viewquery="SELECT * FROM admin_panel  WHERE id=$id ORDER BY id desc";}
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
     <div class="blogpost ">
       <h1 class="post-heading">  <?php echo htmlentities($post_title);?></h1>
       <p class="description"><i class="glyphicon glyphicon-tags  "></i> <?php echo htmlentities($post_category); ?>&nbsp; <i class="glyphicon glyphicon-calendar"></i> <?php echo htmlentities($post_datetime); ?>
         &nbsp; <i class="glyphicon glyphicon-user"></i> <?php echo htmlentities($post_author); ?>


         <?php
         $connectingDB;
         $querycomm="SELECT COUNT(*) FROM comments WHERE post_id='$post_id' AND status='ON'";
         $executecomm=mysql_query($querycomm);
         $rowscomm=mysql_fetch_array($executecomm);
         $totalcomm=array_shift($rowscomm);

         ?>
         <i class="glyphicon glyphicon-comment  pull-right"><?php echo $totalcomm; ?> </i>
             </p>
       <img class="img-responsive img-rounded" src="upload/<?php echo $post_image; ?>">
       <div class="caption">

         <p class="post"> <?php

           echo $post_content;
         ?></p>
       </div>
<div id="share"></div>

<script>
    $("#share").jsSocials({

      showCount: false,
    showLabel: true,
    showCount: "inside",
    shares: [
      "email",
      "twitter",
      "facebook",
      "googleplus",
      "linkedin",
      { share: "pinterest", label: "Pin this" },
      "stumbleupon",
      "whatsapp"
  ]
    });
</script>

     </div>
   <?php } ?>
<h2 class="h2" >Comments</h2>
<span><p class="border" ></p> </span>
<?php
$cquery="SELECT * FROM comments WHERE post_id='$post_Id'and status='ON'ORDER BY id desc";
$cexecute=mysql_query($cquery);
while ($datarows=mysql_fetch_array($cexecute)) {
            $cNAme=$datarows['name'];
          $cDate  =$datarows['datetime'];
          $cComment  =$datarows['comment'];

 ?>
<div class="comments ">
  <div class="">


<img src="images/user-icon.png"  class="logo pull-left img-responsive img-rounded" >
<p class="comm-name" ><?php echo $cNAme ?> </p>
<p class="description"><?php echo $cDate; ?> </p></div><hr>
<div class="">

<p><?php echo nl2br($cComment); ?> </p></div>
</div> <hr>
<?php } ?>
   <hr>
   <div class="Add-Comment">
     <h2  class="h2 highlight" >Leave a Reply</h2>
     <form class="form" action="fullpost.php?id=<?php echo $post_Id; ?>" method="post">


     <div class="form-group">
     <label for="Name"><span class="h5">Enter Your Name:* </span> </label>
     <input class="form-control" type="text" name="Name" id="Title" placeholder="Enter Name Here..." required >
     </div>
     <div class="form-group">
     <label for="Email"><span class="h5">Enter Your E-mail Address*</span> </label>
     <input class="form-control" type="email" name="Email" id="Email" placeholder="Enter Email Here..." required>
     </div>
     <div class="form-group">
     <label for="Comment"><span class="h5">Comment:*</span> </label>
 <textarea name="Comment" class="form-control"id="Comment" rows="5" placeholder="Enter Your Message..." required></textarea>
     </div>
     <div class="form-group">
                   <input class="btn btn-primary"type="submit" name="submit" value="Post Comment">
     </div>
</form>
   </div>
   <div class="ad ">
     <?php ads('footer'); ?>
   </div>
  </div><!-- main -->


  <div class="col-sm-offset-1 col-sm-3">
    <div class="side">


    <img class="img-responsive img-circle author-image " src="images/author.jpg" alt="">
    <h2>About Me</h2>
    <blockquote><p class="author-about">Hi, My Name is <strong>Jai Bhutani</strong> I am a Passionate Programmer, currently persuing B.C.A from Career Point University, Kota. i'm currently Learning Web Development using PHP, HTML, CSS, SQL, JavaScript,Bootstrap.</p></blockquote>
    </div>
<hr> <hr>
<div class="ad ">
  <?php ads('side'); ?>
</div>
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
