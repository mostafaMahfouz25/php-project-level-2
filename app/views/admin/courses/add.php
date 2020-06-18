<?php include(VIEWS.'admin/inc/header.php'); ?>


<div class="col-10 mx-auto my-5">
    <div class="card-header">
        <h3 class="text-center ">Add New Course</h3>
        <div>
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success text-center">  <?php echo session()->flash('success'); ?>  </div>
            <?php endif;  ?>
            <form class="border p-5 my-3 " method="POST" action="<?php  echo AURL.'store-course'; ?>" enctype="multipart/form-data" >
                <div class="form-group">
                    <label for="title"  class="text-dark ">Title</label>
                    <input type="text" class="form-control" name="title" value="" id="title">
                </div>
                <div class="form-group">
                        <label for="category_id"  class="text-dark "> Category </label>
                        <select name="category_id" class="form-control" id="category_id">
                        <?php foreach($cats as $row): ?>
                            <option value="<?php echo $row['cat_id']; ?>"> <?php echo $row['cat_name']; ?> </option>
                        <?php endforeach ?>
                        </select>
                    </div>
                <div class="form-group">
                    <label for="description"  class="text-dark ">Description</label>
                    <textarea class="form-control" name="description"  id="description"  rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="image"  class="text-dark ">Title</label>
                    <input type="file" class="form-control" name="image" required value="" id="image">
                </div>
                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Add">
            </form>
        </div>
    </div>
</div>


<?php include(VIEWS.'admin/inc/footer.php'); ?>