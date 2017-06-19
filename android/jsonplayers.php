<?php
//$json = new JSONInterface();
//
//echo $json->toJsonString();
//
//if(filter_input(INPUT_GET, "close")){
//   $json->closeDB();
//}

require_once('../ABASports/db.php');

class jsonplayers {
    private $conn;
    
    public function __construct() {
        $this->conn = new db();
    }
    
    public function displayPlayers(){
        $result = $this->conn->getAll('SELECT * FROM players');
        $return = [];
        foreach($result as $player){
            $return[] = [
                'first_name' => $player['first_name'],
                'last_name' => $player['last_name'],
                'team' => $player['team'],
                'ID' => $player['ID']
            ];
        }
        echo json_encode($return, JSON_PRETTY_PRINT);
    }
}

$jsonplayers = new jsonplayers();
$jsonplayers->displayPlayers();
?>