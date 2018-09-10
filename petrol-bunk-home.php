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
	height: 100%;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}

</style>
</head>
<body>

<div class="sidenav">
  <a class="active" href="#about">Home</a>
  <a href="submit-reports.php">Submit</a>
  <a href="#services">logout-&gt;</a>
</div>

<div class="main">
<h2>Log in</h2>
<form action="/action_page.php">
  E-mail:<br> <input type="text" name="fname"><br><br>
  Password:<br> <input type="text" name="lname"><br>
  <input type="submit" value="Submit">
</form>
</div>
</body>
</html> 
