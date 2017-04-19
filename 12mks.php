<?php
	
if(isset($_POST['submit']))
{
	include "connect.php";

    $sql = "SELECT * FROM table4";
    $sql2 = "SELECT * FROM table5";
    
    $nm = $_POST['name1'];

    $result = $connect->query($sql);
    $result2 = $connect->query($sql2);

   while($row = $result->fetch_assoc())
    {
    	if($nm == $row['seatno'])
    	{
    		$fn = $row['firstname'];
    		$mn = $row['middlename'];
    		$ln = $row['lastname'];
    		$momn = $row['mothername'];
    		$dv = $row['divboard'];
    		$stream = $row['stream'];
    		$cn = $row['centerno'];
    		$dns = $row['dnsno'];
    		$mo = $row['month'];
    		$srno = $row['srno'];

    	}
	}
	while($row2 = $result2->fetch_assoc())
	{
		if($nm == $row2['seatno'])
    	{
    		$maths = $row2['maths'];
    		$english = $row2['english'];
    		$physics = $row2['physics'];
    		$chemistry = $row2['chemistry'];
    		$cs = $row2['cs'];
    		$marathi = $row2['marathi'];
    		$tm = $row2['totalmarks'];
    		$tg = $row2['totalgrade'];
    		$per = $row2['percentage'];
    		$res = $row2['result'];
    	}
	}
}	
?>

<!DOCTYPE html>
<html>
<head>
	<title>12th Marksheet</title>
	<meta charset="UTF-8">
	<meta name="description" content="12 MARKSHEET">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<meta name="author" content="Gurdeep Singh">
	<style>
	p{
		margin:0;
		padding:0;
	}
	#grad1
	{
		background: linear-gradient(to right, #F4A460,#AFEEEE,#F4A460);
		background-size:45%;
		background-repeat:repeat-y;
		background-position:center top;
	}
	.div{
		font-family:"Old English Text MT";
		font-style:normal;
		font-variant:normal;
		font-size: 120%;
	}
	.div2{
		font-family:"Brush script MT";
		font-style:normal;
		font-variant:normal;
	}
	#t1{
		border:1px solid black;
	}
	</style>
</head>
<body style="font-family:Arial;">

<div id ="grad1" width="45%">
<table id ="t1" align="center" width="45%" cellpadding="1" cellspacing="0.1">
<tr>
	<td rowspan="5"><img src="image.png" align="center" height="80" width="80"></img></td>
<tr>
	<td><center><strong>महाराष्ट्र राज्य माध्यमिक व उच्च माध्यमिक शिक्षण मंडळ , पुणे</strong></center></td>
</tr>
<tr>
	<td class="div"><center><strong>Maharashtra State Board Of</strong></center></td>
</tr>
<tr>
	<td class="div"><center><strong>Secondary and Higher Secondary Education , Pune</strong></center></td>
</tr>
<tr>
	<td><center><font size="2" style="text-transform: uppercase;"><strong><?php echo $dv ?> &nbsp;&nbsp;<font size="1">DIVISIONAL BOARD &nbsp;&nbsp;विभागीय मंडळ</strong></center></td>
</tr>
<tr>
	<td colspan="2"><font size="3"><center><strong>उच्च &nbsp;माध्यमिक &nbsp;प्रमाणपत्र परीक्षा</strong> - गुणपत्रक (पुनरचित -<strong>2008 पासून</strong>)</center></td>
</tr>
<tr>
	<td colspan="2"><center><font size="2" face="Trebuchet MS">HIGHER SECONDARY CERTIFICATE EXAMINATION<strong>-STATEMENT OF MARKS</strong><font size="1">(Revised from -2008)</center></td>
</tr>
</table>
<table border="1" align="center" width="45%" cellpadding="1" cellspacing="0.1">
<tr>
	<td bgcolor="black"><font size="1" color="white"><center>शाखा<br>STREAM</center></td>
	<td bgcolor="black"><font size="1" color="white"><center>आसन क्रमांक<br>SEAT NO.</center></td>
	<td bgcolor="black"><font size="1"color="white"><center>केंद्र क्रमांक<br>CENTER NO.</center></td>
	<td bgcolor="black"><font size="1"color="white"><center>जि. आणि एचआर. आयोगाचे स्कूल क्रमांक<br>DIST. & HR. SEC SCHOOL NO.</center></td>
	<td bgcolor="black"><font size="1"color="white"><center>महिना आणि परीक्षा वर्षी<br>MONTH AND YEAR OF EXAM</center></td>
	<td bgcolor="black"><font size="1"color="white"><center>निवेदन अनुक्रमांक<br>SR NO. OF STATEMENT</center></td>
