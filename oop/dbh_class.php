<?php
class Dbh{
    protected function connect(){
        try {
            $username='root';
            $password='';
            $dbh=new PDO('mysql:host=localhost;dbname=oop_login', $username, $password);
         // echo "Database connection established!";
            return $dbh;
        }  catch (PDOException $e) {
            echo "An error occurred: " . $e->getMessage()."</br>";
            die();
        }
    }
}
?>