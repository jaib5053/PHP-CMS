<?php
require_once("include/sessions.php");
require_once("include/functions.php");
$_SESSION['Username']=null;
session_destroy();
redirect_to("login.php");

 ?>
