<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=BSS;host=localhost;", "root", "root");
$pdo->exec("insert into BSS(name,title,comment)
values('".$_POST['name']."','".$_POST['title']."','".$_POST['comment']."');");
header("Location:http://localhost:8888/BSS/index.php");
?>