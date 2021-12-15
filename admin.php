<?php
// Start the session
session_start();
$user = $_GET['username'];
//echo $user;
//echo $_SESSION['userLogged'];
if(!isset($_SESSION['userLogged']) || !$_SESSION['userLogged'] === $user){

  header('Location:login.php');
  //echo "Session does not exist.";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A short description of the web page purpose/ intent">
    <meta name="author" content="Your name 2021">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <style>
*{padding:0;margin:0;}
.nav-grid{display: grid; grid-template-columns: 1fr 1fr 1fr;height: 8vh; line-height: 8vh;font-size: 130%; background-color: #000; color: #fff;}
.left{padding: 10px;}
.middle{ text-align: center;}
.right{ text-align: right;padding: 10px;}
a:link, a:visited{color:#fff;}
    </style>
</head>
<body>

<p><nav class="nav-grid">
<div class="left"><?php echo "Logged in as: ". $_SESSION['userLogged'] ?></div>
<div class="middle"><h1>PHP Sessions - Admin</h1></div>

<div class="right"><a href="logout.php?state=false">Logout</a></div>


</nav>
<header>





</header>

<div class="container">
<div class="row">








<div class="mb-3 col-md-12">
    
  </div>


</div>
<footer class="footer mt-auto py-3 bg-light navbar-fixed-bottom text-center">
  <div class="container">
    <span class="text-muted">Password hash</span>
  </div>
</footer>
</div>





</body>
</html>