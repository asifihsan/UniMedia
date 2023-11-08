<?php
include_once "base.php";
include_once "includes/dbconn.php";
include_once "header.php";
?>
<?php
  $activeTab = "totalposts"; 
  
  if (isset($_POST['hfirst'])) {
    $activeTab = "totalPosts";
  } elseif (isset($_POST['hthird'])) {
    $activeTab = "posts";
  }
?>
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <form action="" method="POST">
          <input type="submit" class="nav-link <?php if ($activeTab === 'totalPosts') echo 'active'; ?>" value="Upcoming Events" aria-current="true" name="hfirst">
        </form>
      </li>
      <li class="nav-item">
        <form action="" method="POST">
          <input type="submit" class="nav-link <?php if ($activeTab === 'posts') echo 'active'; ?>" value="Posts" name="hthird">
        </form>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <?php
     if ($activeTab === "totalPosts") {
      include_once "upcoming.php";
    } elseif ($activeTab === "posts") {
      include_once "postview.php";
    ?>
  <?php 
   }
    ?>
  </div>
</div>
<?php
include_once "base2.php";
?>







   





<?php
include_once "base2.php";
?>