<?php

require 'jsoninterface.php';

$json = new JSONInterface();

echo $json->toJsonString("games", "select * from games");

if(filter_input(INPUT_GET, "close")){
   $json->closeDB();
}

?>