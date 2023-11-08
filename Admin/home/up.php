<?php
if (isset($_POST['upload'])) {
    $cd=date("Y-m-d");
    $ld=$_POST['lastdate'];
    $tt=$_POST['title'];
    $dc=$_POST['description'];   
    $pby=$_POST['postby'];
    $mt=$_POST['mediatype'];
    $us=$_SESSION['user'];   
    if($mt=="image")
    {
        $targetFile = $_POST['file'];
    }else if($mt=="video"){
        $targetFile = $_POST['vurl'];
    }

     if($mt!="none")
     {  
    $matches = [];
    $pattern = '/[-\w]{25,}/';
        if (preg_match($pattern, $targetFile, $matches)) {
            $url= $matches[0];
        }
    }else{
        $url="";
    }
$sql="INSERT INTO `post` (`id`, `title`, `description`, `creator`, `ld`, `pd`, `type`, `media`, `user`) VALUES (NULL, '$tt', '$dc', '$pby', '$ld', '$cd', '$mt', '$url','$us');";
if(mysqli_query($conn,$sql))
{
    echo"<script>alert('Data Uploaded Successfully!');</script>";
}else{
    echo"<script>alert('Data Uploading Failed');</script>";
}
}
?>
