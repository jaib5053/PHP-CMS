<?php
require_once("include/DB.php");
require_once("include/sessions.php");
require_once("include/functions.php");
confirm_login();

?>
<?php

if (isset($_POST['submit'])) {
$Title_name=mysql_real_escape_string($_POST['title']);
$category_name=mysql_real_escape_string($_POST['category']);
$post_content=mysql_real_escape_string($_POST['post']);
$image_name=$_FILES['image']['name'];
$target="upload/".basename($_FILES['image']['name']);


date_default_timezone_set("Asia/Kolkata");
$currenttime=time();
$Datetime=strftime('%B-%d-%Y %H:%M:%S',$currenttime);

$admin=$_SESSION['Username'];
if (empty($Title_name)) {
  $_SESSION["error_message"]="Enter Title";
  redirect_to("AddNewPost.php");
}elseif (strlen($Title_name)<2) {
  $_SESSION["error_message"]="Too Short Title";
  redirect_to("AddNewPost.php");}


else {
  global $connectingDB;
  $query="INSERT INTO admin_panel(datetime,category,author,image,title,post) VALUES ('$Datetime','$category_name','$admin','$image_name','$Title_name','$post_content')";
  $execute=mysql_query($query);
  move_uploaded_file($_FILES['image']['tmp_name'],$target);
  if ($execute) {
    $_SESSION["success_message"]="Post Added Successfully";
    redirect_to("AddNewPost.php");
  }else {
    $_SESSION["error_message"]="Failed to Add Post";
    redirect_to("AddNewPost.php");
  }
}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adminstyles.css">
    <!-- <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
      <script>
      tinymce.init({
        selector: '#txtedit'
      });
      </script> -->


      <script src="js/jquery-3.3.1.js"> </script>


    <script src="js/bootstrap.min.js" ></script>

  </head>
  <body>
    <div class="header ">
      <p>Content Management System</p>
    </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2">       <!-- side area -->
        <h1>Dashboard</h1>

        <ul id="side_menu" class="nav flex-column nav-pills nav-stacked" >
        <li ><a href="dashboard.php?page=1"><span class="glyphicon glyphicon-home"></span> &nbsp;Dashboard</a></li>
        <li class="active"><a href="AddNewPost.php"><span class="glyphicon glyphicon-list-alt"></span> &nbsp;Add&nbsp;New&nbsp;Post</a></li>
        <li ><a href="categories.php"><span class="glyphicon glyphicon-tags"></span> &nbsp;Categories</a></li>
        <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-duplicate"></span>&nbsp; Manage Pages
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="privacypolicy.php">Privacy Policy</a></li>
      <li><a href="disclaimer.php">Disclaimer</a></li>
      <li><a href="termsofuse.php">Terms Of Use</a></li>
    </ul>
  </li>
  <li ><a href="social.php"><span class="glyphicon glyphicon-link"></span> &nbsp;Social Media</a></li>
        <li><a href="admins.php"><span class="glyphicon glyphicon-user"></span> &nbsp;Manage&nbsp;Admins</a></li>
        <li><a href="comments.php"><span class="glyphicon glyphicon-comment"></span> &nbsp;Comments
          <?php
          $connectingDB;
          $querycomm="Select count(*) from comments where status='OFF'";
          $executecomm=mysql_query($querycomm);
          $rowscomm=mysql_fetch_array($executecomm);
          $totalcomm=array_shift($rowscomm);
          if ($totalcomm>0) {
          ?>
          <span class="label label-warning pull-right"><?php echo $totalcomm; ?> </span>
          <?php } ?>
        </a></li>
        <li><a href="blog.php?page=1" target="_blank"><span class="glyphicon glyphicon-th"></span> &nbsp;Livepreview</a></li>
        <li><a href="slider.php"><span class="glyphicon glyphicon-sound-stereo"></span> &nbsp;Manage Slider</a></li>
        <li><a href="video.php"><span class="glyphicon glyphicon-facetime-video"></span> &nbsp;Manage video</a></li>
        <li><a href="ads.php"><span class="glyphicon glyphicon glyphicon-usd"></span> &nbsp;Manage Ads</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> &nbsp;Logout</a></li>
        </ul>
      </div> <!-- ending side area -->
        <div class="col-sm-10">  <!-- main area -->
          <h1>Add New Post</h1>
  <?php echo message(); echo success_message(); ?>
          <hr>
          <form class="form" action="AddNewPost.php" method="post"enctype="multipart/form-data" >
            <fieldset>
              <div class="form-group">
              <label for="Title"><span class="h5">Enter Title For Post:</span> </label>
              <input class="form-control" type="text" name="title" id="Title" placeholder="Title">
              </div>
              <div class="form-group">
              <label for="CategorySelect"><span class="h5">Select Category:</span> </label>
              <select class="form-control" name="category" id="CategorySelect">
                <?php
                global $connectingDB;
                $viewQuery="SELECT * FROM category ORDER BY datetime DESC";
                $execute=mysql_query($viewQuery);

                while ($datarows=mysql_fetch_array($execute)) {
                  $categoryName=$datarows['name'];


                 ?>
                 <option><?php echo $categoryName; ?></option>

               <?php } ?>
             </select>
              </div>
              <div class="form-group">
              <label for="Image"><span class="h5">Upload Image Banner</span> </label>
              <input class=" btn btn-primary btn-md " type="file" name="image" id="Image">
              </div>
              <div class="form-group">
              <label for="Post"><span class="h5">Enter Post content:</span> </label>
          <textarea class="form-control"id="txtedit"name="post" rows="8" cols="80" placeholder="Content Goes Here...."></textarea>
              </div>
<div class="form-group">
              <input class="btn btn-success btn-block"type="submit" name="submit" value="Add Post">
</div>
            </fieldset>
          </form>






        </div>  <!-- Ending main area -->

    </div>
  </div>
  <div class="container-fluid footer panel panel-footer">
    <p>Theme By | Jai Bhutani | &copy; 2018--All Rights Reserved</p>
  </div>

<script src="//cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('txtedit')
</script>

  </body>
</html>
