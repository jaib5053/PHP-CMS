<?php
require_once("include/sessions.php");
require_once("include/functions.php");
require_once("include/DB.php");
confirm_login();

?>

<?php
$connectingDB;
$id=$_GET['id'];
$query="UPDATE comments SET status='OFF' WHERE id='$id' ";
$execute=mysql_query($query);
if ($execute) {
  $_SESSION['success_message']="Comment Dis-Approved Successfully";
  redirect_to("comments.php");
}
else {
  $_SESSION['error_message']="Failed to Dis-Approve Comment";
  redirect_to("comments.php");
}
 ?>
