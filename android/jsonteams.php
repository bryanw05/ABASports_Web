<?php

//require 'jsoninterface.php';
//
//$json = new JSONInterface();
//
//echo $json->toJsonString("teams", "select * from teams");
//
//if(filter_input(INPUT_GET, "close")){
//   $json->closeDB();
//}

require_once('../ABASports/db.php');

class jsonTeams {
        private $conn;
        
        public function __construct() {
            $this->conn = new db();
        }
    public function displayTeam(){
        $result = $this->conn->getAll('SELECT * FROM teams');
//        $response["Teams"] = [];
        $return = [];
        foreach($result as $name){
            $return[] = [
             'name' => $name['name'],
             'division' => $name['division'],
             'wins' => $name['wins'],
             'losses' => $name['losses'],
             'streak' => $name['current_streak'],
             'roster' => $name['roster']
            ];
           //array_push($response["Teams"], $return);
        }
        echo json_encode($return, JSON_PRETTY_PRINT);
    }
    
}

$jsonTeams = new jsonTeams();
$jsonTeams->displayTeam();
?>