<?php

include 'includes/user.php';
include 'includes/user_sesion.php'; 

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    echo "hay sesison";
}else if(isset($_SESSION['username']) && isset($_POSTS['password'])){
    echo "Validación login :)";

    $userForm =$_POST['username'];
    $passForm = $_POST['password'];

    if($user->userExists($userForm, $passForm)){
        echo "usuario validado";
        $userSession->setCurrentUser($userForm);
    }else{
        echo "nombre de ususario y/o password incorrecto";
        $errorLogin ="nombre de usuario incorrecto";
        include_once 'login.php';
    }
    
}else{
    echo "login";
    include_once 'login.php';

    
}

?>