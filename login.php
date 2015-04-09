<?php	
	session_start();
	
	if(isset($_POST['loginSubmit'])) // If the user pressed the Submit button
	{
		// This will not be used if successful login
		$error = '<div class="alert alert-danger" role="alert"><b>Login Error:</b> Please enter a valid username and password.</div>';
		
		// Entered user information
		$uname = $_POST['username'];
		$pass = $_POST['password'];
		
		// Session Information
		$sess_id = "loggedin";

		if ($uname == "username" && $pass == "password")
		{
		    $_SESSION["id"] = $sess_id;
			// If the user came from the login page, direct them to the landing page
			if ($_SERVER['HTTP_REFERER'] == "http://csis.svsu.edu/~jnbraun/index.php" 
			    || $_SERVER['HTTP_REFERER'] == "http://csis.svsu.edu/~jnbraun/login.php" )
			{
				// Relocate to landing page
				header('Location: index.php');
				exit;
			}
			else
			{
				// Relocate to landing page
				header('Location: '. $_SERVER['HTTP_REFERER']);
				exit;
			}
		}
				
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Customer Login</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
	
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<div class="col-md-4"></div>	
	<div class="col-md-4" style="margin-top: 40px;">

		<br/>
		<div class="panel panel-default" style="box-shadow: 2px 2px 7px #888888;">
			<div class="panel-heading"><b>Login</b></div>
				<div class="panel-body">
				<?php
					echo '<form method="POST" action="login.php">
					<input type="text" size="10" name="username" class="form-control" value="'. $uname .'" placeholder="username">
					<input type="password" size="10" name="password" style="margin-top: 5px;" class="form-control" placeholder="password"><br>
					'.$error.'
					<button type="submit" name="loginSubmit" style="width: 100%;" class="btn btn-success">Submit</button>
				</form>';
				?>
				</div>
		</div>
		<a href="indexsters.php" style="text-decoration: none;"><span class="glyphicon glyphicon-arrow-left" style="padding-right:3px;"></span> Back to Home</a>
		
	</div>
	<div class="col-md-4"></div>
	</div>
	</center>
	</body>
	</html>	