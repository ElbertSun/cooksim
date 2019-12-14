<!DOCTYPE html>
<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Login!</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="keywords">
  <meta content="" name="description">

  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <link href="favicon.ico" rel="shortcut icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">

  <link href="css/style.css" rel="stylesheet">
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <link href="style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">


</head>

<body>
<section id="	">
<div class="hero-container">
	<div class="wow fadeIn">
		<div class="hero-logo">
			<img class="hey animated fadeInUp" src="img/logo2.png" alt="CookSim" style="max-height: 300px; max-width: 200px; margin: auto;" justify-content-center>
		</div>

         <h1 class="animated rubberBand infinite">Login CookSim</h1>
        <h2 class="animated pulse infinite">The Beauty <span class="rotating">Of Every Delish In The World</span></h2>

<div class="login-page animated bounceInUp delay-1s">
  <div class="form">
    <form class="login-form" method="post" action="index.php">
    <label>UserName :</label>
    <input id="name" name="username" placeholder="username" type="text">
    <label>Password :</label>
    <input id="password" name="password" placeholder="**********" type="password"> <input name="submit" type="submit" value=" Login ">
    <p class="message">Not registered? <a href="../register/register.php">Create an account</a></p>
    </form>
  </div>
</div>    
		  <div>	
			<ul class="colorlib-bubbles">
		      <li></li>
		      <li></li>
		      <li></li>
		      <li></li>
		      <li></li>
		      <li></li>
		      <li></li>
		      <li></li>
		      <li></li>
		      <li></li>
		    </ul>
		  </div>
        </div>
      </div>
    </div>
  </section>

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>


</body>

</html>
