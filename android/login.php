<?php

    require_once('../ABASports/db.php');
    
class login {
    private $conn;    
    
    public function __construct(){
        $this->conn = new db();
    }
    
    public function loginUser($user, $pass){
        $statement = $this->conn->prepare("SELECT * FROM users WHERE username=:user LIMIT 1");
        $statement->execute(array(':user'=>$user));
        $userRow = $statement->fetch(PDO::FETCH_ASSOC);
        if($statement->rowCount()> 0){
            if(password_verify($pass, $userRow['password'])){
               $response["user"] = $user;
               $response["result"] = "Login Successful!";
              return json_encode($response);
            }
            else{
                $response["result"] = "Invalid Login Credentials";
                return json_encode($response);
            }
        }
        else{
            $response["result"] = "Invalid Login Credentials";
            return json_encode($response);
        }
    }//end loginUser()
    
    public function SignUp(){
        $conn = adminDB();
        $user = $_POST['username'];
        $pass = $_POST['password'];
        
        if($user == ""){
            $response["result"] = "Please enter a username";
            return json_encode($response);
        }
        else if($pass == ""){
            $response["result"] = "Please enter password";
            return json_encode($response);
        }
        else{
            $statement = $conn->prepare("SELECT username FROM users WHERE username=:user");
            $statement->execute(array(':user'=>$user));
            $rows = $statement->fetch(PDO::FETCH_ASSOC);
            
           if($rows['username'] == $user){
               $response["result"] = "Username is taken";
                return json_encode($response);
            }
            else{
                newUser();
            }
        }
    }//end SignUp();
    
    public function newUser($user, $pass){
        $conn = adminDB();
        if(preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[0-9]).*$#", $pass)){
          $hash = password_hash($pass, PASSWORD_DEFAULT);
          $statement = $conn->prepare("INSERT INTO users(username, password) VALUES(:user, :pass)");
          $statement->bindParam(":user", $user);
          $statement->bindParam(":pass", $hash);
          $statement->execute();
            if($statement){
                $response["result"] = "Registered!";
                return json_encode($response);
            }
        }//end if(preg_match)
            else{
                $response["result"] = "Invalid password, must contrain letters, numbers and characters";
                return json_encode($response); //
            }
    }//end newUser()
}//end class login