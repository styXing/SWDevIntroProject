<html>
    <?php
    include('Connection.php');
    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }
    include('managerSelfEdit.php');

    $query = $connection->prepare('SELECT `Email`,`first_name`,`last_name`, `phoneNum` FROM `register_info` 
    WHERE `Email`=(:email)');

    $query->bindParam('email', $_SESSION['email'], PDO::PARAM_STR);
    $query->execute();
    $response = $query->fetch(PDO::FETCH_BOTH);
    
    $email = $response[0];
    $firstname = $response[1];
    $lastname = $response[2];
    $phoneNum = $response[3];
    ?>

    <body>
    <form method='post' name='edit'>
        <table border='1' width='50%'>
            <tr>
                <td align='center'>First Name</td>
                <td align='center'>Last Name</td>
                <td align='center'>Email</td>
                <td align='center'>Phone Number</td>
                <td align='center'>Edit</td>
                <td align='center'>Delete</td>

            </tr>
            <tr>
                
                <td align='center'><?php echo $firstname;?></td>
                <td align='center'><?php echo $lastname;?></td>
                <td align='center'><?php echo $email;?></td>
                <td align='center'><?php echo $phoneNum;?></td>
                <td><button type='submit' name='edit_self'>Edit</button></td>
                <td><button type='submin' name='delete_self'>Delete</button></td>
                <!-- add edit/delete button that brings you to another page -->
            </tr>

        </table>
    </form>
    </body>

</html>