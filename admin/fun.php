<?php

require 'db.php';

function selectAll($table)  {
    global $conn;
    $sql = "SELECT * FROM $table";
    $sql = $conn->prepare($sql);
    $sql -> execute();
    return $sql->fetchAll();
}

function selectOne($table,$id)  {
    global $conn;
    $sql = "SELECT * FROM $table WHERE id='$id'";
    $sql = $conn->prepare($sql);
    $sql -> execute();
    return $sql->fetch();
}
function selectAbout($table)  {
    global $conn;
    $sql = "SELECT * FROM $table";
    $sql = $conn->prepare($sql);
    $sql -> execute();
    return $sql->fetch();
}
?>