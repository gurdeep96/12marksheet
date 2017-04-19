function myfunction()
{
	var inp = /^[A-Za-z]+$/;
	var nn = /^[0-9]+$/;
	
	var x = document.forms["myform2"]["maths"].value;
	if (x=="") {
		alert("Enter marks for Maths subject !!!");
		return false;
	}
	if(x<0 || x>100){
		alert("Marks cannot be less than 0 or greater than 100");
		return false;
	} 
	if(!x.match(nn))
        {
                alert("Maths marks should be in numbers !!!");
		return false;
	}

	var x1 = document.forms["myform2"]["english"].value;
	if (x1=="") {
		alert("Enter marks for English subject !!!");
		return false;
	}
	if(x1<0 || x1>100){
		alert("Marks cannot be less than 0 or greater than 100");
		return false;
	}
	if(!x1.match(nn))
        {
                alert("English marks should be in numbers !!!");
		return false;
	}
	
	var x2 = document.forms["myform2"]["physics"].value;
	if (x2=="") {
		alert("Enter marks for Physics subject !!!");
		return false;
	}
	if(x2<0 || x2>100){
		alert("Marks cannot be less than 0 or greater than 100");
		return false;
	}
	if(!x2.match(nn))
        {
                alert("Physics marks should be in numbers !!!");
		return false;
	}

	var x3 = document.forms["myform2"]["chemistry"].value;
	if (x3=="") {
		alert("Enter marks for Chemistry subject !!!");
		return false;
	}
	if(x3<0 || x3>100){
		alert("Marks cannot be less than 0 or greater than 100");
		return false;
	}
	if(!x3.match(nn))
        {
                alert("Chemistry marks should be in numbers !!!");
		return false;
	}

	var x4 = document.forms["myform2"]["cs"].value;
	if (x4=="") {
		alert("Enter marks for Computer Science subject !!!");
		return false;
	}
	if(x4<0 || x4>100){
		alert("Marks cannot be less than 0 or greater than 100");
		return false;
	}
	if(!x4.match(nn))
        {
                alert("Computer Science marks should be in numbers !!!");
		return false;
	}

	var x5 = document.forms["myform2"]["marathi"].value;
	if (x5=="") {
		alert("Enter marks for Marathi subject !!!");
		return false;
	}
	if(x5<0 || x5>100){
		alert("Marks cannot be less than 0 or greater than 100");
		return false;
	}
	if(!x5.match(nn))
        {
                alert("Marathi marks should be in numbers !!!");
		return false;
	}
	
	var s = parseInt(x)+parseInt(x1)+parseInt(x2)+parseInt(x3)+parseInt(x4)+parseInt(x5);
	totalm(s);
	var t = (s/6);
	var per = (s/600)*100;
	percent(per);
	
	results(per);
	
	grades(x);
	grades1(x1);
	grades2(x2);
	grades3(x3);
	grades4(x4);
	grades5(x5);
	grades6(t);
	return false;
	
		
	
}
function totalm(s)
{
	var sum = document.forms["myform2"];
	sum.totalmarks.value = s;
}
function percent(per)
{
	var sum = document.forms["myform2"];
	sum.percentage.value = per;
}
function results(per)
{
	var sum = document.forms["myform2"];
	if(per>50 && per<=100)
	{
		
		sum.result.value= "PASS";
	}
	else
		sum.result.value = "FAIL";
}
function grades(x)
{
	var sum = document.forms["myform2"];
	if(x>=80 && x<=100)
		sum.mathsgrade.value = "A";
	else if(x>=70 && x<80)
		sum.mathsgrade.value = "B";
	else if(x>=60 && x<70)
		sum.mathsgrade.value = "C";
	else if(x>=50 && x<60)
		sum.mathsgrade.value = "D";
	else
		sum.mathsgrade.value = "F";
}
function grades1(x1)
{
	var sum = document.forms["myform2"];
	if(x1>=80 && x1<=100)
		sum.enggrade.value = "A";
	else if(x1>=70 && x1<80)
		sum.enggrade.value = "B";
	else if(x1>=60 && x1<70)
		sum.enggrade.value = "C";
	else if(x1>=50 && x1<60)
		sum.enggrade.value = "D";
	else
		sum.enggrade.value = "F";
}
function grades2(x2)
{
	var sum = document.forms["myform2"];
	if(x2>=80 && x2<=100)
		sum.phygrade.value = "A";
	else if(x2>=70 && x2<80)
		sum.phygrade.value = "B";
	else if(x2>=60 && x2<70)
		sum.phygrade.value = "C";
	else if(x2>=50 && x2<60)
		sum.phygrade.value = "D";
	else
		sum.phygrade.value = "F";
}
function grades3(x3)
{
	var sum = document.forms["myform2"];
	if(x3>=80 && x3<=100)
		sum.chemgrade.value = "A";
	else if(x3>=70 && x3<80)
		sum.chemgrade.value = "B";
	else if(x3>=60 && x3<70)
		sum.chemgrade.value = "C";
	else if(x3>=50 && x3<60)
		sum.chemgrade.value = "D";
	else
		sum.chemgrade.value = "F";
}
function grades4(x4)
{
	var sum = document.forms["myform2"];
	if(x4>=80 && x4<=100)
		sum.csgrade.value = "A";
	else if(x4>=70 && x4<80)
		sum.csgrade.value = "B";
	else if(x4>=60 && x4<70)
		sum.csgrade.value = "C";
	else if(x4>=50 && x4<60)
		sum.csgrade.value = "D";
	else
		sum.csgrade.value = "F";
}
function grades5(x5)
{
	var sum = document.forms["myform2"];
	if(x5>=80 && x5<=100)
		sum.marathigrade.value = "A";
	else if(x5>=70 && x5<80)
		sum.marathigrade.value = "B";
	else if(x5>=60 && x5<70)
		sum.marathigrade.value = "C";
	else if(x5>=50 && x5<60)
		sum.marathigrade.value = "D";
	else
		sum.marathigrade.value = "F";
}
function grades6(t)
{
	var sum = document.forms["myform2"];
	if(t>=80 && t<=100)
		sum.totalgrade.value = "A";
	else if(t>=70 && t<80)
		sum.totalgrade.value = "B";
	else if(t>=60 && t<70)
		sum.totalgrade.value = "C";
	else if(t>=50 && t<60)
		sum.totalgrade.value = "D";
	else
		sum.totalgrade.value = "F";
}
