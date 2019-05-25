<?php
require_once("include/sessions.php");
require_once("include/functions.php");
require_once("include/DB.php");
confirm_login();

?>

<?php
$connectingDB;
$admin=$_SESSION['Username'];
$id=$_GET['id'];
$query="UPDATE comments SET status='ON' , approver='$admin' WHERE id='$id' ";
$execute=mysql_query($query);
if ($execute) {
  $_SESSION['success_message']="Comment Approved Successfully";
  redirect_to("comments.php");
}
else {
  $_SESSION['error_message']="Failed to approve Comment";
  redirect_to("comments.php");
}
 ?>
