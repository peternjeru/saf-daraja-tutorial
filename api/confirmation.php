<?php

header('Content-Type: application/json');
require "logwriter.php";

$request = file_get_contents("php://input");

write($request);

echo trim('
{
	"C2BPaymentConfirmationResult": "Success"
}');
