<?php

if(!isset($_POST["requestData"]))
{
	print_r("Error");
	return;
}
$request = $_POST["requestData"];

try
{
	$headers = array();
	foreach($request["headers"] as $key => $val)
	{
		array_push($headers, $key.": ".$val);
	}

	$data = "";
	if(isset($request["data"]))
	{
		$data = json_encode($request["data"]);
		array_push($headers, "Content-Length: ".strlen($data));
	}

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $request["url"]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, $request["method"] === "POST");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	if(isset($request["data"]))
	{
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	}
	
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

	$response = curl_exec($ch);
	if(curl_errno($ch) !== 0)
	{
		echo curl_error($ch);
		curl_close($ch);
		return;
	}
	
	curl_close($ch);
	echo $response;
}
catch(Exception $e)
{
	echo $e->getMessage();
}
