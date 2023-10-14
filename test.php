<?php
require 'admin/db.php';
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
$data = [
    'title'=>'danabek',
    'text'=>'test',
];
print_r( SelectAll('body',$data));
?>