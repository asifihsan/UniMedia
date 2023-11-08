<?php
include_once "base.php";
include_once "home/hsession.php";
include_once "home/header.php";
include_once "includes/dbconn.php";
?>
<h1 class="hwel">Welcome <?php echo $_SESSION['user']; ?>.</h1>
<?php
include_once "home/upload.php";
include_once "base2.php";

if(isset($_POST['logout']))
{
    session_destroy();
}
?>