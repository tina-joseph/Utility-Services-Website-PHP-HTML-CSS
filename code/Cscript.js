$(document).ready(function(){

var CusID = null;
CusID= $("#CusID").val();


function reteriveAllOrderData(){
    $.ajax({
        url: 'CAllOrderajax.php',
        type: 'get',
        dataType: 'JSON',
	data:{CusID : CusID },
        success: function(response){
            var len = response.length;
            $("#userTableAll").find("tr:gt(0)").remove();
            for(var i=0; i<len; i++){
                var OrderID= response[i].OrderID;
                var SerShortDesc= response[i].SerShortDesc;
                var Address= response[i].Address;
                var zipcode= response[i].zipcode;
                var ODate= response[i].ODate;
                var Contactno= response[i].Contactno;
                var OrderStatus= response[i].OStatus;
                var ReviewFlag= response[i].ReviewFlag;

                


                var tr_str = "<tr>" +
                    "<td align='center'>" + OrderID+ "</td>" +
                    "<td align='center'>" + SerShortDesc+ "</td>" +
                    "<td align='center'>" + Address+ "</td>" +
                    "<td align='center'>" + ODate+ "</td>" +

                    "<td align='center'>" + OrderStatus+ "</td>" ;
if(OrderStatus =='Completed'){
if(ReviewFlag == 1) 
                tr_str = tr_str+ "<td align='center'>Already Reviewed</td>" +
                    "</td>" +
                    "</tr>";
else 
                tr_str= tr_str+ "<td align='center'><a href='CReviews.php?id="+ OrderID+"'>Review</a></td>" +
                    "</td>" +
                    "</tr>";}
else
		tr_str = tr_str+ "<td align='center'></td>" +
                    "</td>" +
                    "</tr>";


                $("#userTableAll tbody").append(tr_str);
            }

        }
		

    });
	}
	
	reteriveAllOrderData();

$("#btnUpdate").click(function(){
var CName= $("#CName").val();
var Address_1 = $("#Address_1").val();
var Address_2 = $("#Address_2").val();
var CContact = $("#CContact").val();
var CEmail = $("#CEmail").val();
var CZipCode = $("#CZipCode").val();
var CusID = $("#CusID").val();

	$.ajax({
                    type: "get",
                    url: "ajax-response-UpdateProfile.php",
                    data: { CName: CName, Address_1 : Address_1, Address_2: Address_2, CContact:CContact, CEmail: CEmail, CZipCode:CZipCode, CusID:CusID },
                    success: function (msg) {
                            $("#message").html(msg);
                    },
                    error: function (req, status, error) {
                        alert(req + " " + status + " " + error);
                    }
                });
});



$("#btnReview").click(function(){
var Rating= $("#rate").val();
var Review = $("#review").val();
var OID = $("#Oid").val();
var CusID = $("#CusID").val();
	$.ajax({
                    type: "get",
                    url: "ajax-response-CInsertReview.php",
                    data: { Rating: Rating, Review  : Review , OID : OID, CusID:CusID },
                    success: function (msg) {
                            $("#message").html(msg);
                    },
                    error: function (req, status, error) {
                        alert(req + " " + status + " " + error);
                    }
                });
});


});