<?php

require 'jsoninterface.php';

$json = new JSONInterface();

echo $json->toJsonString("teams", "select * from teams");

if(filter_input(INPUT_GET, "close")){
   $json->closeDB();
}

?>