
<!login .php  - after you run the program frirst time you are riderected to this page>
<!in here you can register using and name and password >
<!in order to login you must change the paths in upload.js & main.js>

<!DOCTYPE html>
<html>
<head>
	<title> User login and Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	

	<h1>Software Security OAuth 2.0 Assignment<br></h1>



<!this is the login form you can use your registerd login credentials here>

<div class="Container">
	<div class="login-box">
<div class="row">
<div class="col-md-6 login-left">
	<h2>Login here</h2>
	<form action="validation.php" method="post">
		
<div class="form-group">
	<label>User name</label>
	<input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
	<label>Password</label>
	<input type="Password" name="password2" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary">Login </button>
<br>
<br>
&copy; <b>2021 to Kanishka & Thusitha</b>-<?php echo date("2021/05/04");?>
<p> Hint!!!
You have to change the .js files first & after that you can register to the system but if you enter "NO"  in the relevent filed's you cannot login

Thank you!
</p>


<!this is the Register form you can use this form to register new user to the system and if some one already in the system it will not be processed>
	</form>

</div>
<div class="col-md-6 login-right">
	<h2>Register here</h2>
	<form action="registration.php" method="post">
		
<div class="form-group">
	<label>User name</label>
	<input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
	<label>Password</label>
	<input type="Password" name="password1" class="form-control" required>

</div>


<div class="form-group">
	<label>In <b>main.js </b>Did you changed the path? Yes / No</label>
	<input type="Text" name="code1" class="form-control" required>
	
</div>
<div class="form-group">
	<label>In<b> Upload.js</b> : Did you changed the path? Yes / No </label>
	<input type="Text" name="code2" class="form-control" required>
</div>
 
 <h6>Location for .js files</h6>
    <a href ="C:\xampp\htdocs\Oauth"><button type="submit" class="btn btn-primary">
        Click here to open folder</button>

    </a>

<button type="submit" class="btn btn-primary">Register </button>






</form>
</div>


</div>
</div>

</div>


</body>
</html>