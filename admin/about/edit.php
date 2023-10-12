<?php
require '../db.php';
$id = $_GET['id'];
$sql = "SELECT * FROM about WHERE id='$id'";
$sql = $conn->prepare($sql);
$sql -> execute();
$posts = $sql->fetch();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
   
    $sql = "UPDATE about SET address= '$address',email= '$email',phone= '$phone' WHERE id='$id'";
    $sql = $conn->prepare($sql);
    $sql -> execute();
    // $posts = $sql->fetch();
    header('location:create.php');
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
<body style="background-color: yellow;">
<div class="container mt-3">

<form action="" method="post">
        <h3>
        <label for="address">Manzil</label><br>
        <input type="text" name="address" value="<?=$posts['address']?>" id="address"><br>
        <label for="email">E-mail</label><br>
        <input type="email" name="email" value=" <?=$posts['email']?>" id="email"><br>
        <label for="phone">Phone</label><br>
        <input type="tel" name="phone" value=" <?=$posts['phone']?>" id="phone">
        <input type="submit" class = "btn btn-primary" value="Ok">
        </h3>
        </form><br><br><br><br><br><br><br><br><br><br>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>