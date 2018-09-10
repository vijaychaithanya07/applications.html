<?php
//Taking variables from the form
$date=filter_input(INPUT_POST,'date');
$price=filter_input(INPUT_POST,'price');
$dip=filter_input(INPUT_POST,'dip');
$openingstock=filter_input(INPUT_POST,'openingstock');
$totalstock=filter_input(INPUT_POST,'totalstock');
$pumpone=filter_input(INPUT_POST,'pumpone');
$pumptwo=filter_input(INPUT_POST,'pumptwo');
$testing=filter_input(INPUT_POST,'testing');
$sales=filter_input(INPUT_POST,'sales');
$cumulativesales=filter_input(INPUT_POST,'cumulativesales');
//data validation still needs to be done

//parameters required to connect to db
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname="petrol";
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword,$dbname);

// Check connection
if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
else
	{	
			$url = "submit-reports-petrol.php"; // default page for 
			header("Location: $url"); // perform correct redirect.
			

		$sql="INSERT INTO submitpetrol(date,price,dip,openingstock,totalstock,pumpone,pumptwo,testing,sales,cumulativesales) 
		values('$date','$price','$dip','$openingstock','$totalstock','$pumpone','$pumptwo','$testing','$sales','$cumulativesales')";
		$res=mysqli_query($conn,$sql);
	}
$conn->close();
?>