<?php
require '../db.php';

$id = $_GET['id'];


$sql = "SELECT * FROM body WHERE id='$id'";
$sql = $conn->prepare($sql);
$sql -> execute();
$posts = $sql->fetch();

$sql ="DELETE FROM body WHERE id='$id'";
$conn->exec($sql);
header('location:create.php');
?>