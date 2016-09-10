<?php 
$file = fopen("memo.txt", "a");
$memo = $_POST['memo'];

fwrite($file, $memo);

fclose($file);

echo "file modified :".$memo;
?>