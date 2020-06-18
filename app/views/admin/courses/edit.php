<?php include(VIEWS.'admin/inc/header.php'); ?>


<div class="col-10 mx-auto my-5">
    <div class="card-header">
        <h3 class="text-center ">Edit Course</h3>
        <div>
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success text-center">  <?php echo session()->flash('success'); ?>  </div>
            <?php endif;  ?>
            <form class="border p-5 my-3 " method="POST" action="<?php  echo AURL.'update-course'; ?>" enctype="multipart/form-data" >
                <div class="form-group">
                    <label for="title"  class="text-dark ">Title</label>
                    <input type="text" class="form-control" value="<?php echo $row['co_title']; ?>" name="title" value="" id="title">
                    <input type="hidden" name="id" value="<?php echo $row['co_id'];  ?>" >
                </div>
                <div class="form-group">
                    <label for="category_id"  class="text-dark "> Category </label>
                    <select name="category_id" class="form-control" id="category_id">
                    <?php foreach($cats as $cat): ?>
                        <option value="<?php echo $cat['cat_id']; ?>" <?php selectedOtion($cat['cat_id'],$row['co_category_id']); ?> > <?php echo $cat['cat_name']; ?> </option>
                    <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description"  class="text-dark ">Description</label>
                    <textarea class="form-control" name="description"   id="description"  rows="5"><?php  echo $row['co_description']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="image"  class="text-dark ">Image</label>
                    <input type="file" class="form-control" name="image"  value="" id="image">
                </div>
                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Save">

                <div class="form-group text-center my-3">
                    <img src="<?php echo URL.'uploads/'.$row['co_image']; ?>" width="300" alt="">
                </div>
            </form>
        </div>
    </div>
</div>


<?php include(VIEWS.'admin/inc/footer.php'); ?>