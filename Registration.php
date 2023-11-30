<?php

include('Connection.php');

    if (isset($_POST['send'])){
        
        //Storing the info passed from RegistrationFront.php as variables
        $email = $_POST['email'];

        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);

        $fName = $_POST['fName'];

        $lName = $_POST['lName'];

        $phone = $_POST['phone'];
        
        //Setting up the query for connection into mySQL table
        $query = $connection->prepare('INSERT INTO `register_info` (`Email`,`Password`,
        `first_name`,`last_name`,`phoneNum`) VALUES (:email,:password,:fName,:lName,:phone)');
        
        //passing the variables into the query
        $query->bindParam('email', $email, PDO::PARAM_STR);
        
        $query->bindParam('password', $password, PDO::PARAM_STR);

        $query->bindParam('fName',$fName, PDO::PARAM_STR);

        $query->bindParam('lName',$lName, PDO::PARAM_STR);

        $query->bindParam('phone',$phone, PDO::PARAM_STR);

        //executing the query
        $result = $query->execute();

        //get feedback on if the execution query was successful(0) or not(-1)
        if($result)
            {echo '0';}
        else
            {echo '-1';}

        }

?>