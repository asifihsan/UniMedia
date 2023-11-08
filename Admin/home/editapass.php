<div class="container mt-3">
        <div class="row">
            <div class="col-md-6 offset-md-3 htspace">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- <div class="form-group">
                        <label for="title">Username:</label>
                        <input type="text" class="form-control" name="usname" id="usname" required>
                    </div> -->
                    <div class="form-group htspace">
                        <label for="title">New Password:</label>
                        <input type="password" class="form-control" name="pass1" id="pass1" value="" required>
                    </div>
                    
                    <div class="form-group htspace">
                        <label for="title">Confirm Password:</label>
                        <input type="password" class="form-control" name="pass2" id="pass2" value="" required>
                    </div>

                    <button type="submit" class="btn btn-primary" name="upad">Update</button>
                </form>
            </div>
        </div>
    </div>

<?php
if(isset($_POST['upad']))
{
    $usname=$_SESSION['user'];
    $pwd=$_POST['pass1'];
    $pwdc=$_POST['pass2'];
    if(strlen($pwd)>8)
    {
    if($pwd==$pwdc)
    {
        $hash = password_hash($pwd,PASSWORD_DEFAULT);
        $sql="UPDATE `admin-login` SET `pwd` = '$hash' WHERE `uid` = '$usname';";
        // $sql="UPDATE `admin-login` SET `pwd` = '$hash' WHERE `admin-login`.`uid` = '$usname';";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Password changed successfully')</script>";
        } else {
            echo "<script>alert('Password updation failed: " . mysqli_error($conn) . "')</script>";
        }
        

    }else{
        echo"<script>alert('Passwords are different')</script>";
    }}else{
        $c=strlen($pwd);
        echo"<script>alert('Password is less than 8')</script>";
    }
}
?>