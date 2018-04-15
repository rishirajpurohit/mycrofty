<?php


$data = file_get_contents("php://input");
$fh = fopen(__DIR__."/logs.txt","a+");
fwrite($fh,$data."\n\n\r");
fclose($fh);

?>