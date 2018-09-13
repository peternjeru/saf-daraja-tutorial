<?php

require "logwriter.php";

$request = file_get_contents("php://input");

if(strlen($request) > 0)
{
	write($request);
}
echo "Success";