<?php
require 'admin/db.php';

$sql = 'SELECT * FROM body ';
$sql = $conn->prepare($sql);
$sql -> execute();
$row = $sql->fetch();

$str_len = strlen($row['text']);
if ($str_len > '30'){
  $row['text'] = mb_substr($row['text'], 0, 30);
$i=strlen(trim($row['text']));
$s = false;
            while($s && $i>0) {
                if (mb_substr($row['text'], $i-1, 1)==' ')
                    $s = true;
                $row['text'] = mb_substr($row['text'], 0, -1);
                $i--;
            }
}
?>