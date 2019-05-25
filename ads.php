<?php
require_once("include/sessions.php");
require_once("include/functions.php");
require_once("include/DB.php");
confirm_login();
?>
<?php
if (isset($_POST['submit1'])) {
  $side=$_POST['side'];
  $query="UPDATE ads SET side='$side' WHERE id=1";
  $execute=mysql_query($query);
  if ($execute) {
    $_SESSION["success_message"]="Updated Successfully";
    redirect_to("ads.php");
  }else {
    $_SESSION["error_message"]="Failed to Update";
    redirect_to("ads.php");
  }
}elseif (isset($_POST['submit2'])) {
  $inter=$_POST['inter'];
  $query="UPDATE ads SET inter='$inter' WHERE id=1";
  $execute=mysql_query($query);
  if ($execute) {
    $_SESSION["success_message"]="Updated Successfully";
    redirect_to("ads.php");
  }else {
    $_SESSION["error_message"]="Failed to Update";
    redirect_to("ads.php");
  }
}elseif (isset($_POST['submit3'])) {
  $footer=$_POST['footer'];
  $query="UPDATE ads SET footer='$footer' WHERE id=1";
  $execute=mysql_query($query);
  if ($execute) {
    $_SESSION["success_message"]="Updated Successfully";
    redirect_to("ads.php");
  }else {
    $_SESSION["error_message"]="Failed to Update";
    redirect_to("ads.php");
  }
}else {
  # code...
}


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Manage Advertisements</title>
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
        <li ><a href="categories.php"><span class="glyphicon glyphicon-tags"></span> &nbsp;Categories</a></li>
        <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-duplicate"></span>&nbsp; Manage Pages
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="privacypolicy.php">Privacy Policy</a></li>
      <li><a href="disclaimer.php">Disclaimer</a></li>
      <li><a href="ads.php">Terms Of Use</a></li>
    </ul>
  </li>
  <li ><a href="social.php"><span class="glyphicon glyphicon-link"></span> &nbsp;Social Media</a></li>
        <li ><a href="admins.php"><span class="glyphicon glyphicon-user"></span> &nbsp;Manage&nbsp;Admins</a></li>
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
        <li ><a href="slider.php"><span class="glyphicon glyphicon-sound-stereo"></span> &nbsp;Manage Slider</a></li>
        <li ><a href="video.php"><span class="glyphicon glyphicon-facetime-video"></span> &nbsp;Manage video</a></li>
        <li class="active"><a href="ads.php"><span class="glyphicon glyphicon glyphicon-usd"></span> &nbsp;Manage Ads</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> &nbsp;Logout</a></li>
        </ul>
      </div> <!-- ending side area -->
        <div class="col-sm-10">  <!-- main area -->
          <h1>Manage Advertisement</h1>
  <?php echo message(); echo success_message(); ?>
          <hr>
          <form class="form" action="ads.php" method="post">
            <fieldset>
              <div class="form-group">
              <label for="Sidebar"><span class="h3">Sidebar ad unit:</span> </label><br>
              <textarea name="side" rows="5" cols="80"id="Sidebar"><?php ads('side'); ?></textarea><br> <br>
                <input class="btn btn-success"type="submit" name="submit1" value="Save">


              </div>
              <div class="form-group">
              <label for="Inter"><span class="h3">Inter post ad unit:</span> </label>
<br>
              <textarea name="inter" rows="5" cols="80" id="Inter"><?php ads('inter'); ?></textarea><br> <br>
              <input class="btn btn-success"type="submit" name="submit2" value="Save">

              </div>
              <div class="form-group">

              <label for="footer"><span class="h3">Footer ad unit:</span> </label><br>
            <textarea name="footer" rows="5" cols="80"id="footer"><?php ads('footer'); ?></textarea><br> <br>
              <input class="btn btn-success"type="submit" name="submit3" value="Save">

              </div>
              <br>

<br>
            </fieldset>
          </form>

        </div>  <!-- Ending main area -->

    </div>
  </div>
  <div class="footer ">
    <p>Theme By | Jai Bhutani | &copy; 2018--All Rights Reserved</p>
  </div>

  </body>
</html>
