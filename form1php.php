<?php

if($_POST['SUBMIT'])
{
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$momname=$_POST['momname'];
	$divboard=$_POST['divboard'];
	$stream=$_POST['stream'];
	$seatno=$_POST['seatno'];
	$centerno=$_POST['centerno'];
	$dnsno=$_POST['dnsno'];
	$emonth=$_POST['emonth'];
	$srno=$_POST['srno'];

	include "connect.php";
	
	$write=mysqli_query($connect,"INSERT INTO table4 (firstname,middlename,lastname,mothername,divboard,stream,seatno,centerno,dnsno,month,srno) VALUES ('$fname','$mname','$lname','$momname','$divboard','$stream','$seatno','$centerno','$dnsno','$emonth','$srno')")or die("<br>sql can't be connected");

			echo "Successfully entered the values into the database!!";
		sleep(2);
	header("Location: http://localhost/form2.html");
	exit();
}
?>