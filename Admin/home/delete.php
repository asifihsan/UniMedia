<div class="container mt-3">
        <div class="row">
            <div class="col-md-6 offset-md-3 htspace">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="title">ID:</label>
                        <input type="number" class="form-control my-2" name="did" id="did" required>
                        <button type="submit" class="btn btn-primary" name="delete">Delete</button>
                    </div>
                </form>
            </div>
        </div>
</div>

<?php

if(isset($_POST['delete']))
{
  $id1=$_POST['did'];
  $sql="DELETE FROM `post` WHERE `id` = $id1;";
if(mysqli_query($conn,$sql))
{
echo"<script>alert('Deleted Successfully!');</script>";
}else{
    echo"<script>alert('Deletion Failed');</script>";
}
}


?>