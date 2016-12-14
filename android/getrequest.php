<?php

require 'jsoninterface.php';

$json = new JSONInterface();

$query = filter_input(INPUT_GET, "query", FILTER_SANITIZE_STRING); // will contain a fully formed query
if(!$query){
   $id = filter_input(INPUT_GET, "ID", FILTER_SANITIZE_STRING); // if query not present, check for player id
   $query = "select * from players where ID=$id";
}

if($query){
   echo $json->jsonEncodeQueryResult($query);
}

$json->closeDB();

?>