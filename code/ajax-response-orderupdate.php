<?php

include 'dbconnection.php';
$OrderID= $_GET['OrderID'];

$query = "Update Orders Set Order_Status = 2 where OrderID =".$OrderID;

$result = mysqli_query($conn,$query);

echo "Order No. '".$OrderID."' completed successfully.";

