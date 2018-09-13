<?php

header('Content-Type: application/json');
require "logwriter.php";

$request = file_get_contents("php://input");

if(write($request) === FALSE)
{
	echo trim('
	{
		"ResultCode": 1, 
		"ResultDesc": "Fail",
		"ThirdPartyTransID": ""
	}');
	return;
}

echo trim('
{
	"ResultCode": 0,
	"ResultDesc": "Response",
	"ThirdPartyTransID": ""
}');
