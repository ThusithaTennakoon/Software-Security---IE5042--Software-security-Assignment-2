<?php
session_start();
// data base connection user name is root and no password
header('location:login.php');
$con= mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');
//cclumns in data base 
$name=$_POST['user'];
$pass=$_POST['password1'];
$code1=$_POST['code1'];
$code2=$_POST['code2'];

//in this section we check if there is already a member registerd in database as the name you enterd if registered a massage will pop up saying "User name already taken"
$s="select * from usertable where name ='$name'";

$result = mysqli_query($con,$s);


$num = mysqli_num_rows($result);


if ($num==1)

{


echo "User name already taken";

}

else  {
//if  not registerd user name and password will be registered in to the database

$reg= "insert into usertable(name,password,code1,code2)values('$name','$pass','$code1','$code2')";
mysqli_query($con,$reg);

// if successful registration happens this massage will pop up
echo "Registration Success full ";

	
}






?>