<?php

require 'admin/db.php';
require 'admin/fun.php';

$id = $_GET['id'];

// $sql = "SELECT * FROM blog WHERE id='$id'";
// $sql = $conn->prepare($sql);
// $sql ->execute();
// $posts=$sql->fetch();

$post = selectOne('blog',$id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
        <pre>
            </pre>
            <h2><?= $post['title'];?></h2><br>
            <em><h4><?= $post['text']?></h4></em><br>
        </div>
        <div class="col-4"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <h1><a href="index.php">Artqa</a></h1>
        </div>   
    </div>
</div>
</body>
</html>