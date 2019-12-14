<!DOCTYPE html>

<?php 
$username = $_POST['Username'];
$password = $_POST['password'];
$email = $_POST['email'];

if (!empty($username) || !empty($password) || !empty($email)) {
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname ="cooksim";

	//create connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
	}

	else{
		$SELECT = "SELECT email From user Where email = ? Limit 1 ";
		$INSERT = "INSERT Into user (username, password, email) values(?, ?, ?)";

		//prepare statement
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		if ($rnum==0) {
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sss", $username, $password, $email);
			$stmt->execute();
			echo "";
		}
		else{
			echo "Email Already Taken";
		}
		$stmt->close();
		$conn->close();
	}
}
else {
	echo "All fields are required";
	die();
}

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Get Started CookSim</title>
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

  <link href="css/style.css" rel="stylesheet">
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <link href="style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">


</head>

<body>
  <div id="preloader"></div>

  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="img/logo2.png" alt="CookSim" style="max-height: 300px; max-width: 200px; margin-bottom: 500px;">
        </div>

        <h1>CookSim</h1>
        <h2><span class="rotating">WELCOME!</span></h2>
        <div class="box">
          <a href="../homepage/home.html" class="btn btn-white btn-animation-1" style="font-size: 40px !important; text-decoration: none;">Getting Started!</a> 
        </div>
        <div class="actions">
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
