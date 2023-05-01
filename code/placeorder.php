<?php
session_start();

if ($_SESSION["CID"] == '') {
    $html = "<html><body>Please login.</body></html>";
    echo $html;
} else {
    include 'dbconnection.php';
    $SerID = $_POST['service_id'];
    $CID = $_SESSION["CID"];
    $vendor_id = $_POST['vendor_id'];
    $zipcode = $_POST['zip_served'];
    $area = $_POST['area'];
    $date = $_POST['date'];
    $address_1 = $_POST['address1'];
    $address_2 = $_POST['address2'];
    $CContact = $_POST['ccontact'];
    $total_cost = $_POST['total_cost'];
    $timestamp = date("Y-m-d H:i:s");



$sql1 ="SELECT SlotID from VendorAvailability WHERE VenID = '$vendor_id' AND Date ='$date'";
	    $result = mysqli_query($conn, $sql1);
            $row = mysqli_fetch_assoc($result);
            $SlotID = $row['SlotID'];

$sql = "INSERT INTO Orders (VenID, Order_Date, Order_Status, CusID, Address_1, Address_2, zipcode, Contactno, SerID, Area, Total_Cost, ZipServed, SlotID)
        VALUES ('$vendor_id', '$timestamp', '1', '$CID', '$address_1', '$address_2', '$zipcode', '$CContact', '$SerID', '$area', '$total_cost', '$zipcode', '$SlotID')";


if (mysqli_query($conn, $sql)) {
    $order_id = mysqli_insert_id($conn);
    $update_sql = "UPDATE VendorAvailability SET is_available = 0 WHERE VenID = '$vendor_id' AND Date ='$date' AND SlotID = '$SlotID'";
    mysqli_query($conn, $update_sql);
    
        // Redirect to ordersummary.php page
    header("Location: ordersummary.php?SerID=$SerID&OrderID=$order_id");
    exit();
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
}
?>
