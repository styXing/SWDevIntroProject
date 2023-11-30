
<html>
    <?php
    include('loginMiddle.php');
    ?>

    <body>
        <form method='post'name='user' style="font-family:arial; font-size:25px">

        Email: <br>
        <input type="email" name="email" pattern='[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$'> <br>
        Password: <br>
        <input type="password" name="password" pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}'> <br>

        <button type='submit' name='send'>Submit</button>

        </form>
    </body>
</html>

