
<?php
session_start();

// validation page database connection
$con= mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$name=$_POST['user'];
$pass=$_POST['password2'];
$code1=$_POST['code1'];
$code2=$_POST['code2'];

// only allows user to login if name and password registerd in database and yes yes as the answers for the registation form quections

$s="select * from usertable where name ='$name' && password ='$pass'&& code1='yes'&& code2='yes'";


$result = mysqli_query($con,$s);



$num = mysqli_num_rows($result);


if ($num == 1){
	

	$_SESSION['username']= $name;


header('location:index.php');
echo "welcome";
// if not the page will be redirected to login page
}else  {
	header('location:login.php');

}






?>