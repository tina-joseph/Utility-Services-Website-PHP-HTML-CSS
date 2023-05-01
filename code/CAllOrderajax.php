<?php

include 'dbconnection.php';
$CusID = $_GET['CusID'];
$Day =10;
$return_arr = array();

$query = "Select DATE_FORMAT(date(VA.Date), '%m/%d/%Y') as ODate, O.Total_Cost,O.OrderID , S.SerShortDesc, O.Address_1,O.Address_2, O.zipcode,O.Contactno, O.Order_Date , case when O.Order_Status = 1 then 'Pending' else 'Completed' end as OStatus
 from
 Orders O inner join
 Services S on O.SerID = S.SerID
inner join VendorAvailability VA on O.SlotID=VA.SlotID
inner join Customer C on O.CusID=C.CusID

 where O.CusID =".$CusID."  and Order_Status in (1,2)  ";

//	$Day =2;
//echo $query;
if (!empty($Day)){ 
	if ($Day == 1 ) 
		{$query = $query."and YEAR(VA.Date) = YEAR(NOW())";}
	if ($Day == 2 ) 
		{$query = $query."and MONTH(VA.Date)=MONTH(now()) and YEAR(VA.Date)=YEAR(now());";}
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
    $Order_Date = $row['ODate'];
    $OStatus= $row['OStatus'];
    $query1 = "Select count(*) as cnt from  `Reviews` where OrderId =".$row['OrderID'].";" ;
	$result1 = mysqli_query($conn,$query1);
	while($row1 = mysqli_fetch_array($result1)){

//}

    $return_arr[] = array(
                    "OrderID" => $OrderID,
                    "SerShortDesc" => $SerShortDesc,
                    "Address" => $Address,
                    "zipcode" => $zipcode,
                    "zipcode" => $zipcode,
                    "ODate" => $Order_Date,
                    "OStatus" => $OStatus,
		"ReviewFlag" => $row1['cnt']);
}
}
// Encoding array in JSON format
echo json_encode($return_arr);

