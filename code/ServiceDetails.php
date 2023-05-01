<?php
session_start();
if($_SESSION["CID"] == ''){
	$html = "<html><body>Please login.</body></html>";
	//echo $html;
}

else{
//echo "Welcome: ".$_SESSION["CID"];
include 'dbconnection.php';
    $SerID = explode('=', $_SERVER['REQUEST_URI'])[1];
    $CID = $_SESSION["CID"];

$html ="<html>
	<head>
		<script src='jquery-3.1.1.min.js' type='text/javascript'></script>
	        <script src='Cscript.js' type='text/javascript'></script>
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
<main id='main'>
    <!-- ======= Breadcrumbs ======= -->
    <div class='breadcrumbs' data-aos='fade-in'>
      <div class='container'>
";

 // get service name
    $sql1 = "SELECT SerShortDesc as SerName ,ServDesc  FROM Services WHERE SerID = ".$SerID;
    $result1 = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result1) > 0) {
        while ($row = mysqli_fetch_assoc($result1)) {
            $html .= "<h2>".$row['SerName']."</h2>
       		 <p>".$row['ServDesc']."</p>";
        }
    } else {
        $html .= "<h2>Unspecified Service</h2>
        <p>Service does not exist.</p>  ";  }

    $html .= " </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id='about' class='about'>
      <div class='container' data-aos='fade-up'>

        <div class='row'>
	  <div class='col-lg-10'>
			</div>
				<div class='col-md-5'>
					<h4 class='bold_font'>Features</h4>
					<hr class='hr hr-blurry'>
					<ul>
					";

    // get features
    $sql3 = "SELECT infeature1, infeature2, infeature3 FROM Services WHERE SerID = " . $SerID;
    $result3 = mysqli_query($conn, $sql3);

    if (mysqli_num_rows($result3) > 0) {
        while ($row = mysqli_fetch_assoc($result3)) {
            if (!empty($row['infeature1'])) {
                $html .= "<li>" . $row['infeature1'] . "</li>";
            }
            if (!empty($row['infeature2'])) {
                $html .= "<li>" . $row['infeature2'] . "</li>";
            }
            if (!empty($row['infeature3'])) {
                $html .= "<li>" . $row['infeature3'] . "</li>";
            }
        }
    } else {
        $html .= "<p>No features found for this service.</p>";
    }

    $html .= "
		</ul>
	</div>";

$html .="<div class='col-md-5'>
<h4 class='bold_font'>Service Parameters</h4>
<hr class='hr hr-blurry'>
<form action='cart.php' method='post'>
<label for='area'>Enter Area:</label>
<input type='number' class='form-control' id='area' name='area' placeholder='Enter the area in square feet' required>
<p id='est_cost' class='est_cost'></p><br>
<label for='zip'>Select Zipcode:</label>
<select class='form-control' name='vendor_zip_code' id='vendor_zip_select' required>
<option value='' disabled selected>Select Zipcode</option>";
$sql4 = "SELECT DISTINCT ZipServed, cost FROM Vendor INNER JOIN ServiceVendor ON Vendor.VenID = ServiceVendor.VenID INNER JOIN Services ON ServiceVendor.SerID = Services.SerID WHERE ServiceVendor.SerID=". $SerID;
$result4 = mysqli_query($conn, $sql4);
if (mysqli_num_rows($result4) > 0) {
    while ($row = mysqli_fetch_assoc($result4)) {
        $cost = $row['cost'];
	$sql_1 = "SELECT CZipCode FROM Customer where CusID =".$_SESSION["CID"];;
	$result_1 = mysqli_query($conn, $sql_1);
	 while ($row1 = mysqli_fetch_assoc($result_1)) {

        $html .= "<option value='" . $row['ZipServed'] . "' "; if ($row1['CZipCode'] == $row['ZipServed']){ $html .= " selected ";} $html .=" >" . $row['ZipServed'] . "</option>";
	    }
	}
} else {
    $html .= "<option value=''>No vendors found for this service.</option>";
}
$html .= "</select>
<br>
<input type='hidden' name='service_id' value='" . $SerID . "'>
<input type='hidden' name='vendor_zip' id='vendor_zip_input' value=''>
<input type='hidden' name='cost' value='" . $cost . "'>
<br><br><button type='submit' class ='get-started-btn' onclick='setFormValues()'>Add to Cart</button>
</form>
</div>";

$html .= "<div class='col-md-2'>
	<h6 class='bold_font'>Rating</h6>
	<hr class='hr hr-blurry'>";

$sql5 = "SELECT COUNT(*) AS numRating, AVG(Rating) AS avgRating FROM Reviews R INNER JOIN Orders O ON R.OrderId = O.OrderID WHERE O.SerID = " . $SerID;
    $result5 = mysqli_query($conn, $sql5);
    if (mysqli_num_rows($result5) > 0) {
        while ($row = mysqli_fetch_assoc($result5)) {
	     $avgRating= $row['avgRating'];
	     $numRating= $row['numRating'];

        }
    } else {
        $html .= "<h2>No Ratings for this service</h2>"; 
     }
$html .= "<div class='rating-number'>" . number_format($avgRating, 1) . " / 5</div>";
$html .= "<div class='rating-count'>(" . $numRating . " ratings)</div>";    
$html .= "</div>";

$html .= " <h4 class='bold_font'>Reviews</h4>
    <hr class='hr hr-blurry'>";

$sql7 = "SELECT C.CName,Rating, Review_Text FROM Reviews R INNER JOIN Orders O ON R.OrderId = O.OrderID INNER JOIN Customer C ON O.CusID = C.CusID WHERE O.SerID =" . $SerID . " LIMIT 5";
$result7 = mysqli_query($conn, $sql7);
if (mysqli_num_rows($result7) > 0) {
    while ($row = mysqli_fetch_assoc($result7)) {
        $html .= "<div class='review'>";
        $html .= "<p><strong>" . $row['CName'] . "</strong> : (" . $row['Rating'] . "/ 5) - " . $row['Review_Text'] . "</p>";
        $html .= "</div>";
    }
} else {
    $html .= "<p>No reviews found for this service.</p>";
}

$html .= "</div>";

 
$html .= "<script>
    var cost = " . $cost . ";
    var est_cost = 0;
    var area_input = document.getElementById('area');
    var est_cost_output = document.getElementById('est_cost');
    var vendor_zip_select = document.getElementById('vendor_zip_select');
    var vendor_zip_input = document.getElementById('vendor_zip_input');
function calculateEstCost() {
    if (area_input.value && !isNaN(area_input.value)) {
        est_cost = cost * area_input.value;
        est_cost_output.innerHTML = 'Estimated Cost of Service: $' + est_cost.toFixed(2);
    }
}

area_input.addEventListener('input', calculateEstCost);

function setFormValues() {
    var selectedOption = vendor_zip_select.options[vendor_zip_select.selectedIndex];
    
    // Set the value of the hidden input field for selected ZipServed
    vendor_zip_input.value = selectedOption.value;
}
</script>
</div>
</div>
</section>
</main>

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

</body>

</html>";

}
echo $html;

?>