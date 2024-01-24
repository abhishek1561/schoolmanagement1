<?php include "header.php" ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 slider-form">
                <form action="">
                    <div class="mb-3">
                    <label for="text1" class="form-label">Title</label>
                    <textarea class="form-control" name="title" id="text1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                    <label for="text2" class="form-label">Sub Title</label>
                    <textarea class="form-control" name="sub-title" id="text2" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                    <label for="text3" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="text3" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                    <label for="file" class="form-label">Image</label>
                    <input type="file" name="slider-image" class="form-control" id="file" >
                    </div>
                    <input type="submit" value="Send Data">
                </form>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php" ?>