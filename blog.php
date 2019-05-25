<?php
require_once("include/DB.php");
require_once("include/sessions.php");
require_once("include/functions.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cms</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/publicstyles.css">
      <script src="js/jquery-3.3.1.js"> </script>
  <script src="js/bootstrap.min.js" ></script>

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
          <li><a href="index.php">Home</a></li>
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
    <h1>Content management System</h1>
    <p class="lead">complete responsive content management system by jai bhutani</p>
  </div>
<div class="row">
  <div class="col-sm-8">
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
    elseif(isset($_GET['page'])) {
    $page=$_GET['page'];
    if ($page<=0) {
      $showpagesfrom=0;
    }else {
        $showpagesfrom=($page*5)-5;
    }

$viewquery="SELECT * FROM admin_panel ORDER BY id desc LIMIT $showpagesfrom,5";
    }
    elseif (isset($_GET['category'])) {
      $categoryn=$_GET['category'];
      $viewquery="SELECT * FROM admin_panel WHERE category='$categoryn'";
    }

else{
    $viewquery="SELECT * FROM admin_panel ORDER BY id desc LIMIT 0,5";}
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
     <div class="blogpost thumbnail">
       <img class="img-responsive img-rounded " src="upload/<?php echo $post_image; ?>">
       <div class="caption">
         <h1 id="Title"> <a href="fullpost.php?id=<?php echo $post_id; ?>"><?php echo htmlentities($post_title);?></a> </h1>
         <p class="description"><i class="glyphicon glyphicon-tags"></i> <?php echo htmlentities($post_category); ?>&nbsp; <i class="glyphicon glyphicon-calendar"></i> <?php echo htmlentities($post_datetime); ?>
           &nbsp; <i class="glyphicon glyphicon-user"></i> <?php echo htmlentities($post_author); ?>
           <?php
           $connectingDB;
           $querycomm="SELECT COUNT(*) FROM comments WHERE post_id='$post_id' AND status='ON'";
           $executecomm=mysql_query($querycomm);
           $rowscomm=mysql_fetch_array($executecomm);
           $totalcomm=array_shift($rowscomm);

           ?>
           <i class="glyphicon glyphicon-comment  pull-right"><?php echo $totalcomm; ?> </i>

         </p><br>

         <p class="post"> <?php
         if (strlen($post_content)>150) {
           $post_content=substr($post_content,0,150);}
           echo $post_content."[...]";
         ?></p>
       </div>
       <a href="fullpost.php?id=<?php echo $post_id; ?>">
         <span class="btn btn-info">Read More &rsaquo;&rsaquo;&rsaquo;</span>
       </a>

     </div>
   <?php } ?>
   <nav>

   <ul class="pagination">
     <?php
if (isset($_GET['page'])) {


  if ($page>1) { ?>
    <li><a href="blog.php?page=<?php echo $page-1; ?>">&laquo;</a> </li>
  <?php } ?>





<?php
global $connectingDB;
$querypagination="SELECT COUNT(*) FROM admin_panel";
$executepagination=mysql_query($querypagination);
$rowpagination=mysql_fetch_array($executepagination);
$totalpost=array_shift($rowpagination);
$postperpage=$totalpost/5;
$postperpage=ceil($postperpage);
for ($i=1; $i<=$postperpage ; $i++) {



if ($i==$page) {


 ?>
<li class="active"> <a href="blog.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php }else{
 ?>

<li> <a href="blog.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php }} ?>
<?php if($page<$postperpage) {
?>
<li><a href="blog.php?page=<?php echo $page+1; ?>">&raquo;</a> </li>
<?php } ?>

</ul>
 </nav>
<?php } ?>
<div class="ad ">
  <?php ads('footer'); ?>
</div>
  </div><!-- main -->



  <div class="col-sm-offset-1 col-sm-3">
    <div class="">

      <img class="img-responsive img-circle author-image " src="images/author.jpg" alt="">
      <h2>About Me</h2>
      <blockquote><p class="author-about">Hi, My Name is <strong>Jai Bhutani</strong> I am a Passionate Programmer, currently persuing B.C.A from Career Point University, Kota. i'm currently Learning Web Development using PHP, HTML, CSS, SQL, JavaScript,Bootstrap.</p></blockquote>
  </div>
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
