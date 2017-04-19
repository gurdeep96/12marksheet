<?php

if($_POST['SUBMIT'])
{
	$seatno=$_POST['seatno'];
	$maths=$_POST['maths'];
	$english=$_POST['english'];
	$physics=$_POST['physics'];
	$chemistry=$_POST['chemistry'];
	$cs=$_POST['cs'];
	$marathi=$_POST['marathi'];
	$totalgrade=$_POST['totalgrade'];
	$totalmarks=$_POST['totalmarks'];
	$percentage=$_POST['percentage'];
	$result=$_POST['result'];

	include "connect.php";
	
	$write=mysqli_query($connect,"INSERT INTO table5 (seatno,maths,english,physics,chemistry,cs,marathi,totalmarks,totalgrade,percentage,result) VALUES ('$seatno','$maths','$english','$physics','$chemistry','$cs','$marathi','$totalmarks','$totalgrade','$percentage','$result')")or die("<br>sql can't be connected");

			echo "Successfully entered the values into the database!!";
	header("Location: http://localhost/12mksresult.php");
	exit();
}
?>