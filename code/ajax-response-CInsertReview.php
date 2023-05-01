<?php
include 'dbconnection.php';
$Rating= $_GET['Rating'];
$Review  = $_GET['Review'];
$OID = $_GET['OID'];

//$query = "Select count(*) as cnt from  `Reviews` where OrderId =".$OID;
//$result = mysqli_query($conn,$query);
//while($row = mysqli_fetch_array($result)){

//}
$query = "Insert into  `Reviews` (OrderId, Review_Text, Rating) values (".$OID.",'".$Review."','".$Rating."')";

$result = mysqli_query($conn,$query);

echo "Reviewd Successfully" ;
