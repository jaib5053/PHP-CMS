<?php
require_once("include/sessions.php");
require_once("include/functions.php");
require_once("include/DB.php");
confirm_login();

?>
<?php
if (isset($_POST['submit1'])) {
  $fb=$_POST['facebook'];
  insert_social('facebook',$fb);
}elseif (isset($_POST['submit2'])) {
  $twitter=$_POST['twitter'];
  insert_social('twitter',$twitter);
}elseif (isset($_POST['submit3'])) {
  $insta=$_POST['instagram'];
  insert_social('instagram',$insta);
}elseif (isset($_POST['submit4'])) {
  $g=$_POST['google'];
  insert_social('google',$g);
}else {
  # code...
}


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Manage Social Links</title>
    <style media="screen">
    .thumbnail1 {
  background:   #ecf0f1 ;
   border: 2px solid  #85929e ;

}
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adminstyles.css">
      <script src="js/jquery-3.3.1.js"> </script>
      <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>


    <script src="js/bootstrap.min.js"></script>


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
      <li><a href="termsofuse.php">Terms Of Use</a></li>
    </ul>
  </li>
  <li class="active"><a href="social.php"><span class="glyphicon glyphicon-link"></span> &nbsp;Social Media</a></li>
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
        <li><a href="video.php"><span class="glyphicon glyphicon-facetime-video"></span> &nbsp;Manage video</a></li>
        <li><a href="ads.php"><span class="glyphicon glyphicon glyphicon-usd"></span> &nbsp;Manage Ads</a></li>


        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> &nbsp;Logout</a></li>
        </ul>
      </div> <!-- ending side area -->
        <div class="col-sm-10">  <!-- main area -->
          <h1>Manage Social Media</h1>
  <?php echo message(); echo success_message(); ?>
          <hr>
          <form class="form" action="social.php" method="post">
            <fieldset>
              <div class="form-group"><i class="fab fa-facebook-square fa-3x"></i> &nbsp;
              <label ><span class="h3 ">Facebook:</span> </label><br>
            <input type="text" name="facebook" value="<?php show_social('facebook'); ?>">
                <input class="btn btn-success"type="submit" name="submit1" value="Save">
              </div>
              <div class="form-group"><i class="fab fa-twitter-square fa-3x"></i>&nbsp;
              <label for="Inter"><span class="h3">Twitter:</span> </label>
        <br>
            <input type="text" name="twitter" value="<?php show_social('twitter'); ?>">
              <input class="btn btn-success"type="submit" name="submit2" value="Save">

              </div>
              <div class="form-group"><i class="fab fa-instagram fa-3x"></i>&nbsp;

              <label for="footer"><span class="h3">Instagram:</span> </label><br>
          <input type="text" name="instagram" value="<?php show_social('instagram'); ?>">
              <input class="btn btn-success"type="submit" name="submit3" value="Save">

              </div>
              <div class="form-group"><i class="fab fa-google-plus-square fa-3x"></i>&nbsp;

              <label for="footer"><span class="h3">Google Plus:</span> </label><br>
          <input type="text" name="google" value="<?php show_social('google'); ?>">
              <input class="btn btn-success"type="submit" name="submit4" value="Save">

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
