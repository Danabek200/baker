<?php
require '../db.php';
$id = $_GET['id'];
$sql = "SELECT * FROM body WHERE id='$id'";
$sql = $conn->prepare($sql);
$sql -> execute();
$posts = $sql->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $text = $_POST['text'];
   
    $sql = "UPDATE body SET title= '$title',text= '$text' WHERE id='$id'";
    $sql = $conn->prepare($sql);
    $sql -> execute();
    // $posts = $sql->fetch();
    header('location:index.php');
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
    Tile: <textarea name="title" type = "text" id="" cols="30" rows="10"><?=$posts['title']?></textarea>
    Text: <textarea name="text" type = "text" id="" cols="30" rows="15"><?=$posts['text']?></textarea>
    <input type="submit" value="Ok">
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>