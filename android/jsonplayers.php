<?php

require 'jsoninterface.php';

$json = new JSONInterface();

echo $json->toJsonString();

if(filter_input(INPUT_GET, "close")){
   $json->closeDB();
}

?>