<?php

$file = fopen("logs.log", "r");
$logs = fread($file, "100000");
fclose($file);

echo $logs;
