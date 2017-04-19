function myFunction()
{
	var inp = /^[A-Za-z]+$/;
	var nn = /^[0-9]+$/;
	var nc = /^[0-9a-zA-Z]+$/;
	var rgx = /^[0-9]*\.?[0-9]*\.?[0-9]*$/;
	
	var x = document.forms["myform"]["fname"].value;
	if (x=="") {
		alert("first name should not be empty !!!");
		return false;
	}
	if(!x.match(inp))
	{
		alert("First Name should be in characters !!!");
		return false;
	}
	
	var x1 = document.forms["myform"]["mname"].value;
	if (x1=="") {
		alert("middle name should not be empty !!!");
		return false;
	}
	if(!x1.match(inp))
	{
		alert("Middle Name should be in characters !!!");
		return false;
	}
	
	var x2 = document.forms["myform"]["lname"].value;
	if (x2=="") {
		alert("last name should not be empty !!!");
		return false;
	}
	if(!x2.match(inp))
	{
		alert("Last Name should be in characters !!!");
		return false;
	}
	
	var x3 = document.forms["myform"]["momname"].value;
	if (x3=="") {
		alert("Candidate's mother name should not be empty !!!");
		return false;
	}
	if(!x3.match(inp))
	{
		alert("Candidate's Mother Name should be in characters !!!");
		return false;
	}

	var x4 = document.forms["myform"]["stream"].value;
	if (x4=="") {
		alert("Stream should not be empty !!!");
		return false;
	}
	if(!x4.match(inp))
	{
		alert("Stream should be in characters !!!");
		return false;
	}
	
	var x5 = document.forms["myform"]["seatno"].value;
	if (x5=="") {
		alert("Seat No. should not be empty !!!");
		return false;
	}
	if(!x5.match(nc))
        {
                alert("Seat No. should contain only alphabets and numbers!!!");
		return false;
	}

	var x6 = document.forms["myform"]["centerno"].value;
	if (x6=="") {
		alert("Center No. should not be empty !!!");
		return false;
	}
	if(!x6.match(nn))
        {
                alert("Center No. should be numbers !!!");
		return false;
	}

	var x8 = document.forms["myform"]["dnsno"].value;
	if (x8=="") {
		alert("District and School No. should not be empty !!!");
		return false;
	}
	if(!x8.match(rgx))
        {
                alert("District and School No. of Statement should be numbers along with dots only !!!");
		return false;
	}	

	var x7 = document.forms["myform"]["srno"].value;
	if (x7=="") {
		alert("Serial No. of Statement should not be empty !!!");
		return false;
	}
	if(!x7.match(nn))
        {
                alert("Serial No. of Statement should be numbers !!!");
		return false;
	}
	
	var x9 = document.forms["myform"]["divboard"].value;
	if(x9=="none"){
		alert("Please select your Divisional Board");
		return false;
	} 

}


