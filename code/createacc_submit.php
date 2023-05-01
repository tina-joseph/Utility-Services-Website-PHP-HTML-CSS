<?php
include 'dbconnection.php';
$CName= $_POST['CName'];
$Address_1= $_POST['Address1'];
$Address_2= $_POST['Address2'];
$CContact= $_POST['CContact'];
$CEmail= $_POST['CEmail'];
$CZipCode = $_POST['CZipCode'];
$CUName= $_POST['CUName'];
$CPass= $_POST['pwd1'];
 

// get id
//$sql1 = "SELECT COALESCE(MAX(UserID),0) as id FROM Customer";
//$result = mysqli_query($conn, $sql1);
//$row = mysqli_fetch_assoc($result);
//$newid = $row['id'] + 1;

//$phone_No = isset($_POST['phone_No']) ? $_POST['phone_No'] : var_dump(NULL);

//echo "Phone num :".$phone_No;

$sql2 = "INSERT INTO `Customer` ( `CName`, `Address_1`, `Address_2`, `CContact`, `CEmail`, `CUName`, `CPass`, `CZipCode`) 
VALUES ('".$CName."', '".$Address_1."', '".$Address_2."', '".$CContact."', '".$CEmail."', '".$CUName."', MD5('".$CPass."'), ".$CZipCode.")";



if (mysqli_query($conn, $sql2)) {
    echo "<html><script>alert('New account created successfully.');

		   			window.location.href = 'Utility.html';</script></html>";
    // header("Location: Login.html");
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>