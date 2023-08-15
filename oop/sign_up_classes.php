<?php
class signUp extends  Dbh{
    public function setUser($username, $email, $password) {
        $query = "INSERT INTO user (username, email, password) VALUES (?,?,?);";
        $stmt = $this->connect()->prepare($query); 

        // Assuming you have a PDOStatement object
        $result = $stmt->execute([$username, $email, $password]);

        if ($result) {
            $_SESSION['msg']="Success";
           header("location: index.php");
         //echo "Sucess";
        } else {
           echo "Error handling";
        }
        $stmt=null;
    }
  
          

    }


?>