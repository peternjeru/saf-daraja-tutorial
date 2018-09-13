<?php

function write($content)
{
	$linebreak = "\r\n\r\n<br>
	#############################################
	<br>\r\n\r\n";
	$file = 'logs.log';
	$oldContents = file_get_contents($file);
	$fr = fopen($file, 'w');
	$res;
	if(strlen($oldContents) > 100000)
	{
		$res = fwrite($fr, $content.$linebreak);
		fclose($fr);
	}
	else
	{
		$res = fwrite($fr, $content.$linebreak.$oldContents);
		fclose($fr);
	}
	return $res;
}
