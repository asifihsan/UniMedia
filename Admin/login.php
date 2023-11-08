<?php
include_once "base.php";
session_start();
?>
<center>
<div class="lmain">
    <h1 class="lhead">UniMedia</h1>
    <form action="" method="POST">
        <input class="luser" type="text" name="uname" placeholder="Enter Username" required><br>
        <input class="lpass" type="password" name="upass" placeholder="Enter password" required><br>
        <input class="lbtn" type="submit" name="login" value="Login">
    </form>
</div>
</center>
<?php
include_once "base2.php";
include_once "login_process.php";

if(isset($_SESSION['user']))
{
    header('Location: home.php');
}
?>