<?php

session_start();

if($_SESSION["VenID"] == ''){
	$html = "<html><body>Please login.</body></html>";
	//echo $html;
}
//echo "Welcome: ".$_SESSION["UID"];
else{
//echo $_SESSION["VenID"] ;
include 'dbconnection.php';

$id = $_GET["id"];

$sql = "Select O.OrderID , O.Address_1,O.Address_2, O.zipcode,O.Contactno, O.Order_Date, O.Total_Cost
 from
 Orders O where O.OrderID = ".$id." and O.VenID  =".$_SESSION["VenID"];



$html = "<html>
	<head>
		<script src='jquery-3.1.1.min.js' type='text/javascript'></script>
	        <script src='script.js' type='text/javascript'></script>
		<meta charset='utf-8'>
		<meta content='width=device-width, initial-scale=1.0' name='viewport'>
		<title>Utility Services</title>
		<meta content='' name='description'>
		<meta content='' name='keywords'>

		<!-- Favicons -->
		<link href='image/favicon.png' rel='icon'>
		<link href='image/apple-touch-icon.png' rel='apple-touch-icon'>
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i' rel='stylesheet'>

		<!-- Vendor CSS Files -->
		<link href='css/animate.css/animate.min.css' rel='stylesheet'>
		<link href='css/aos/aos.css' rel='stylesheet'>
		<link href='css/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-icons/bootstrap-icons.css' rel='stylesheet'>
		<link href='css/boxicons/css/boxicons.min.css' rel='stylesheet'>
		<link href='css/remixicon/remixicon.css' rel='stylesheet'>
		<link href='css/swiper/swiper-bundle.min.css' rel='stylesheet'>
	
		<!-- Template Main CSS File -->
		<link href='css/style.css' rel='stylesheet'>

		<link rel='stylesheet' href='Styles.css'>
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>

	</head>
	<body>
	  <!-- ======= Header ======= -->
	<header id='header' class='fixed-top'>
	    <div class='container d-flex align-items-center'>
		<h1 class='logo me-auto'><a href='Home.php'>Utility Services</a></h1>
    		<!-- Uncomment below if you prefer to use an image logo -->
		<!-- <a href='index.html' class='logo me-auto'><img src='assets/img/logo.png' alt='' class='img-fluid'></a>-->

		<nav id='navbar' class='navbar order-last order-lg-0'>
        		<ul>
		        	<li><a class='active' href='VHome.php'>Home</a></li>
			        <li><a href='VAllOrder.php'>All Orders</a></li>
			        <li><a href='slotcreate.php'>Create Slot</a></li>
			        <li><a href='slotview.php'>View Slot</a></li>
			        <li><a href='logout.php'>Logout</a></li>
	        	</ul>
		<i class='bi bi-list mobile-nav-toggle'></i>
		</nav>
	</div>
	</header><!-- End Header -->

	<main id='main'>
		<!-- ======= Breadcrumbs ======= -->
		<div class='breadcrumbs' data-aos='fade-in'>
			<div class='container'>
				<h2>Mark Order as Complete</h2>
				<p>Review order details and mark the order as complete.</p>
			</div>
		</div><!-- End Breadcrumbs -->

    		<!-- ======= About Section ======= -->
		<section id='about' class='about'>
			<div class='container' data-aos='fade-up'>
				<div class='row'>
					<div class='col-lg-4'>
";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
$html = $html."<input type='hidden' id='Oid' name='Oid' value='".$id."'/>";	
$html .= "
	<div class='row'>
              <div class='col-4'><strong>Order ID</strong></div>
              <div class='col-8'>" . $row['OrderID'] . "</div>
       </div>
	<div class='row'>
              <div class='col-4'><strong>Order Date</strong></div>
              <div class='col-8'>" . $row['Order_Date'] . "</div>
       </div>
<div class='row'>
              <div class='col-4'><strong>Total Cost</strong></div>
              <div class='col-8'>" . $row['Total_Cost'] . "</div>
       </div>
<div class='row'>
              <div class='col-4'><strong>Address</strong></div>
              <div class='col-8'>" . $row['Address_1'] . "  ".$row['Address_2']."</div>
       </div>
<div class='row'>
              <div class='col-4'><strong>Zipcode</strong></div>
              <div class='col-8'>" . $row['zipcode'] . "</div>
       </div>
<div class='row'>
              <div class='col-4'><strong>Contact No</strong></div>
              <div class='col-8'>" . $row['Contactno'] . "</div>
       </div><br>";
$html = $html."<button class ='get-started-btn' id='btnComp'>Mark as Complete</button>
<div id='message'></div>";

}
						
$html = $html."					</div>
				</div>
			</div>
		</section>
	</main>
	<div id='preloader'>
	</div>
	<a href='#' class='back-to-top d-flex align-items-center justify-content-center'><i class='bi bi-arrow-up-short'></i></a>
	<!-- Vendor JS Files -->
	<script src='js/purecounter/purecounter_vanilla.js'></script>
	<script src='js/aos/aos.js'></script>
	<script src='js/bootstrap/js/bootstrap.bundle.min.js'></script>
	<script src='js/swiper/swiper-bundle.min.js'></script>
	<script src='js/php-email-form/validate.js'></script>
	<!-- Template Main JS File -->
	<script src='js/main.js'></script>
	<!-- ======= Footer ======= -->
	<footer id='footer'>
		<div class='container d-md-flex py-4'>
			<div class='me-md-auto text-center text-md-start'>
				<div class='copyright'>&copy; Copyright <strong><span>Utility Services LLC</span></strong>. All Rights Reserved
        			</div>
			</div>
		</div>
	</footer><!-- End Footer -->
	</body>
	</html>";
	//			<div class='container-lg'>
	//			<div class='row'>";

// get id
//$sql2 = "SELECT CatID, CatShortDescription,ImageLocation FROM SCategories";
//$result2 = mysqli_query($conn, $sql2);
	
//	$html=$html."</div>
//</div>
//<hr class='hr hr-blurry' />
//</div></div></body></html>";
//mysqli_close($conn);


	echo $html;
}

?>