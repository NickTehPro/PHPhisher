<?php
$j = json_decode(file_get_contents("config.json"), true);
$j['page'] = 0;
file_put_contents("config.json", json_encode($j));
header("Location: index.php"); 

