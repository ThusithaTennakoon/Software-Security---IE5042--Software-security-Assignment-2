

<!by using this code we can enhance the security of the system because if some one tries to access the website without giving login credintials , automatically ridirects to the login page >


<?php
session_start();

if(!isset($_SESSION['username'])){
header('location:login.php');



}
?>


<!This is the index page of the system user can sign in to thier google drive using their credentials & if user wants some help regrading steps , there is a youtube video embeded to this page >

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>OAuth 2.0 Google Drive File Upload (Software Securtity Assignment)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="main.js"></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
  </head>
  <body>
<div class="container">

  <!This is logout button - you can logged out from the system and it redirects to the login page>
  
      <button><a  class="float-right" href="logout.php"><b>LOGOUT</b></a></button> 
    <div class="wrapper">
      <div class="container">
        
        <h5>Google OAuth 2.0 Application (Software Securtity Assignment) Watch below video if you want help</h5>
        
       <!Embeded youtube video link>
        <iframe width="300" height="200" 
src="https://www.youtube.com/embed/OlP3wqbf1tg">
</iframe>
 <h3>Login</h3>   
        <div class="upload-container">
          <div class="border-container">
            <button class="btb btn-primary" id="login">
              <img src="google.jpg" width="30" height="30" />
              Sign Into Google toupload files
            </button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
