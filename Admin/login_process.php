<?php
include_once "includes/dbconn.php";
if(isset($_POST['login']))
{
$uname=$_POST["uname"];
$upass=$_POST["upass"];
$sql="SELECT * FROM `admin-login` WHERE uid='$uname'";
$retval=mysqli_query($conn,$sql);
// setcookie("aname",$uname);
if(mysqli_num_rows($retval)>0)
{
    while($rows=mysqli_fetch_assoc($retval))
    $upass2=$rows['pwd'];
    $upass1=password_verify($upass, $upass2);
    if($upass1)
    {
    $_SESSION['user']=$uname;
    echo"<script>alert('Login Success')</script>";
    header('Location: home.php');
    }else{
        // header('Location: login.php');
        echo"<script>alert('Login Failed')</script>";
        // header('Location: login.php');
    }
}
else{
    // header('Location: login.php');
    echo"<script>alert('Login Failed')</script>";
    // header('Location: login.php');
}
}

?>
