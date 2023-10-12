<?php

require '../db.php';

require '../fun.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   

    $filesize=$_FILES['img']['size'];
    $filetmp = $_FILES['img']['tmp_name'];
    $filename = $_FILES['img']['name'];
   
    $title = $_POST['title'];
    $fakt = $_POST['fakt'];
$allowded = array('jpg','png','jpeg');
$path = pathinfo($filename);

$ext = $path["extension"];
if (!in_array($ext,$allowded)) {
    echo "Error";
}

    
    
    
    $sql = 'INSERT INTO portfolio (title,fakt,img) VALUES (:title,:fakt,:img)';
    $sql = $conn->prepare($sql);
    $sql->execute([
        'title'=>$title,
        'fakt'=>$fakt,
        'img'=>$filename
    ]);
    move_uploaded_file($filetmp,"upload/".$filename);

    
}

$posts  = selectAll('portfolio');

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
    <form action="" method="post" enctype="multipart/form-data">
        <h3>
        <h1><em>Admin Fakt Kiritin'</em></h1>
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title"><br>
        <label for="fakt">Fakt</label><br>
        <input type="text" name="fakt" id="fakt">
        <input type="file" name="img" id="">
            <input type="submit" class="btn btn-primary" value="OK">
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
    <th style="border:2px solid black">Title</th>
    <th style="border:2px solid black">Fakt</th>
    <th style="border:2px solid black">Img</th>
    <th style="border:2px solid black">CRUD</th>
</tr>
<tr style="border:2px solid black">
    <td style="border:2px solid black"><?=$post['id']?></td>
    <td style="border:2px solid black"><?=$post['title']?></td>
    <td style="border:2px solid black"><?=$post['fakt']?></td>
    <td style="border:2px solid black"><?=$post['img']?></td>
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