<?php
require_once("include/DB.php");
require_once("include/sessions.php");
function redirect_to($NewLocation){
header("Location:".$NewLocation);
  exit;
}
function login_attempt($username,$password){
  $query="SELECT * from admin WHERE username='$username' AND password='$password'";
  $execute=mysql_query($query);
  if ($admin=mysql_fetch_assoc($execute)) {
    return $admin;
  }else {
    return null;
  }
}
function login(){
  if (isset($_SESSION['Username'])) {
    return true;
  }
}
function confirm_login(){
  if (!login()) {
    $_SESSION["error_message"]="Login Required";
    redirect_to("login.php");
  }
}
function imgname($id){

  $select="SELECT name FROM slider WHERE id='$id'";
  $select_execute=mysql_query($select);
  $imagecaption=mysql_fetch_array($select_execute);
  $imgcaption=$imagecaption['name'];
  echo $imgcaption;

}
function imgcaption($id){

  $select="SELECT caption FROM slider WHERE id='$id'";
  $select_execute=mysql_query($select);
  $imageName=mysql_fetch_array($select_execute);
  $imgname=$imageName['caption'];
  echo $imgname;

}
function imgdisc($id){

  $select="SELECT discription FROM slider WHERE id='$id'";
  $select_execute=mysql_query($select);
  $imagedisc=mysql_fetch_array($select_execute);
  $imgdisc=$imagedisc['discription'];
  echo $imgdisc;

}
function video()
{
  $select="SELECT url FROM video WHERE id=1";
  $select_execute=mysql_query($select);
  $video=mysql_fetch_array($select_execute);
  $vid=$video['url'];
  echo $vid;
}
function pages($page)
{
  $select="SELECT $page FROM pages WHERE id=1";
  $select_execute=mysql_query($select);
  $text=mysql_fetch_array($select_execute);
  $tex=$text[$page];
  echo $tex;
}
function ads($name)
{
  $select="SELECT $name FROM ads WHERE id=1";
  $select_execute=mysql_query($select);
  $ads=mysql_fetch_array($select_execute);
  $ad=$ads[$name];
  echo $ad;
}
function insert_social($name,$url){
  $query="UPDATE social SET $name='$url'WHERE id=1 ";
  $execute=mysql_query($query);
  if ($execute) {
    $_SESSION["success_message"]="Updated Successfully";
    redirect_to("social.php");
  }else {
    $_SESSION["error_message"]="Failed to Update";
    redirect_to("social.php");
  }
}
function show_social($name)
{
  $select="SELECT $name FROM social WHERE id=1";
  $select_execute=mysql_query($select);
  $s=mysql_fetch_array($select_execute);
  $social=$s[$name];
  echo $social;
}
 ?>
