<?php
include('Connection.php');

if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
}

if(isset($_POST['send'])){
    
    $email= $_POST['email'];
    
    $password= $_POST['password'];

    $EmailCompare = $connection->prepare('SELECT `Email`,`Password` FROM `register_info` 
    WHERE `Email`=(:email)');
    
    $EmailCompare->bindParam('email', $email, PDO::PARAM_STR);
    
    $EmailCompare->execute();

    $emailArray = $EmailCompare->fetch(PDO::FETCH_BOTH);

    $emailComp = $emailArray[0];

    $passComp = $emailArray[1];

    if ($email === $emailComp && password_verify($password, $passComp)) {
        printf('Congrats!! you are in');
        
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['login'] = TRUE;
        header('Location: ./Dashboard.php');
        //exit;
    }
    else{
        printf('Try again1');
    }
}
?>