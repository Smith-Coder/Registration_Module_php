<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
</head>
<body>
    <div>
	    <div class="jumbotron">
		<h1>CSGO</h1>
		<h3>Register for fun</h3>
	</div>
    <div class="container">
	    <div class="row">
	        <div class="col-md-2 col-sm-2">
		        <ul class="nav nav-pills nav-stacked">
		            <li role="presentation"><a href="index.php">Home</a></li>
                    <li role="presentation" class="active"><a href="register.php">Register</a></li>
                    <li role="presentation"><a href="teams.php">Teams</a></li>
                </ul>
            </div>
 
            <div class="col-md-8 col-sm-8">
                <form method="post" action="teams.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control required" id="name" placeholder="your name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control required" id="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="steam">Steam code</label>
                        <input type="text" class="form-control required" id="steam" placeholder="your steam code" name="steamcode" required>
                    </div>
                    <div class="form-group">
                        <label for="steam-name">Name in steam</label>
                        <input type="text" class="form-control required" id="steam-name" name="steamname" placeholder="your name in steam" required>
                    </div>
          
                    <button type="submit" class="btn btn-default">Register</button>
                </form>
                <a href="index.php">Back To Home Page</a>
            </div>
            <div class="col-md-2 col-sm-2"></div>
        </div>
    </div>	
</body>
</html>