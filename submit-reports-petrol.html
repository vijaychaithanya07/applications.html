<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.sidenav {
    height: 100%;
    width: 160px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: white;
    display: block;

}
.active
{
		background-color: grey;
}
.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="petrol-bunk-home.php">Home</a>
  <a class="active" href="submit-reports.php">Submit</a>
    <a href="#services">logout</a>
</div>

<div class="main">






<h2>Petrol</h2>
<form method="POST" action="submit-petrol-php.php">
 <table>
 <tr><td>Date</td><td>Price</td><td>dip</td><td>opening stock</td><td>total stock</td><td>pump1</td><td>pump2</td><td>testing</td><td>Sales</td><td>cumulative-sales</td></tr>
 <tr>
 <td><input type="text" style="width:60px;" name="date"></td>
 <td><input type="text" style="width:60px;" name="price"></td>
 <td><input type="text" style="width:60px;" name="dip"></td>
 <td><input type="text" style="width:90px;" name="openingstock"></td>
 <td><input type="text" style="width:90px;" name="totalstock"></td>
 <td><input type="text" style="width:60px;" name="pumpone"></td>
 <td><input type="text" style="width:60px;" name="pumptwo"></td>
 <td><input type="text" style="width:60px;" name="testing"></td>
  <td><input type="text" style="width:60px;" name="sales"></td>
 <td><input type="text" style="width:90px;" name="cumulativesales"></td>
 <td><input type="submit" value="Submit"></td>
 </tr>
 <?php
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
		$sql="SELECT * FROM submitpetrol ORDER BY date DESC";
		$result=mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0) {
		// output data of each row
			while($row = mysqli_fetch_assoc($result)) 
			{
				echo "<tr>
				<td>".$row["date"]."</td>
				<td>".$row["price"]."</td>
				<td>".$row["dip"]."</td>
				<td>".$row["openingstock"]."</td>
				<td>".$row["totalstock"]."</td>
				<td>".$row["pumpone"]."</td>
				<td>".$row["pumptwo"]."</td>
				<td>".$row["testing"]."</td>
				<td>".$row["sales"]."</td>
				<td>".$row["cumulativesales"]."</td>
				</tr>";
			}
		} 
		else
		{
			echo "0 results";
		}
			//$url = "engineer-panda.php"; // default page for 
			//header("Location: $url"); // perform correct redirect.	
	}
$conn->close();
?>

 </table>
</form>


<br><br>
</div>
</body>
</html> 
