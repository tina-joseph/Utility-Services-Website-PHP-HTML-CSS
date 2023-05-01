<?php

include 'dbconnection.php';
$venID= $_GET['venID'];
$Day =  $_GET['day'];
$return_arr = array();

$query = "Select C.CName,VA.Date, O.Total_Cost, O.OrderID , S.SerShortDesc, O.Address_1,O.Address_2, O.zipcode,O.Contactno, O.Order_Date, case when O.Order_Status = 1 then 'Pending' else 'Completed' end as OStatus

 from
 Orders O inner join
 Services S on O.SerID = S.SerID
inner join VendorAvailability VA on O.SlotID=VA.SlotID
inner join Customer C on O.CusID=C.CusID
 where O.VenID =".$venID."  and Order_Status in (1,2) and VA.Date >= CURRENT_DATE ";

//	$Day =2;
//echo $query;
if (!empty($Day)){ 
	if ($Day == 1 ) 
		{$query = $query."and DATE(VA.Date) = CURRENT_DATE ";}
	if ($Day == 2 ) 
		{$query = $query."and DATE(VA.Date) = CURRENT_DATE +1 ";}
	if ($Day == 3 ) 
		{$query = $query."and YEARWEEK(VA.Date) = YEARWEEK(NOW())";}


//$query = $query." and Cname = '".$name."' ";
} 
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
    $OrderID = $row['OrderID'];
    $SerShortDesc= $row['SerShortDesc'];
    $Address= $row['Address_1'].' '.$row['Address_2'].' '.$row['zipcode'];
    $zipcode= $row['zipcode'];
    $Contactno= $row['Contactno'];
    $OStatus= $row['OStatus'];
    $Order_Date = $row['Date'];
    $Total_Cost= $row['Total_Cost'];
    $CName= $row['CName'];

   
    $return_arr[] = array(
                    "OrderID" => $OrderID,
                    "SerShortDesc" => $SerShortDesc,
                    "Address" => $Address,
                    "zipcode" => $zipcode,
                    "Contactno" => $Contactno,
                    "TCost" => $Total_Cost,
                    "CName" => $CName,
                    "ODate" => $Order_Date,
                    "OStatus" => $OStatus);
}

// Encoding array in JSON format
echo json_encode($return_arr);

