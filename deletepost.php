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

$admin="jai";




  $ID=$_GET['delete'];
  global $connectingDB;
  $query="DELETE FROM admin_panel WHERE id='$ID'";
  $execute=mysql_query($query);

  if ($execute) {
    $_SESSION["success_message"]="Post Deleted Successfully";
    redirect_to("dashboard.php");
  }else {
    $_SESSION["error_message"]="Failed to Delete Post";
    redirect_to("dashboard.php");
  }

}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Delete Post</title>
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
        <li><a href="termsofuse.php">Terms Of Use</a></li>
      </ul>
    </li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> &nbsp;Manage&nbsp;Admins</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-comment"></span> &nbsp;Comments</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-th"></span> &nbsp;Livepreview</a></li>
        <li><a href="slider.php"><span class="glyphicon glyphicon-sound-stereo"></span> &nbsp;Manage Slider</a></li>
        <li><a href="video.php"><span class="glyphicon glyphicon-facetime-video"></span> &nbsp;Manage video</a></li>
        <li><a href="ads.php"><span class="glyphicon glyphicon glyphicon-usd"></span> &nbsp;Manage Ads</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> &nbsp;Logout</a></li>
        </ul>
      </div> <!-- ending side area -->
        <div class="col-sm-10">  <!-- main area -->
          <h1>Delete Post</h1>
  <?php echo message(); echo success_message(); ?>
          <hr>

<?php
$searchQuery=$_GET['delete'];
$query="SELECT * FROM admin_panel WHERE id='$searchQuery'";
$execute=mysql_query($query);
while ($datarows=mysql_fetch_array($execute)) {
          $Id=$datarows['id'];
          $Title=$datarows['title'];
          $Category=$datarows['category'];
          $Image=$datarows['image'];
          $Post=$datarows['post'];
}
 ?>

          <form class="form" action="deletepost.php?delete=<?php echo $searchQuery; ?>" method="post"enctype="multipart/form-data" >
            <fieldset>
              <div class="form-group">
              <label for="Title"><span class="h5">Title For Post:</span> </label>
              <input disabled value='<?php echo $Title; ?>' class="form-control" type="text" name="title" id="Title" placeholder="Title">
              </div>
              <div class="form-group">
              <label for="CategorySelect"><span class="h5">Category:</span> </label>
              <select disabled class="form-control" name="category" id="CategorySelect">
                <?php
                global $connectingDB;
                $viewQuery="SELECT * FROM category ORDER BY datetime DESC";
                $execute=mysql_query($viewQuery);

                while ($datarows=mysql_fetch_array($execute)) {
                  $categoryName=$datarows['name'];


                 ?>
                 <option value= "<?php echo $categoryName; ?>" <?php if ($Category==$categoryName ) {
                   echo 'selected="selected"';
                 } ?>><?php echo $categoryName; ?></option>

                     <!-- <option value="seo"<?php if($result['interest'] == 'seo'){ echo ' selected="selected"'; } ?>>SEO</option> -->

               <?php } ?>
             </select>
              </div>
              <div class="form-group">
                Banner: <img disabled src="upload/<?php echo $Image; ?>"  width="200px"; height="100px;"> <br> <br>

              </div>
              <div class="form-group">
              <label for="Post"><span class="h5">Post content:</span> </label>
          <textarea disabled class="form-control"id="post "name="post" rows="8" cols="80" placeholder="Content Goes Here...."><?php echo $Post; ?> </textarea>
              </div>
<div class="form-group">
              <input class="btn btn-danger btn-block"type="submit" name="submit" value="Delete Post">
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
    CKEDITOR.replace('post')
  </script>
  </body>
</html>
