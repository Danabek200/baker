<?php
//     $sql = "SELECT * FROM $table";
// echo             $sql = $sql."WHERE".$key ."="."'". $value."'";
// exit();

require 'admin/db.php';
function test($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function insert($table , $param = []){

    global $conn;
    $coll = '';
    $row = '';
   $i = 0;
    foreach ($param as $key => $value) {
       if($i==0){

           $coll = $coll." $key ";
           $row = $row."'". " $value "."'";
       }else{
           $coll = $coll.", $key ";
           $row = $row.", '". "$value"."'";
       }
       
       $i++;
       
    }
    
    $sql = "INSERT INTO $table ($coll) VALUES ($row)";
    $sql = $conn->prepare($sql);
    $sql->execute();
    return $conn->lastInsertId();
    




}


function selectAll($table,$param=[]){
    global $conn;
    $sql = "SELECT * FROM $table";
        if (!empty($param)) {
        $i = 0;
        foreach ($param as $key => $value) {
            if ($i === 0) {
                $sql = $sql." WHERE ".$key ."=". $value ;                
            }else {
                
                $sql = $sql."  AND ". $key." = " ."'" . $value ."'";
            }
            
            $i++;
        }
    }
    // echo $sql;
    $sql = $conn->prepare($sql);
    $sql ->execute();
    return $sql->fetchAll();
}

function update($table, $id, $param = []){

    global $conn;
    $row = '';
    $i = 0;
    foreach ($param as $key => $value) {
       if ($i===0) {
        $row = $row.$key."= '".$value."'";

       }else{

        $row = $row.",".$key."= '".$value."'";
         
       }
       $i++;
    }

    $sql = "UPDATE $table SET $row WHERE id =$id";
    $sql=$conn->prepare($sql);
    $sql->execute();
     echo "ozgerdi";


    
}


$data = [
    'id'=>8,
    'title'=>"karsu",
    'text'=>"lorem"
];
test(selectAll('body'));
?>