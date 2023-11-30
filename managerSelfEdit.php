<?php

if(isset($_POST['edit_self'])){
    header()

}

$query = $connection->prepare('UPDATE `register_info` SET `Email`= (:email');
?>