<?php
require_once("include/DB.php");
require_once("include/sessions.php");
require_once("include/functions.php");
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
    redirect_to("demo.php");
  }else {
    $_SESSION["error_message"]="Failed to change slider";
    redirect_to("demo.php");
  }
}elseif (isset($_POST['submit2'])) {
  $target="slider/".basename($_FILES['image2']['name']);
  $caption=$_POST['caption2'];
  $discription=$_POST['discription2'];
  $image_name=$_FILES['image2']['name'];
  $query="INSERT INTO slider(name,caption,discription)VALUES('$image_name','$caption','$discription')";
  $execute=mysql_query($query);
    move_uploaded_file($_FILES['image2']['tmp_name'],$target);
  if ($execute) {
    $_SESSION["success_message"]="Slider Changed successfully";
    redirect_to("demo.php");
  }else {
    $_SESSION["error_message"]="Failed to change slider";
    redirect_to("demo.php");
  }
}elseif (isset($_POST['submit3'])) {
  $target="slider/".basename($_FILES['image3']['name']);
  $caption=$_POST['caption3'];
  $discription=$_POST['discription3'];
  $image_name=$_FILES['image3']['name'];
  $query="INSERT INTO slider(name,caption,discription)VALUES('$image_name','$caption','$discription')";
  $execute=mysql_query($query);
    move_uploaded_file($_FILES['image3']['tmp_name'],$target);
  if ($execute) {
    $_SESSION["success_message"]="Slider Changed successfully";
    redirect_to("demo.php");
  }else {
    $_SESSION["error_message"]="Failed to change slider";
    redirect_to("demo.php");
  }
}elseif (isset($_POST['submit4'])) {
  $target="slider/".basename($_FILES['image4']['name']);
  $caption=$_POST['caption4'];
  $discription=$_POST['discription4'];
  $image_name=$_FILES['image4']['name'];
  $query="INSERT INTO slider(name,caption,discription)VALUES('$image_name','$caption','$discription')";
  $execute=mysql_query($query);
    move_uploaded_file($_FILES['image4']['tmp_name'],$target);
  if ($execute) {
    $_SESSION["success_message"]="Slider Changed successfully";
    redirect_to("demo.php");
  }else {
    $_SESSION["error_message"]="Failed to change slider";
    redirect_to("demo.php");
  }
}else {
  # code...
}
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
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

      <div class="container">


      <div class="row ">

<?php
echo message(); echo success_message();
for($i=1; $i <=4 ; $i++) {
  ?>

    <div class="thumbnail1 col-sm-4 col-sm-offset-1">

                  <h2 class="h2 text-center" >Image<?php echo $i; ?></h2>
                  <img class="img-responsive thumbnail" src="upload/1.PNG" alt="">
                  <form class="form" action="demo.php" method="post" enctype="multipart/form-data">
                    <fieldset>
                      <div class="form-group">
                      <label for="old<?php echo $i; ?>"><span class="h5 ">Old Image Name:</span> </label>
                      <input disabled value="d" class="form-control" type="text" name="old<?php echo $i; ?>" id="old<?php echo $i; ?>">
                      </div>

                      <div class="form-group">
                      <label for="slider<?php echo $i; ?>"><span class="h5">Select New Image:</span> </label>
                      <input class="btn btn-primary" type="file" name="image<?php echo $i; ?>" id="slider<?php echo $i; ?>" accept="image/*" >
                    </div>

                      <div class="form-group">
                      <label for="caption<?php echo $i; ?>"><span class="h5">Caption:</span> </label>
                      <input class="form-control" type="text" name="caption<?php echo $i; ?>" id="caption<?php echo $i; ?>">
                      </div>
                      <div class="form-group">
                      <label for="Discription<?php echo $i; ?>"><span class="h5">Discription:</span> </label>
                      <textarea class="form-control"  rows="4" name="discription<?php echo $i; ?>" id="Discription<?php echo $i; ?>" ></textarea>

                      </div>
                      <input class="btn btn-success btn-block"type="submit" name="submit<?php echo $i; ?>" value="Save">

                    </fieldset>
                  </form>
    </div>


<?php } ?>
</div>
  </div>
    </body>
  </html>
