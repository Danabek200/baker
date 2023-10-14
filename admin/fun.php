<?php

require 'db.php';



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
function insert($table,$param=[]){
    global $conn;

    $coll = '';
    $row = '';
    $i = 0;
    foreach ($param as $key => $value) {
        if ($i===0) {
            $coll = $coll.$key;
            $row = $row.$key;
        }else{
            $coll = $coll.",".$key;
            $row = $row.", '".$key."'";
        }
    }

}
function selectAll($table, $params = []){
    global $conn;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if (!is_numeric($value)){
                $value = "'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key=$value";
            
            }else{
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }

    $query = $conn->prepare($sql);
    $query->execute();
    
    return $query->fetchAll();
}
?>