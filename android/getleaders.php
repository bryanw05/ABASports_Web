<?php
 
 require_once('../ABASports/db.php');

 class getleaders {
     private $conn;
     
     public function __construct() {
         $this->conn = new db();
     }
     
     public function displayLeaders(){
         $leaders = $this->conn->getAll('SELECT * FROM players WHERE points=(SELECT MAX(points) FROM players)'
                 . 'OR assists=(SELECT MAX(assists) FROM players)'
                 . 'OR steals=(SELECT MAX(steals) FROM players)'
                 . 'OR rebounds=(SELECT MAX(rebounds) FROM players)'
                 . 'OR blocks=(SELECT MAX(blocks) FROM players)');        
         echo json_encode($leaders);
     } 
 }
 
$jsonleaders = new getleaders();
$jsonleaders->displayLeaders();

// $query = "select * from players where points=(select max(points) from players) "
//                               . "or assists=(select max(assists) from players) "
//                                 . "or steals=(select max(steals) from players) "
//                                 . "or blocks=(select max(blocks) from players) "
//                              . "or rebounds=(select max(rebounds) from players)";
// 
// echo $json->toJsonString("players", $query); 

?>