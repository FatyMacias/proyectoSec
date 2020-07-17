<?php
 
class UserSession{

    public  function ___construct(){
        session_start();
    }

    public function setCurrent($user){
        $_SESSION['user']=$user;
    }

    public function getCurrentUser(){
        return $_SESSION ['user']; 
    }

    public function closeSsession(){
        session_unset();
        session_destroy();

    }
}
?>