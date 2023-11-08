<?php
if(isset($_SESSION['atab']))
{
$activeTab=$_SESSION['atab'];
}else{
  $activeTab = "posts"; 
}
  if (isset($_POST['hfirst'])) {
    $_SESSION['atab']="totalPosts";
    $activeTab = "totalPosts";
  } elseif (isset($_POST['hsec'])) {
    $_SESSION['atab']="upload";
    $activeTab = "upload";
  } elseif (isset($_POST['hthird'])) {
    $_SESSION['atab']="posts";
    $activeTab = "posts";
  } elseif (isset($_POST['hfour'])) {
    $_SESSION['atab']="delete";
    $activeTab = "delete";
  }elseif (isset($_POST['hfive'])) {
    $_SESSION['atab']="update";
    $activeTab = "update";
  }elseif (isset($_POST['hsix'])) {
    $_SESSION['atab']="usr";
    $activeTab = "usr";
  }
?>

<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <form action="" method="POST">
          <input type="submit" class="nav-link <?php if ($activeTab === 'totalPosts') echo 'active'; ?>" value="Upcomming Events" aria-current="true" name="hfirst">
        </form>
      </li>
      <li class="nav-item">
        <form action="" method="POST">
          <input type="submit" class="nav-link <?php if ($activeTab === 'upload') echo 'active'; ?>" value="Upload" name="hsec">
        </form>
      </li>
      <li class="nav-item">
        <form action="" method="POST">
          <input type="submit" class="nav-link <?php if ($activeTab === 'posts') echo 'active'; ?>" value="Posts" name="hthird">
        </form>
      </li>
      <li class="nav-item">
        <form action="" method="POST">
          <input type="submit" class="nav-link <?php if ($activeTab === 'delete') echo 'active'; ?>" value="Delete" aria-current="true" name="hfour">
        </form>
      </li>
      <li class="nav-item">
        <form action="" method="POST">
          <input type="submit" class="nav-link <?php if ($activeTab === 'update') echo 'active'; ?>" value="Edit" aria-current="true" name="hfive">
        </form>
      </li>
      <li class="nav-item">
        <form action="" method="POST">
          <input type="submit" class="nav-link <?php if ($activeTab === 'usr') echo 'active'; ?>" value="User" aria-current="true" name="hsix">
        </form>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <?php
    if ($activeTab === "upload") {
      ?>
          <div class="container mt-3">
        <div class="row">
            <div class="col-md-6 offset-md-3 htspace">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" id="title" required>
                    </div>
                    <div class="form-group htspace">
                        <label for="title">Posted By:</label>
                        <input type="text" class="form-control" name="postby" id="postby" value="College Admin" required>
                    </div>
                    
                    <div class="form-group htspace">
                        <label for="description">Description:</label>
                        <textarea class="form-control" name="description" id="description" required></textarea>
                    </div>

                    <div class="form-group htspace">
                      <label for="lastdate">Last Date:</label>
                        <input type="date" class="form-control" name="lastdate" id="lastdate" required>
                 </div>

                 <div class="form-group htspace">
        <label for="mediatype">Media Type:</label>
        <select class="form-control" name="mediatype" id="mediatype" required>
            <option value="none">None</option>
            <option value="image">Image</option>
            <option value="video">Video</option>
        </select>
    </div>
    <div class="form-group htspace" id="imageUpload" style="display: none;">
        <label for="file">Image Drive Link:</label>
        <input type="text" class="form-control" name="file" id="file">
    </div>
    <div class="form-group htspace" id="videoUrl" style="display: none;">
        <label for="vurl">Video Drive Link:</label>
        <input type="text" class="form-control" name="vurl" id="vurl">
    </div>

                    <button type="submit" class="btn btn-primary" name="upload">Upload</button>
                </form>
            </div>
        </div>
    </div>
      <?php
    } elseif ($activeTab === "totalPosts") {
      include_once "upcoming.php";
    } elseif ($activeTab === "posts") {
      include_once "postview.php";
    ?>
  <?php 
   }elseif ($activeTab === "delete") {
    include_once "delete.php";
  }elseif ($activeTab === "update") {
    include_once "update.php";
  }elseif ($activeTab === "usr") {
    include_once "editapass.php";
  }
    ?>
  </div>
</div>

<?php
include_once "up.php";
?>




<script>
    const mediatypeSelect = document.getElementById("mediatype");
    const imageUpload = document.getElementById("imageUpload");
    const videoUrl = document.getElementById("videoUrl");

    mediatypeSelect.addEventListener("change", function () {
        const selectedOption = mediatypeSelect.value;
        if (selectedOption === "image") {
            imageUpload.style.display = "block";
            videoUrl.style.display = "none";
        } else if (selectedOption === "video") {
            imageUpload.style.display = "none";
            videoUrl.style.display = "block";
        } else {
            imageUpload.style.display = "none";
            videoUrl.style.display = "none";
        }
    });
</script>


   
