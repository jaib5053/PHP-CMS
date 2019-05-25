<?php
require_once("include/sessions.php");
require_once("include/functions.php");
require_once("include/DB.php");
confirm_login();

?>
<?php

if(isset($_POST['submit'])) {
$category_name=mysql_real_escape_string($_POST['CategoryName']);
date_default_timezone_set("Asia/Kolkata");
$currenttime=time();
$Datetimes=strftime('%B-%d-%Y %H:%M:%S',$currenttime);
$admin=$_SESSION['Username'];
if(empty($category_name)) {
  $_SESSION["error_message"]="Enter Category Name";
  redirect_to("categories.php");
}elseif (strlen($category_name)>99) {
  $_SESSION["error_message"]="Too Long Category Name";
  redirect_to("categories.php");
}else{
  global $connectingDB;
  $query="INSERT INTO category(name, datetime, creatorname) VALUES ('$category_name', '$Datetimes', '$admin')";
  $execute=mysql_query($query);
  if ($execute){
    $_SESSION["success_message"]="Category Added Successfully";
    redirect_to("categories.php");
  }
  else{
    $_SESSION["error_message"]="Failed to Add Category";
    redirect_to("categories.php");
  }
}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Categories</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adminstyles.css">
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
        <li><a href="AddNewPost.php"><span class="glyphicon glyphicon-list-alt"></span> &nbsp;Add&nbsp;New&nbsp;Post</a></li>
        <li class="active"><a href="categories.php"><span class="glyphicon glyphicon-tags"></span> &nbsp;Categories</a></li>
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
          <h1>Manage Categories</h1>
  <?php echo message(); echo success_message(); ?>
          <hr>
          <form class="form" action="categories.php" method="post">
            <fieldset>
              <div class="form-group">


              <label for="category_name"><span class="h5">Enter Category Name:</span> </label>
              <input class="form-control" type="text" name="CategoryName" id="category_name" placeholder="Category Name">
              </div>
              <br>
              <input class="btn btn-success btn-block"type="submit" name="submit" value="Add Category">
<br>
            </fieldset>
          </form>
  <div class="table-responsive">


<table class="table table-striped table-hover">
  <tr>
    <th>Sr.No.</th>
    <th>Category Name</th>
    <th>Date And Time</th>
    <th>Creator Name</th>
    <th>Action</th>
  </tr>
<?php
global $connectingDB;
$viewQuery="SELECT * FROM category ORDER BY id desc";
$execute=mysql_query($viewQuery);
$srno=0;
while ($datarows=mysql_fetch_array($execute)) {
  $ID=$datarows['id'];
  $DATETIME=$datarows['datetime'];
  $NAME=$datarows['name'];
  $ADMIN=$datarows['creatorname'];
$srno++;
 ?>
 <tr>
   <td><?php echo $srno; ?></td>
   <td><?php echo $NAME; ?></td>
   <td><?php echo $DATETIME; ?></td>
   <td><?php echo $ADMIN; ?></td>
   <td><a href="categorydelete.php?delete=<?php echo $ID;?>"> <span class="btn btn-danger btn-sm"> Delete </span>  </a> </td>
 </tr>
<?php } ?>
</table>

</div>
        </div>  <!-- Ending main area -->

    </div>
  </div>
  <div class="footer ">
    <p>Theme By | Jai Bhutani | &copy; 2018--All Rights Reserved</p>
  </div>

  </body>
</html>
