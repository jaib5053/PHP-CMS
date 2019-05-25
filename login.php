<?php
require_once("include/DB.php");
require_once("include/sessions.php");
require_once("include/functions.php");
if (isset($_POST['Login'])) {
  $Username=mysql_real_escape_string($_POST['Username']);
  $Password=md5($_POST['Password']);
  $found_account=login_attempt($Username,$Password);
  $_SESSION['Username']=$found_account['username'];
if($found_account){
  $_SESSION["success_message"]="Welcome Back! ".$_SESSION['Username'];
  redirect_to("dashboard.php?page=1");
}else {
  $_SESSION["error_message"]="Invalid Username/Password";
  redirect_to("login.php");
}
}


?>









<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/loginstyles.css">


  <script src="js/jquery-3.3.1.js"> </script>
  <script src="js/bootstrap.min.js" ></script>
  <script type="text/javascript">





  var TxtType = function(el, toRotate, period) {
          this.toRotate = toRotate;
          this.el = el;
          this.loopNum = 0;
          this.period = parseInt(period, 10) || 2000;
          this.txt = '';
          this.tick();
          this.isDeleting = false;
      };

      TxtType.prototype.tick = function() {
          var i = this.loopNum % this.toRotate.length;
          var fullTxt = this.toRotate[i];

          if (this.isDeleting) {
          this.txt = fullTxt.substring(0, this.txt.length - 1);
          } else {
          this.txt = fullTxt.substring(0, this.txt.length + 1);
          }

          this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

          var that = this;
          var delta = 200 - Math.random() * 100;

          if (this.isDeleting) { delta /= 2; }

          if (!this.isDeleting && this.txt === fullTxt) {
          delta = this.period;
          this.isDeleting = true;
          } else if (this.isDeleting && this.txt === '') {
          this.isDeleting = false;
          this.loopNum++;
          delta = 500;
          }

          setTimeout(function() {
          that.tick();
          }, delta);
      };

      window.onload = function() {
          var elements = document.getElementsByClassName('typewrite');
          for (var i=0; i<elements.length; i++) {
              var toRotate = elements[i].getAttribute('data-type');
              var period = elements[i].getAttribute('data-period');
              if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
              }
          }
          // INJECT CSS
          var css = document.createElement("style");
          css.type = "text/css";
          css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
          document.body.appendChild(css);
      };

  Rerun

  </script>
  <body>
    <div class="container-fluid outer">
      <div class="wrapper">
        <h1 align="center"><a href="login.php" class="effect-box">Content Management System</a></h1>

      </div>

      <div class="container-fluid inner bg" style="background-image:url('images/login.jpg');">
        <div class="row  ">
          <div class="col-sm-6 text-center row1">


            <h1>
              <a href="" class="typewrite" data-period="2000" data-type='[ "Hi, I am CMS.", "Welcome Back!.","Login to Continue..." ]'>
                <span class="wrap"></span>
              </a>
            </h1>


          </div>

          <div class="col-sm-6 text-center row2">



            <form class="form" action="login.php" method="post">
              <?php echo message(); echo success_message(); ?>

              <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input type="text" class="form-control" name="Username" placeholder="Username" required>
  </div> <br>

  <div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input type="password" class="form-control" name="Password" placeholder="Password" required>
</div> <br>
<input class="btn btn-success btn-block" type="submit" name="Login" value="Login"><br>


<br><br>
  <span class="back" > <a  class="pull-left"href="blog.php"><u>Back to Main Page</u></a></span>
  <br><br>
            </form>

          </div>

        </div>

      </div>

    </div>
    <div class="footer">
      <marquee onmouseover="this.stop();" onmouseout="this.start();" bgcolor="#66CD00" behavior="alternate" scrollamount="10"> <marquee scrollamount="5" width="40">&lt;&lt;&lt;&lt;&lt;&lt;</marquee>Content Management System Developed By Jai Bhutani<marquee scrollamount="5" direction="right" width="40">&gt;&gt;&gt;&gt;&gt;&gt;</marquee> </marquee>

    </div>

  </body>
</html>
