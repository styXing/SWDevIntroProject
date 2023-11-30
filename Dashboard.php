<html>
    <?php
    include('dashboardMiddle.php');


if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
}
if(!$_SESSION['login']){
    $_SESSION['email'] = null;
    $_SESSION['password'] = null;

    header('Location: ./login.php');
}
?>
    <header>
        <form method=post action='dashboardMiddle.php'>
            <button type='Sumbit' name='manageSelf'>Manage Self</button>
            <button type='Submit' name='manageOthers'>Manager Others</button>
            <button type='Submit' name='logout'>Logout<button>
        </form>
    </header>
</html>