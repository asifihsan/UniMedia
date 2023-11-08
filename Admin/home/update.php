<?php
if(isset($_SESSION['aq']))
{
$aq=$_SESSION['aq'];
}else{
    $aq=0;
}
?>
<div class="container mt-3">
        <div class="row">
            <div class="col-md-6 offset-md-3 htspace">
                <form action="" method="post" enctype="multipart/form-data">
                    <?php
                    if($aq==0)
                    {
                    ?>
                <div class="form-group">
                        <label for="title">ID:</label>
                        <input type="number" class="form-control my-2" name="did" id="did" required>
                        <button type="submit" class="btn btn-primary" name="find">find</button>
                </div>  
                <?php
                    }else{
                        include_once "update1.php";
                        
                    }
                ?>

                </form>
            </div>
        </div>
    </div>

    <?php
   
    if(isset($_POST['find']))
    {
        $id1=$_POST['did'];
        $sql="SELECT * from `post` where `id` = $id1";
        $retval=mysqli_query($conn,$sql);
if(mysqli_num_rows($retval)>0)
{

while($rows=mysqli_fetch_assoc($retval))
{
    $title=$rows['title'];
    $usr=$rows['creator'];
    $descrip=$rows['description'];
    $ldt=$rows['ld'];
    $tp=$rows['type'];
    $med=$rows['media'];
    $aq=$rows['id'];
    $pd=$rows['pd'];
    $_SESSION['aq']=$aq;
    // echo"<script>alert('$aq')</script>";
    }
    if($aq!=0)
    {
        echo"<script>
        document.getElementById('title').value='$title'
        document.getElementById('description').value='$descrip'
        document.getElementById('postby').value='$usr'
        document.getElementById('lastdate').value='$ldt'
        if($tp=='video')
        {
        imageUpload.style.display = 'none';
        videoUrl.style.display = 'block';
        document.getElementById('vurl').value='$med'
        }else if($tp=='image')
        {
        imageUpload.style.display = 'block';
        videoUrl.style.display = 'none';
        document.getElementById('file').value='$med'
        }else{
            imageUpload.style.display = 'none';
            videoUrl.style.display = 'none'; 
        }
        </script>";
    }
}}
  if(isset($_POST['update']))
  {
    $title1=$_POST['title'];
    $usr1=$_POST['postby'];
    $descrip1=$_POST['description'];
    $ldt1=$_POST['lastdate'];
    $tp1=$_POST['mediatype'];
    if($tp1=='image')
    {
        $med1=$_POST['file'];
    }else if($tp1=='video')
    {
        $med1=$_POST['vurl'];
    }else{
        $med1="";
    }

    if($tp1!="none")
     {  
    $matches = [];
    $pattern = '/[-\w]{25,}/';
        if (preg_match($pattern, $med1, $matches)) {
            $med1= $matches[0];
        }
     }
    $sql="UPDATE `post` SET `id`=$aq,`title`='$title1',`description`='$descrip1',`creator`='$usr1',`ld`='$ldt1',`type`='$tp1',`media`='$med1' WHERE `id`='$aq'";
    if(mysqli_query($conn,$sql))
    {
        echo"<script>alert('Updation Success!')</script>";
    }else{
        echo"<script>alert('Updation Failed!')</script>";
    }
    $_SESSION['aq']=0;  
}

    
    ?>