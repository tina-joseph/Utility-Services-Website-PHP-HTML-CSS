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
				<h2>Vendor Availibility this month</h2>
				<p>See slots for this month.</p>
			</div>
		</div><!-- End Breadcrumbs -->

    		<!-- ======= About Section ======= -->
		<section id='about' class='about'>
			<div class='container' data-aos='fade-up'>
				<div class='row'>
					<div class='col-lg-10'>
						<input id='VenID' type='hidden' value='".$_SESSION['VenID']."'>
      						<br>
						<br>
						<table id='slotTable' border='1' class ='table table-bordred table-striped'>
							<thead>
								<tr>
									<th width='7%'>SlotID</th>
									<th width='10%'>Date</th>
									<th width='10%'>Slot Time</th>
									<th width='7%'>Status</th>
									
								</tr>
							</thead>
							<tbody>";
$query = "SELECT SlotID,  DATE_FORMAT(date(Date), '%m/%d/%Y') as SDate,DATE_FORMAT(time(Date), '%T') as STime, CASE WHEN is_available= 1 THEN 'Available' ELSE 'Booked' END AS Status
 from VendorAvailability where VenID =".$_SESSION['VenID']." and MONTH(Date)=MONTH(now()) and YEAR(Date)=YEAR(now()) and date(Date) >= current_date order by Date";
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
$html .= "<tr>
		<td align='center'>".$row['SlotID']."</td>
		<td align='center'>".$row['SDate']."</td>
		<td align='center'>".$row['STime']."</td>
		<td align='center'>".$row['Status']."</td>
	</tr>";

}

$html .="
</tbody>
						</table>
					</div>
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