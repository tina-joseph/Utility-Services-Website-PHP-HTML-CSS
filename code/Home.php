<?php

session_start();

if($_SESSION["CID"] == ''){
	$html = "<html><body>Please login.</body></html>";
	//echo $html;
}
//echo "Welcome: ".$_SESSION["UID"];
else{

include 'dbconnection.php';


$html = "<html>
	<head>
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
          <li><a class='active' href='Home.php'>Home</a></li>
          <li class='dropdown'><a ><span>View all Services</span> <i class='bi bi-chevron-down'></i></a>
            <ul>
	      <li class='dropdown'><a a href='Services.php?source=1'><span>Power Wash</span> <i class='bi bi-chevron-right'></i></a>
                <ul>
                  <li><a href='ServiceDetails.php?source=6'>Concrete Washing</a></li>
                  <li><a href='ServiceDetails.php?source=7'>Deck Washing</a></li>
                  <li><a href='ServiceDetails.php?source=8'>Roof Treatment</a></li>
                </ul>
              </li>
		<li class='dropdown'><a a href='Services.php?source=2'><span>Lawn Care</span> <i class='bi bi-chevron-right'></i></a>
                <ul>
                  <li><a href='ServiceDetails.php?source=1'>Mowing</a></li>
                  <li><a href='ServiceDetails.php?source=2'>Aeration</a></li>
                  <li><a href='ServiceDetails.php?source=3'>Thatching</a></li>
                  <li><a href='ServiceDetails.php?source=4'>Fertilization</a></li>
                  <li><a href='ServiceDetails.php?source=5'>Leaf Blowing</a></li>
                </ul>
              </li>

              <li class='dropdown'><a a href='Services.php?source=3'><span>Snow Cleaning</span> <i class='bi bi-chevron-right'></i></a>
                <ul>
                  <li><a href='ServiceDetails.php?source=9'>Salt Spreading</a></li>
                  <li><a href='ServiceDetails.php?source=10'>Snow Plowing</a></li>
                </ul>
              </li>

              <li class='dropdown'><a a href='Services.php?source=4'><span>Pest Control</span> <i class='bi bi-chevron-right'></i></a>
                <ul>
                  <li><a href='ServiceDetails.php?source=11'>Bees and Wasps Control</a></li>
                  <li><a href='ServiceDetails.php?source=12'>Bed Bug Control</a></li>
                  <li><a href='ServiceDetails.php?source=13'>Flea and Tick Control</a></li>
                  <li><a href='ServiceDetails.php?source=14'>Mole Control</a></li>
                </ul>
              </li>
	      
            </ul>
          </li>
	  <li class='dropdown'><a ><span>Browse by category</span> <i class='bi bi-chevron-down'></i></a>
            <ul>
              <li><a href='Services.php?source=1'>Power Wash</a></li>
              <li><a href='Services.php?source=2'>Lawn Care</a></li>
              <li><a href='Services.php?source=3'>Snow Removal</a></li>
              <li><a href='Services.php?source=4'>Pest Control</a></li>
            </ul>
          </li>
          <li><a href='EditProfile.php'>My Profile</a></li>
          <li><a href='CAllOrder.php'>My Orders</a></li>
          <li><a href='logout.php'>Logout</a></li>
        </ul>
        <i class='bi bi-list mobile-nav-toggle'></i>
      </nav>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id='hero' class='d-flex justify-content-center align-items-center'>
    <div class='container position-relative' data-aos='zoom-in' data-aos-delay='100'>
      <h1>Ordering Today,<br>Delivering Tomorrow</h1>
      <h2>We are team of talented Service Providers taking care of your home EVERYDAY!</h2>
    </div>
  </section><!-- End Hero -->

  <main id='main'>
  </main><!-- End #main -->


  <div id='preloader'></div>
  <a href='#' class='back-to-top d-flex align-items-center justify-content-center'><i class='bi bi-arrow-up-short'></i></a>

  <!-- Vendor JS Files -->
  <script src='js/purecounter/purecounter_vanilla.js'></script>
  <script src='js/aos/aos.js'></script>
  <script src='js/bootstrap/js/bootstrap.bundle.min.js'></script>
  <script src='js/swiper/swiper-bundle.min.js'></script>
  <script src='js/php-email-form/validate.js'></script>

  <!-- Template Main JS File -->
  <script src='js/main.js'></script>
<div class='container-lg'>
  <div class='row'><div class='col-md-12 text-align-center'>
        <h4 class='bold_font'>BROWSE OUR CATEGORIES</h4><br>
      </div>";
// get id
$sql2 = "SELECT CatID, CatShortDescription,ImageLocation FROM SCategories";
$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result2)) {
			$html = $html."<div class='col-md-3 col-xs-12'>
        <a href='Services.php?source=".$row['CatID']."'>
          <img class='img-responsive' src='".$row['ImageLocation']."' width ='100%' height = 'auto'>
          <div class='overlay'>
            <div class='overlay-content'>
              <div class='spacer overlay-text'>".$row['CatShortDescription']."</div>
            </div>
          </div>
        </a>
      </div>";


	    }
	} else {
	$html=$html."<p> No data exists. Please load the data!</p>";

	}
	
	$html=$html."</div>
</div>
  <!-- ======= Footer ======= -->
  <footer id='footer'>

   <div class='container d-md-flex py-4'>
      <div class='me-md-auto text-center text-md-start'>
        <div class='copyright'>
          &copy; Copyright <strong><span>Utility Services LLC</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

<hr class='hr hr-blurry' />
</div></div></body></html>";
mysqli_close($conn);


	echo $html;
}

?>