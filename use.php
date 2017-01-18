<?php
$page = $_GET['page'];
$j = json_decode(file_get_contents("config.json"), true);
$j['page'] = $page;
file_put_contents("config.json", json_encode($j));

header("Location: index.php"); 

