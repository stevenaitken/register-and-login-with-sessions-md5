<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A short description of the web page purpose/ intent">
    <meta name="author" content="Your name 2021">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash Passwords</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="css/styles.css" rel="stylesheet">

    <style>

h4{color:red;margin-top: 10vh;}
    
    </style>
</head>
<body>

<div class="container">
<div class="row">



<header><h1>Hash Passwords md5 - register</h1>


</header>

<form method="POST" action="register_user.php" name="register" id="register" class="register">

<label for "username">Username</label>
<input type="text" name="user" id="user" class="form-input" required title="Enter username" placeholder="Enter username">
<label for "pwd">Password</label>
<input type="password" name="pwd" id="pwd" class="form-input" required title="Enter password" placeholder="Enter password">
<input type="submit" name="submit" id="submit" value="Register">




</form>




</div>
<footer class="footer mt-auto py-3 bg-light navbar-fixed-bottom text-center">
  <div class="container">
    <span class="text-muted">Password hash</span>
  </div>
</footer>
</div>





</body>
</html>