<div class="form-group">
                        <label for="title"><b>POST ID: <?php echo $aq;?></b></label>
                        <!-- <input type="number" class="form-control my-2" name="did" id="did" value=<?php echo$aq?> required> -->
                </div>   
                <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" value="" id="title" required>
                    </div>
                    <div class="form-group htspace">
                        <label for="title">Posted By:</label>
                        <input type="text" class="form-control" name="postby" id="postby" value="" required>
                    </div>
                    
                    <div class="form-group htspace">
                        <label for="description">Description:</label>
                        <textarea class="form-control" name="description" value="" id="description" required></textarea>
                    </div>

                    <div class="form-group htspace">
                      <label for="lastdate">Last Date:</label>
                        <input type="date" class="form-control" name="lastdate" value="" id="lastdate" required>
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
        <input type="text" class="form-control" name="file" value="" id="file">
    </div>
    <div class="form-group htspace" id="videoUrl" style="display: none;">
        <label for="vurl">Video Drive Link:</label>
        <input type="text" class="form-control" name="vurl" value="" id="vurl">
    </div>

<button type="submit" class="btn btn-primary" name="update">Update</button>

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