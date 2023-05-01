<?php
include 'dbconnection.php';
$CName= $_GET['CName'];
$Address_1= $_GET['Address_1'];
$Address_2= $_GET['Address_2'];
$CContact= $_GET['CContact'];
$CEmail= $_GET['CEmail'];
$CZipCode = $_GET['CZipCode'];
$CusID = $_GET['CusID']; 

$query = "Update `Customer` set `CName` ='".$CName."', `Address_1`='".$Address_1."', `Address_2`='".$Address_2."', `CContact`='".$CContact."', `CEmail`='".$CEmail."', `CZipCode`=".$CZipCode." where CusID =".$CusID;

$result = mysqli_query($conn,$query);

echo "Profile Updated successfully";
