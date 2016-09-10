<?php 
$file = fopen("memo.txt", "a");
$memo = $_POST['memo'];

fwrite($file, $memo);

echo "file modified";
?>