<?php
require_once("include/sessions.php");
require_once("include/functions.php");
require_once("include/DB.php");
confirm_login();

?>



<?php
$connectingDB;
$id=$_GET['delete'];
$query="DELETE FROM category WHERE id='$id'";
$execute=mysql_query($query);
if ($execute) {
  $_SESSION['success_message']="Category Delete Successfully";
  redirect_to("categories.php");
}
else {
  $_SESSION['error_message']="Failed to Delete Category";
  redirect_to("categories.php");
}
 ?>