</tr>
<tr>
	<td><font size="2" style="text-transform: uppercase;"><center><strong><?php echo $stream ?></strong></center></td>
	<td><font size="2"><center><strong><?php echo $nm ?></strong></center></td>
	<td><font size="2"><center><strong><?php echo $cn ?></strong></center></td>
	<td><font size="2"><center><strong><?php echo $dns ?></strong></center></td>
	<td><font size="2"><center><strong><?php echo $mo?></strong></center></td>
	<td><font size="2"><center><strong><?php echo $srno ?></strong></center></td>
</tr>
</table>
<table border="1" align="center" width="45%" cellspacing="0.1">
<tr>
	<td><font size="2"><center>यांचा पूर्ण नाव (आडनांव प्रथम)<strong>/CANDIDATE'S FULL NAME(SURNAME FIRST)<br><font size="4" class="div2" id="name"><?php echo $fn." ".$mn." ".$ln ?></strong></center></td>
</tr>
<tr>
	<td><center><font size="2">उमेदवार आईचे नाव<strong>/Candidate's Mother's Name &emsp; <font size="3" class="div2"><?php echo $momn ?></strong></center></td>
</tr>
</table>
<table border="1" align="center" width="45%" cellpadding="1" cellspacing="0.1">
<tr>
	<td><font size="1"><strong>विषय<br>SUBJECTS</strong></td>
	<td colspan="2"><font size="1"><center><strong>अनिवार्य भाषा<br>COMPULSORY<br>LANGUAGES</strong></center></td>
	<td colspan="5"><font size="1"><center><strong>वैकल्पिक विषय<br>OPTIONAL SUBJECTS</strong></center></td>
	<td><font size="1"><center><strong>व्यावसायिक<br>विषय<br>VOCATIONAL<br>SUBJECTS</strong></center></td>
	<td rowspan="3"><font size="1"><center><strong>एकूण गुण<br>TOTAL<br>MARKS<br></strong></center></td>
</tr>
<tr>
	<td><font size="1"><p><strong>*विषय कोड*<br>SUBJECT CODE</strong></p></td>
	<td><font size="2"><center><strong>01</strong></center></td>
	<td><font size="2"><center><strong>02</strong></center></td>
	<td><font size="2"><center><strong>38</strong></center></td>
	<td><font size="2"><center><strong>42</strong></center></td>
	<td><font size="2"><center><strong>45</strong></center></td>
	<td><font size="2"><center><strong>49</strong></center></td>
	<td><font size="2"><center><strong>--</strong></center></td>
	<td><font size="2"><center><strong>--</strong></center></td>
</tr>
<tr>
	<td><font size="1"><p><strong>$ मध्यम/ MEDIUM</strong></p></td>
	<td><font size="2"><center>MAT</center></td>
	<td><font size="2"><center>ENG</center></td>
	<td><font size="2"><center>PHY</center></td>
	<td><font size="2"><center>CHE</center></td>
	<td><font size="2"><center>CS</center></td>
	<td><font size="2"><center>MAR</center></td>
	<td><font size="2"><center>--</center></td>
	<td><font size="2"><center>--</center></td>
</tr>
<tr>
	<td><font size="1"><p><strong>जास्तीत जास्त गुण<br>MAXIMUM MARKS</strong></p></td>
	<td><font size="1"><center>100</center></td>
	<td><font size="1"><center>100</center></td>
	<td><font size="1"><center>100</center></td>
	<td><font size="1"><center>100</center></td>
	<td><font size="1"><center>100</center></td>
	<td><font size="1"><center>100</center></td>
	<td><font size="1"><center>100</center></td>
	<td><font size="1"><center>200</center></td>
	<td><font size="1"><center>600/700</center></td>
</tr>
<tr>
	<td><font size="1"><p><strong>प्राप्त गुण<br>MARKS OBTAINED</strong></p></td>
	<td><font size="2"><center><strong><?php echo $maths ?></strong></center></td>
	<td><font size="2"><center><strong><?php echo $english ?></strong></center></td>
	<td><font size="2"><center><strong><?php echo $physics ?></strong></center></td>
	<td><font size="2"><center><strong><?php echo $chemistry ?></strong></center></td>
	<td><font size="2"><center><strong><?php echo $cs ?></strong></center></td>
	<td><font size="2"><center><strong><?php echo $marathi ?></strong></center></td>
	<td><font size="2"><center><strong>--</strong></center></td>
	<td><font size="2"><center><strong>--</strong></center></td>
	<td><font size="2"><center><strong><?php echo $tm ?></strong></center></td>
</tr>
</table>
<table cellspacing="0.1" align="center" width="45%" border="1" cellpadding="1">
<tr>
	<td colspan="3"><font size="1"><strong>पर्यावरण शिक्षण गट / ENVIRONMENT EDUCATION GRADE</strong></td>
	<td ><font size="1"><center><strong><?php echo $tg ?></strong></center></td>
	<td rowspan="5"><img src="image.png" height="100" width="100"></img></td>
