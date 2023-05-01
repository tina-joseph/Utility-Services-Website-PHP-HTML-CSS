$(document).ready(function(){
var varDay = null;
var VenID = null;
VenID = $("#VenID").val();

function reteriveData(){
    $.ajax({
        url: 'ajaxfile1.php',
        type: 'get',
        dataType: 'JSON',
	data:{day : varDay , venID : VenID },
        success: function(response){
            var len = response.length;
            $("#userTable").find("tr:gt(0)").remove();
            for(var i=0; i<len; i++){
                var OrderID= response[i].OrderID;
                var SerShortDesc= response[i].SerShortDesc;
                var Address= response[i].Address;
                var zipcode= response[i].zipcode;
                var Contactno= response[i].Contactno;
                var OrderStatus= response[i].OStatus;
                var ODate= response[i].ODate;
                var TCost= response[i].TCost;
                var CName= response[i].CName;

                


                var tr_str = "<tr>" +
                    "<td align='left'>" + ODate+ "</td>" +
                    "<td align='left'>" + OrderID+ "</td>" +
                    "<td align='left'>" + SerShortDesc+ "</td>" +
                    "<td align='left'>" + CName+ "</td>" +
                    "<td align='left'>" + Address+ "</td>" +
                    "<td align='left'>" + Contactno+ "</td>" +
                    "<td align='left'>" + OrderStatus+ "</td>";
if(OrderStatus=='Completed')
                    var tr_str =tr_str +"<td align='left'></td>";
else 
			var tr_str =tr_str +"<td align='left'>Awaited</td>";
                    var tr_str =tr_str + "</td>" +
                    "</tr>";

                $("#userTable tbody").append(tr_str);
            }

        }
		

    });
	}


function reteriveDataToday(){
    $.ajax({
        url: 'ajaxfile1.php',
        type: 'get',
        dataType: 'JSON',
	data:{day : varDay , venID : VenID },
        success: function(response){
            var len = response.length;
            $("#userTable").find("tr:gt(0)").remove();
            for(var i=0; i<len; i++){
                var OrderID= response[i].OrderID;
                var SerShortDesc= response[i].SerShortDesc;
                var Address= response[i].Address;
                var zipcode= response[i].zipcode;
                var Contactno= response[i].Contactno;
                var OrderStatus= response[i].OStatus;
                var ODate= response[i].ODate;
                var TCost= response[i].TCost;
                var CName= response[i].CName;

                


                var tr_str = "<tr>" +
                    "<td align='left'>" + ODate+ "</td>" +
                    "<td align='left'>" + OrderID+ "</td>" +
                    "<td align='left'>" + SerShortDesc+ "</td>" +
                    "<td align='left'>" + CName+ "</td>" +
                    "<td align='left'>" + Address+ "</td>" +
                    "<td align='left'>" + Contactno+ "</td>" +
                    "<td align='left'>" + OrderStatus+ "</td>";
if(OrderStatus=='Completed')
                    var tr_str =tr_str +"<td align='left'></td>";
else 
			var tr_str =tr_str +"<td align='left'><a href='VOrderUpdate.php?id="+ OrderID+"'>Edit</a></td>";
                    var tr_str =tr_str + "</td>" +
                    "</tr>";

                $("#userTable tbody").append(tr_str);
            }

        }
		

    });
	}

varDay = 1;
reteriveDataToday();
$("#btnToday").click(function(){
	varDay = 1;
	reteriveDataToday();

});
$("#btnTomm").click(function(){
	varDay = 2;
	reteriveData();
});

$("#btnCurrentWeek").click(function(){
	varDay = 3;
	reteriveData();

});



function reteriveAllOrderData(){
    $.ajax({
        url: 'AllOrderajax.php',
        type: 'get',
        dataType: 'JSON',
	data:{day : varDay , venID : VenID },
        success: function(response){
            var len = response.length;
            $("#userTableAll").find("tr:gt(0)").remove();
            for(var i=0; i<len; i++){
                var OrderID= response[i].OrderID;
                var SerShortDesc= response[i].SerShortDesc;
                var Address= response[i].Address;
                var zipcode= response[i].zipcode;
                var Contactno= response[i].Contactno;
                var OrderStatus= response[i].OStatus;
                var ODate= response[i].ODate;
                var TCost= response[i].TCost;
                var CName= response[i].CName;



                 var tr_str = "<tr>" +
                    "<td align='left'>" + ODate+ "</td>" +
                    "<td align='left'>" + OrderID+ "</td>" +
                    "<td align='left'>" + SerShortDesc+ "</td>" +
                    "<td align='left'>" + CName+ "</td>" +
                    "<td align='left'>" + Address+ "</td>" +
                    "<td align='left'>" + Contactno+ "</td>" +
                    "<td align='left'>" + TCost+ "</td>" +
                    "</td>" +
                    "</tr>";


                $("#userTableAll tbody").append(tr_str);
            }

        }
		

    });
	}
	varDay = 1;
	reteriveAllOrderData();

$("#btnYear").click(function(){
	varDay = 1;
	reteriveAllOrderData();

});

$("#btnMonth").click(function(){
	varDay = 2;
	reteriveAllOrderData();

});

$("#btnWeek").click(function(){
	varDay = 3;
	reteriveAllOrderData();

});

$("#btnComp").click(function(){
var OID = $("#Oid").val();
	$.ajax({
                    type: "get",
                    url: "ajax-response-orderupdate.php",
                    data: { OrderID: OID },
                    success: function (msg) {
                            $("#message").html(msg);
                    },
                    error: function (req, status, error) {
                        alert(req + " " + status + " " + error);
                    }
                });
});






});