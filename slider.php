<?php
require_once("include/sessions.php");
require_once("include/functions.php");
require_once("include/DB.php");
confirm_login();

?>



<?php
if (isset($_POST['submit1'])) {
$target="slider/".basename($_FILES['image1']['name']);
  $caption=$_POST['caption1'];
  $discription=$_POST['discription1'];
  $image_name=$_FILES['image1']['name'];
  $query="UPDATE slider SET name='$image_name',caption='$caption',discription='$discription' WHERE id=1";
  $execute=mysql_query($query);
move_uploaded_file($_FILES['image1']['tmp_name'],$target);
  if ($execute) {

    $_SESSION["success_message"]="Slider Changed successfully";
    redirect_to("slider.php");
  }else {
    $_SESSION["error_message"]="Failed to change slider";
    redirect_to("slider.php");
  }
}elseif (isset($_POST['submit2'])) {
  $target="slider/".basename($_FILES['image2']['name']);
  $caption=$_POST['caption2'];
  $discription=$_POST['discription2'];
  $image_name=$_FILES['image2']['name'];
    $query="UPDATE slider SET name='$image_name',caption='$caption',discription='$discription' WHERE id=2";
  $execute=mysql_query($query);
    move_uploaded_file($_FILES['image2']['tmp_name'],$target);
  if ($execute) {
    $_SESSION["success_message"]="Slider Changed successfully";
    redirect_to("slider.php");
  }else {
    $_SESSION["error_message"]="Failed to change slider";
    redirect_to("slider.php");
  }
}elseif (isset($_POST['submit3'])) {
  $target="slider/".basename($_FILES['image3']['name']);
  $caption=$_POST['caption3'];
  $discription=$_POST['discription3'];
  $image_name=$_FILES['image3']['name'];
    $query="UPDATE slider SET name='$image_name',caption='$caption',discription='$discription' WHERE id=3";
  $execute=mysql_query($query);
    move_uploaded_file($_FILES['image3']['tmp_name'],$target);
  if ($execute) {
    $_SESSION["success_message"]="Slider Changed successfully";
    redirect_to("slider.php");
  }else {
    $_SESSION["error_message"]="Failed to change slider";
    redirect_to("slider.php");
  }
}elseif (isset($_POST['submit4'])) {
  $target="slider/".basename($_FILES['image4']['name']);
  $caption=$_POST['caption4'];
  $discription=$_POST['discription4'];
  $image_name=$_FILES['image4']['name'];
    $query="UPDATE slider SET name='$image_name',caption='$caption',discription='$discription' WHERE id=4";
  $execute=mysql_query($query);
    move_uploaded_file($_FILES['image4']['tmp_name'],$target);
  if ($execute) {
    $_SESSION["success_message"]="Slider Changed successfully";
    redirect_to("slider.php");
  }else {
    $_SESSION["error_message"]="Failed to change slider";
    redirect_to("slider.php");
  }
}else {
  # code...
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Manage Slider</title>
    <style media="screen">
    .slide{
      max-height: 130px;
    }
    .thumbnail1 {
  background:   #ecf0f1 ;
   border: 2px solid  #85929e ;
   margin-bottom: 10px;
   margin-top: 10px;
}
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adminstyles.css">
      <script src="js/jquery-3.3.1.js"> </script>


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
        <li class="active"><a href="slider.php"><span class="glyphicon glyphicon-sound-stereo"></span> &nbsp;Manage Slider</a></li>
        <li><a href="video.php"><span class="glyphicon glyphicon-facetime-video"></span> &nbsp;Manage video</a></li>
        <li><a href="ads.php"><span class="glyphicon glyphicon glyphicon-usd"></span> &nbsp;Manage Ads</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> &nbsp;Logout</a></li>
        </ul>
      </div> <!-- ending side area -->
        <div class="col-sm-10 scroll">  <!-- main area -->
          <h1>Manage Image Slider</h1>
  <?php echo message(); echo success_message(); ?>
          <hr>
          <div class="container">


          <div class="row ">

      <?php
      echo message(); echo success_message();
      for($i=1; $i <=4 ; $i++) {
      ?>

        <div class="thumbnail1 col-sm-4 col-sm-offset-1">

                      <h2 class="h2 text-center" >Image<?php echo $i; ?></h2>
                      <img class="img-responsive thumbnail slide" src="slider/<?php imgname($i);?>" alt="">
                      <form class="form" action="slider.php" method="post" enctype="multipart/form-data">
                        <fieldset>
                          <div class="form-group">
                          <label for="old<?php echo $i; ?>"><span class="h5 ">Old Image Name:</span> </label>
                          <input disabled value="<?php imgname($i); ?>" class="form-control" type="text" name="old<?php echo $i; ?>" id="old<?php echo $i; ?>">
                          </div>

                          <div class="form-group">
                          <label for="slider<?php echo $i; ?>"><span class="h5">Select New Image:</span> </label>
                          <input class="btn btn-primary" type="file" name="image<?php echo $i; ?>" id="slider<?php echo $i; ?>" accept="image/*" >
                        </div>

                          <div class="form-group">
                          <label for="caption<?php echo $i; ?>"><span class="h5">Caption:</span> </label>
                          <input class="form-control" type="text" name="caption<?php echo $i; ?>" id="caption<?php echo $i; ?>" value="<?php imgcaption($i) ?>">
                          </div>
                          <div class="form-group">
                          <label for="Discription<?php echo $i; ?>"><span class="h5">Discription:</span> </label>
                          <textarea class="form-control"  rows="4" name="discription<?php echo $i; ?>" id="Discription<?php echo $i; ?>" ><?php imgdisc($i); ?> </textarea>

                          </div>
                          <input class="btn btn-success btn-block"type="submit" name="submit<?php echo $i; ?>" value="Save">
<br>
                        </fieldset>
                      </form>
        </div>


      <?php } ?>
      </div>
      </div>

</div>
<br>

        </div>  <!-- Ending main area -->
<br>
    </div>
  </div>
  <div class="footer ">
    <p>Theme By | Jai Bhutani | &copy; 2018--All Rights Reserved</p>
  </div>

  </body>
</html>
