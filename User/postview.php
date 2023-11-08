
<?php
$sql="SELECT * FROM `post` ORDER BY `id` DESC;";
$retval=mysqli_query($conn,$sql);
if(mysqli_num_rows($retval)>0)
{
?>
 <div class="row row-cols-1 row-cols-md-3 g-4 p-3 mx-auto m-3">
<?php
while($rows=mysqli_fetch_assoc($retval))
{
?>
<div class="card mb-3 ">
    <?php
    if($rows['type']=='image')
    {
    ?>
 
  <img src="<?php echo"https://drive.google.com/uc?export=view&id={$rows['media']}";?>"  class="card-img-top mx-auto p-3" style="width: 18rem;" alt="fas fa-exclamation-circle">
  <?php
    }else if($rows['type']=='video')
    {
        ?>
        <!-- <iframe width="90%" class="mx-auto p-3" height="auto" src="<?php echo"https://www.youtube.com/embed/{$rows['media']}";?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
            <iframe width="90%" class="mx-auto p-3" height="auto" src="<?php echo"https://drive.google.com/file/d/{$rows['media']}/preview";?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            
   <?php
    }else{
        echo'<div class="card-body"></div>';
    }
  ?>
  <div class="card-body">
    <h5 class="card-title"><?php echo"{$rows['title']}";?></h5>
    <p class="card-text"><?php echo"{$rows['description']}";?></p>
    <p class="card-text"><small class="text-body-secondary">Posted by<?php echo" {$rows['creator']} on {$rows['pd']}";?></small></p>
  </div>
</div>
<?php
    }
?>
</div>
<?php
}else{
    echo '<h5 class="card-title">No Posts Available</h5>';
}
?>