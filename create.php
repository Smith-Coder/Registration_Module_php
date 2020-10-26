<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Join</title>
</head>
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
            <div class="col-md-8 col-sm-8">
                <form method="post" action="create.php">
                    <div class="form-group">
                        <label for="name1">Your name</label>
                        <input type="text" class="form-control required" id="name1" placeholder="your name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name of the team</label>
                        <input type="text" class="form-control required" id="name" placeholder="team name" name="teamname" required>
                    </div>
                    <div class="form-group">
                        <label for="pass1">Create a password</label>
                        <input type="password" class="form-control required" id="pass1" placeholder="password" name="password1" required>
                    </div>
                    <div class="form-group">
                        <label for="pass2">Confirm the password</label>
                        <input type="password" class="form-control required" id="pass2" placeholder="confirm password" name="password2" required>
                    </div>
          
                    <button type="submit" class="btn btn-default">Create</button>
                    <br>
                </form>
                <a href="index.php">Back To Home Page</a>
            </div>
            <div class="col-md-2 col-sm-2"></div>
        </div>
    </div>
<?php
$host = "localhost";
$user = "id15024307_csgor";
$pass = "Database_123";
$dbname = "id15024307_csgo";
$conn = mysqli_connect($host, $user, $pass, $dbname);
global $name1;
global $teamname1;
global $pass1;
global $pass2;
if(isset($_POST['name']))
{
    $name1 = $_POST['name'];
}
if(isset($_POST['teamname']))
{
    $teamname1 = $_POST['teamname'];
} 
if(isset($_POST['password1']))
{
    $pass1 = $_POST['password1'];
}
if(isset($_POST['password2']))
{
    $pass2 = $_POST['password2'];
}
if($pass1==$pass2)
{
    $good = str_replace(' ', '_', $teamname1);
	$sql="INSERT INTO team(Teamname,Teampassword)VALUES('$teamname1','$pass1')";
    $conn1=mysqli_query($conn,$sql);
    $sql2="CREATE TABLE $good(Members VARCHAR(30))";
    $conn2=mysqli_query($conn,$sql2);
    $sql3="INSERT INTO $good(Members)VALUES('$name1')";
    $conn3=mysqli_query($conn,$sql3);
    if($conn1 && $conn2 && $conn3)
    {
     echo "<p class='alert alert-success container' role='alert'>Successfully created the table</p>";
    }   
}
else{
	echo "<p class='alert alert-danger container' role='alert'>password does not match, Re-enter</p>";
}
mysqli_close($conn);
?>	
</body>
</html>