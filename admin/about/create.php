<?php

require '../fun.php';

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = 'INSERT INTO about (address,email,phone) VALUES (:address,:email,:phone)';
    $sql = $conn->prepare($sql);
    $sql->execute([
        'address'=>$address,
        'email'=>$email,
        'phone'=>$phone
    ]);
}
$posts  = selectAll('about');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color:yellow">

    <div class="row" >
    <div class="col-4">
        <?php
require 'header.php';

        ?>
    </div>
    <div class="col-8 mt-3">
    <form action="" method="post">
        <h3>
        <label for="address">Manzil</label><br>
        <input type="text" name="address" id="address"><br>
        <label for="email">E-mail</label><br>
        <input type="email" name="email" id="email"><br>
        <label for="phone">Phone</label><br>
        <input type="tel" name="phone" id="phone">
        <input type="submit" class = "btn btn-primary" value="Ok">
        </h3>
        </form><br><br><br><br><br><br><br><br><br><br>
    </div>
        
    
    </div>
    <h1><hr></h1>
    <br><br><br>
    <div class="container">
    <div class="row">
<table style="border:2px solid black">
<?php foreach ($posts as $post) :?>
<tr style="border:2px solid black">
    <th style="border:2px solid black">ID</th>
    <th style="border:2px solid black">Address</th>
    <th style="border:2px solid black">E-mail</th>
    <th style="border:2px solid black">Phone</th>
    <th style="border:2px solid black">CRUD</th>
</tr>
<tr style="border:2px solid black">
    <td style="border:2px solid black"><?=$post['id']?></td>
    <td style="border:2px solid black"><?=$post['address']?></td>
    <td style="border:2px solid black"><?=$post['email']?></td>
    <td style="border:2px solid black"><?=$post['phone']?></td>
    <td style="border:2px solid black"><h6><a href="edit.php?id=<?=$post['id']?>">Edit</a></h6><h6><a href="delete.php?id=<?=$post['id']?>">Delete</a></h6></td>
</tr>
<?php endforeach;?>
</table>


    </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>