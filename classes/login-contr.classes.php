<?php 
include "C:/xampp/htdocs/PIABDM_INTER/classes/loginConn.classes.php";
class LoginContr extends loginConn{

    private $email;
    private $pwd;

    public function __construct($email,$pwd){
        $this->email = $email;
        $this->pwd = $pwd;
    }

    public function loginUser(){
        if($this->emptyInputs() == false){
        // echo 'rip en los inputs';
        header("location: C:\xampp\htdocs\PIABDM_INTER/index.php?error=emptyInput");
        exit();
        }

        $this->sign_in($this->email,$this->pwd);
        
    }
    public function getU(){
        $this->getUser($this->email);
    }

    private function emptyInputs(){
        $result;
        if( empty($this->email) || empty($this->pwd) ){
            $result = false;
        }else{
            $result = true;
        } 
        return $result;
    }

}
?>