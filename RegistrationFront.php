
<html>
    <?php
    include('Registration.php')
    ?>

    <body>
        <a href='login.php'>Login Here </a> 
    
    </body>

    <body>
        <form method="post" name="user" style="font-family:arial; font-size:25px" action='Registration.php'>
            Email: <br>
            <input type="email" name="email" pattern='[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$'> <br>
            Password: <br>
            <input type="password" name="password" pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}'> <br>
            First Name: <br>
            <input type="text" name="fName" pattern='[A-Za-z]{1,}'> <br>
            Last Name: <br>
            <input type="text" name="lName" pattern='[A-Za-z]{1,}'> <br>
            Phone Number: <br>
            <input type="tel" name="phone" pattern="[0-9]{10}"> <br>
            
            <button type="submit" name="send">Submit</button>         
            
        
        </form>
    </body>
</html>