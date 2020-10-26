<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
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
                <form method="post">
                    <div class="form-group">
                        <label for="name1">Your name</label>
                        <input type="text" class="form-control required" id="name1" placeholder="your name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name of the team</label>
                        <input type="text" class="form-control required" id="name" placeholder="team name" name="teamname" required>
                    </div>
                    <div class="form-group">
                        <label for="pass">Team password</label>
                        <input type="password" class="form-control required" id="pass" placeholder="password" name="password" required>
                    </div>
          
                    <button type="submit" class="btn btn-default">Join</button>
                </form>
                <a href="index.php">Back To Home Page</a>
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
global $name2;
global $teamname2; 
global $password2;
if(isset($_POST['name']))
{
    $name2 = $_POST['name'];
}
if(isset($_POST['teamname']))
{
    $teamname2 = $_POST['teamname'];
} 
if(isset($_POST['password']))
{
    $password2 = $_POST['password'];
}
$sql="SELECT Teamname,Teampassword FROM team where Teamname='$teamname2'";
$check=mysqli_query($conn,$sql);
if(!$check)
{
    echo "<p class='alert alert-danger container' role='alert'>Teamname does not exist</p>";
}
else
{
  $good = str_replace(' ', '_', $teamname2);
  $row=mysqli_fetch_row($check);
  if($row[0] == $teamname2 && $row[1] == $password2){
    $sql="INSERT INTO $good(Members)VALUES('$name2')";
    $check2=mysqli_query($conn,$sql);
    if($check2)
    {
        echo "<p class='alert alert-success container' role='alert'>Successfully joined the team</p>";
    }
  }
  else{
    echo "<p class='alert alert-danger container' role='alert'>Teamname or Password does not exist</p>";
  }
}    
mysqli_close($conn);
?>
</body>
</html>