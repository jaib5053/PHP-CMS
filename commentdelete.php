<?php
require_once("include/sessions.php");
require_once("include/functions.php");
require_once("include/DB.php");
confirm_login();

?>



<?php
$connectingDB;
$id=$_GET['delete'];
$query="DELETE FROM comments WHERE id='$id'";
$execute=mysql_query($query);
if ($execute) {
  $_SESSION['success_message']="Comment Deleted Successfully";
  redirect_to("comments.php");
}
else {
  $_SESSION['error_message']="Failed to Delete Comment";
  redirect_to("comments.php");
}
 ?>
