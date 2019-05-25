<?php
require_once("include/DB.php");
require_once("include/sessions.php");
require_once("include/functions.php");

?>
<?php confirm_login(); ?>
<!DOCTYPE html>
<html>
  <head>
    <style media="screen">
      .pagi{
        margin-top: -35px;
      }

    </style>
    <meta charset="utf-8">
    <title>Admin Panel</title>
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
        <li class="active"><a href="dashboard.php?page=1"><span class="glyphicon glyphicon-home"></span> &nbsp;Dashboard</a></li>
        <li><a href="AddNewPost.php"><span class="glyphicon glyphicon-list-alt"></span> &nbsp;Add&nbsp;New&nbsp;Post</a></li>
        <li><a href="categories.php"><span class="glyphicon glyphicon-tags"></span> &nbsp;Categories</a></li>
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
        <li><a href="comments.php"><span class="glyphicon glyphicon-comment">
        </span> &nbsp;Comments
        <?php
        $connectingDB;
        $querycomm="Select count(*) from comments where status='OFF'";
        $executecomm=mysql_query($querycomm);
        $rowscomm=mysql_fetch_array($executecomm);
        $totalcomm=array_shift($rowscomm);
        if ($totalcomm>0) {
        ?>
        <span class="label label-warning pull-right"><?php echo $totalcomm; ?> </span>
        <?php } ?></a>

      </li>
        <li><a href="blog.php?page=1" target="_blank"><span class="glyphicon glyphicon-th"></span> &nbsp;Livepreview</a></li>
        <li><a href="slider.php"><span class="glyphicon glyphicon-sound-stereo"></span> &nbsp;Manage Slider</a></li>
        <li><a href="video.php"><span class="glyphicon glyphicon-facetime-video"></span> &nbsp;Manage video</a></li>
        <li><a href="ads.php"><span class="glyphicon glyphicon glyphicon-usd"></span> &nbsp;Manage Ads</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> &nbsp;Logout</a></li>
        </ul>
      </div> <!-- ending side area -->
        <div class="col-sm-10 scroll">  <!-- main area -->
          <h1>Admin Panel</h1>
            <?php echo message(); echo success_message(); ?>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <tr>
                <th>No.</th>
                <th>PostTitle</th>
                <th>Date & Time</th>
                <th>Author</th>
                <th>Category</th>
                <th>Banner</th>
                <th>Comments</th>
                <th>Action</th>
                <th>Details</th>
              </tr>
          <?php
          if(isset($_GET['page'])) {
          $page=$_GET['page'];
          if ($page<=0) {
            $showpagesfrom=0;
          }else {
              $showpagesfrom=($page*5)-5;
          }
          $query="SELECT * FROM admin_panel ORDER BY id desc LIMIT $showpagesfrom,5";}
          else{
            $query="SELECT * FROM admin_panel ORDER BY id desc  LIMIT 0,5";
          }
          $execute=mysql_query($query);
          if ($_GET['page']>1) {
            $sr=($_GET['page'])*5-5;
          }else {
            $sr=0;
          }

          while ($datarows=mysql_fetch_array($execute)) {
                  $id=$datarows['id'];
                    $datetime=$datarows['datetime'];
                    $category=$datarows['category'];
                    $admin=$datarows['author'];
                    $banner=$datarows['image'];
                    $title=$datarows['title'];
                    $post=$datarows['post'];
                    $sr++;
           ?>
<tr>
  <td><?php echo $sr; ?></td>
  <td><?php
if (strlen($title)>8) {
  $title=substr($title,0,12);
}

echo $title.'...';
?></td>
  <td><?php echo $datetime; ?></td>
  <td><?php echo $admin; ?></td>
  <td><?php echo $category; ?></td>
  <td><img src="upload/<?php echo $banner;?>" style="width:160px;height:70px;"></td>
  <td>
<?php
$connectingDB;
$queryapproved="Select count(*) from comments where post_id='$id' and status ='ON'";
$executeapproved=mysql_query($queryapproved);
$rowsapproved=mysql_fetch_array($executeapproved);
$totalapproved=array_shift($rowsapproved);
if ($totalapproved>0) {
?>



<span class="label label-success pull-right"><?php echo $totalapproved; ?></span>
<?php } ?>

<?php
$connectingDB;
$querydisapproved="Select count(*) from comments where post_id='$id' and status ='OFF'";
$executedisapproved=mysql_query($querydisapproved);
$rowsdisapproved=mysql_fetch_array($executedisapproved);
$totaldisapproved=array_shift($rowsdisapproved);
if ($totaldisapproved>0) {
?>



<span class="label label-danger "><?php echo $totaldisapproved; ?></span>
<?php } ?>
  </td>
  <td><a href="postedit.php?edit=<?php echo $id; ?> "><span class="btn btn-warning btn-sm">Edit</span></a>
<a href="deletepost.php?delete=<?php echo $id; ?>" ><span class="btn btn-danger btn-sm">Delete</span></a></td>
    <td><a href="fullpost.php?id=<?php echo $id; ?>"target="_blank" > <span class="btn btn-primary" >Live Preview</span></a> </td>
</tr>
<?php } ?>

         </table>
   </div>
       <nav class="pagi">
 <ul class="pagination">
         <?php
    if (isset($_GET['page'])) {
      if ($page>1) { ?>
        <li><a href="dashboard.php?page=<?php echo $page-1; ?>">&laquo;</a> </li>
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
    <li class="active"> <a href="dashboard.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php }else{
     ?>
    <li> <a href="dashboard.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php }} ?>
    <?php if($page<$postperpage) {
    ?>
    <li><a href="dashboard.php?page=<?php echo $page+1; ?>">&raquo;</a> </li>
    <?php } ?>
    </ul>
     </nav>
    <?php } ?>
  </div>  <!-- Ending main area -->

    </div>
  </div>
  <div class="footer ">
    <p>Theme By | Jai Bhutani | &copy; 2018--All Rights Reserved</p>
  </div>

  </body>
</html>