</tr>
<tr>
	<td><font size="1"><center><strong>एकूण गुण (शब्दांत)<br>TOTAL MARKS(IN WORDS)</strong></center></td>
	<td colspan="3"><font size="2"><center>-</center></td>
</tr>
<tr>
	<td><font size="1"><center><strong>गुण टक्केवारी<br>PERCENTAGE OF MARKS</strong></center></td>
	<td><font size="2"><center><strong><?php echo $per ?></strong></center></td>
	<td><font size="1"><center><strong>RESULT</strong></center></td>
	<td><font size="1" style="text-transform: uppercase;"><center><strong><?php echo $res ?></strong></center></td>
</tr>
<tr>
	<td colspan="2"><font size="1"><p>* कृपया विषय कोड वर्णन पानाच्या दुसर्या बाजूला पाहू<br>* Please see the subject code description overleaf.</p></td>
	<td colspan="2"><font size="1"> <p>& कृपया मध्यम वर्णन पानाच्या दुसर्या बाजूला पाहू<br>& Please see the description of medium overleaf.</p></td>
</tr>
<tr>
	<td colspan="4"><font size="1"><p><strong>महत्वाचे-</strong>कोणत्याही गुण या स्टेटमेन्ट परिवर्तन जारी अधिकार वगळता केले जातील. या आवश्यकता कोणत्याही उल्लंघन प्रश्न गुण विधान रद्द होईल आणि मंडळाने ठरवले इतर योग्य दंड लागू समावेश होऊ शकतो.<strong>Important-</strong>No change in this Statement of Marks shall be made except by the authority issuing it. Any infringement of this requirement will result in cancellation of the statement of marks in question and may also involve imposition of other appropriate penalty as decided by the Board.</p></td>
</tr>
<tr>
	<td colspan="4"><font size="1"><p><strong>टीप/Note: </strong>किमान 35% गुण प्रत्येक विषयासाठी पास आवश्यक आहे. Minimum 35% marks are essential to pass in each subject. XX - विषयात सूट सूचित करते. XX - Indicates Exemption in the subject.AA - अनुपस्थित सूचित करते. AA - Indicates Absent.<br>+ साइन इन करा, एकूण गुण अंतर्गत दर्शविले तर, मंडळाचे नियम नुसार ग्रेड मी मिळत पुरस्कार कृपा गुण दर्शवतो.+ Sign, if shown under the total marks, indicates the grace marks awarded for getting Grade I as per regulation of the Board.<br>
$ + चिन्ह नंतर एकूण गुण आणि गुण आधी क्रीडा उमेदवार दिले अतिरिक्त गुण सूचित.<br>$ before total marks and marks after + sign indicate the additional marks given for the sports candidate.<br><br>
@ + चिन्ह नंतर एकूण गुण आणि गुण ग्रेड I. मिळत बहाल क्रीडा उमेदवार आणि कृपा गुण दिले अतिरिक्त गुण सूचित आधी
<br>@ before total marks and marks after + sign indicate the additional marks given for the sports candidate and grace marks awarded for getting grade I.</p></td>
	<td><font size="1"><img src="image2.png" height="30" width="100"></img><center>विभागीय सचिव<br><strong>Divisional Secretary<br>MSBSHSE</strong></center></td>
</tr>
</table>
<table id ="t1" width="45%" cellspacing="0.1" align="center" frame="box">
<tr>
	<td><font size="3" face="Verdana"><strong>I 0591673 &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&nbsp<font face="Courier">40092184661</strong></td>
<tr>
	<td><font size="2"><center>प्रमाणपत्र ग्रेड<strong>/Grades of Certificate</strong></center></td>
</tr>

<table width="45%" cellspacing="0.1" align="center" border="1">
<tr>
	<td><font size="2"><center><strong>प्रथम फरक श्रेणी ग्रेड<br>(Grade I with Distinction)</strong></center></td>
	<td><font size="2"><center><strong>प्रथम श्रेणी<br>(Grade I)</strong></center></td>
	<td><font size="2"><center><strong>दुसरा श्रेणी<br>(Grade II)</strong></center></td>
	<td><font size="2"><center><strong>पास श्रेणी<br>(Grade Pass)</strong></center></td>
</tr>
<tr>
	<td><font size="1"><center>75% आणि वरील<br>75% and above</center></td>
	<td><font size="1"><center>जास्त परंतु खाली 75% 60%<br>60% and above<br> but below 75%</center></td>
	<td><font size="1"><center>जास्त परंतु खाली 60% 45%<br>45% and above<br> but below 60%</center></td>
	<td><font size="1"><center>इतर सर्व यशस्वी उमेदवार<br>(समावेश सूट)<br>All other successful candidates<br>(including the exempted)</center></td>
</tr>
</table>
</div>

</body>
</html>