<?php
include('Connection.php');

$query = $connection->prepare('SELECT `Email`,`first_name`,`last_name`, `phoneNum` FROM `register_info` 
WHERE `Email`=(:email)');

$query->bindParam('email', $_SESSION['email'], PDO::PARAM_STR);

$query->execute();


?>