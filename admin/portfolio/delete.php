<?php
require '../db.php';

$id = $_GET['id'];


$sql = "SELECT * FROM portfolio WHERE id='$id'";
$sql = $conn->prepare($sql);
$sql -> execute();
$posts = $sql->fetch();

$sql ="DELETE FROM portfolio WHERE id='$id'";
$conn->exec($sql);
header('location:create.php');
?>