<?php
 
 include 'jsoninterface.php';

 $json = new JSONInterface();
 
 $query = "select * from players where points=(select max(points) from players) "
                               . "or assists=(select max(assists) from players) "
                                 . "or steals=(select max(steals) from players) "
                                 . "or blocks=(select max(blocks) from players) "
                              . "or rebounds=(select max(rebounds) from players)";
 
 echo $json->toJsonString("players", $query); 

?>