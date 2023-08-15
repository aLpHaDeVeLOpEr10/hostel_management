<?php
class signCountr extends signUp{
    private $username;
    private $email;
    private $password;
     public function __construct($username,$email,$password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

public function signupUser(){
    if($this->emptyInput()==false){
        header("location:../sign_up.php?error=emptyInput");
        exit();
    }
    if($this->invalidUsername()==false){
        header("location:../sign_up.php?error=invalidUsername");
        exit();
    }
    if($this->invalidEmail()==false){
        header("location:../sign_up.php?error=invalidEmail");
        exit();
    }
    if($this->checkUername()==false){
        header("location:../sign_up.php?error=usernameoremailtaken");
        exit();
    }
    this->setUser( $this->username , $this->email, $this->password);
}



    private function emptyInput(){
        $result;
        if(empty($this->username) || empty($this->email) || empty($this->password)){
             $result=true;

        }
        else{
            $result=false;
        }
        return $result;
    }
    private function invalidUsername(){
        $result;
        if(preg_match('/^[a-zA-Z0-9_]{3,20}$/', $this->username)){
             $result=true;

        }
        else{
            $result=false;

        }
        return $result;
    }
    private function checkUername(){
        $result;
        if(!this->checkUser( $this->username , $this->email) ){
             $result=true;

        }
        else{
            $result=false;

        }
        return $result;
    }
    
    private function invalidEmail(){
        $result;
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)){
             $result=true;
        }
        else{
            $result=false;

        }
        return $result;
    }



}
?>