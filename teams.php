<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Teams</title>
</head>
<body>
<body>
    <div>
	    <div class="jumbotron">
		<h1>CSGO</h1>
		<h3>Team up for fun</h3>
	</div>
    <div class="container">
	    <div class="row">
	        <div class="col-md-2 col-sm-2">
		        <ul class="nav nav-pills nav-stacked">
		            <li role="presentation"><a href="index.php">Home</a></li>
                    <li role="presentation"><a href="register.php">Register</a></li>
                    <li role="presentation" class="active"><a href="teams.php">Teams</a></li>
                </ul>
            </div>
            <div class="col-md-8 col-sm-8" id="edit">
            	<ul>
            		<div class="divi">
            		<label for="join" class="label required">Click here to join a team</label>
            		<br>
            		<button class="btn btn-default" id="join" onclick= "window.location.href='join.php'">Join</button> 
            		</div>
            		<div class="divi">
            		<label for="create" class="label required">Click here to create a team</label>
            		<br>
		            <button class="btn btn-default" id="link" onclick= "window.location.href='create.php'">Create</button>	
            		</div>
            		
            	</ul>
		    </div>
		    <div class="col-md-2 col-sm-2"></div>
        </div>
    </div>
<?php
$host = "localhost:3306";
$user = "root";
$pass = "";
$dbname = "csgo";
$conn = mysqli_connect($host, $user, $pass, $dbname);
global $name1;
global $email1;
global $steamcode1;
global $steamname1;
if(isset($_POST['name']))
{
    $name1 = $_POST['name'];
}
if(isset($_POST['email']))
{
    $email1 = $_POST['email'];
} 
if(isset($_POST['steamcode']))
{
    $steamcode1 = $_POST['steamcode'];
}
if(isset($_POST['steamname']))
{
    $steamname1 = $_POST['steamname'];
}
if($name1 && $email1 && $steamcode1 && $steamname1 != "null")
{
$sql="INSERT INTO register(Name,Email,Steamcode,Steamname)VALUES('$name1','$email1','$steamcode1','$steamname1')";
mysqli_query($conn,$sql);
}
mysqli_close($conn);
?>	
</body>
</html>