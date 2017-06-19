<?php

class myObj{
    public $result;
    public $name;
    public $lastname;
    
    public function __construct() {
        $this->result;
        $this->name;
        $this->lastname;
    }
    
}

$myObj = new myObj();
$myObj->result = "Testing";
$myObj->name = "Bryan";
$myObj->lastname = "Wong";  


$response = json_encode($myObj);
echo $response;