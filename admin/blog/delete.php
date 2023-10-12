<?php
require '../db.php';

$id = $_GET['id'];


$sql = "SELECT * FROM blog WHERE id='$id'";
$sql = $conn->prepare($sql);
$sql -> execute();
$posts = $sql->fetch();

$sql ="DELETE FROM blog WHERE id='$id'";
$conn->exec($sql);
header('location:index.php');
?>