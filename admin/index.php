<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if ($email == 'admin@gmail.com' and $pass == '12345') {
      header('location:portfolio/create.php');
    }
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  
</head>
<body style="background-size: 100%;" background="admin.jpg">

<div class="container mt-3">
  <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
      <h1 style="color: red;">Hello admin!</h1>
      <h6 style="color: red;">Enter Login and password</h6>
      <form action="" method="post">
        <input type="email" name="email" placeholder="Login" id=""><br>
        <input type="password" name="pass" placeholder="Password" id="">
        <input type="submit" class="btn btn-primary" value="Ok">
      </form>
    </div>
    <div class="col-4"></div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>