<?php include(VIEWS.'admin/inc/header.php'); ?>


<div class="col-8 mx-auto my-5">
    <div class="card-header">
        <h3 class="text-center ">Add New Category</h3>
        <div>
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success text-center">  <?php echo session()->flash('success'); ?>  </div>
            <?php endif;  ?>
            <form class="border p-5 my-3 " method="POST" action="<?php  echo AURL.'store-category'; ?>">
                <div class="form-group">
                    <label for="name"  class="text-dark ">Category Name</label>
                    <input type="text" class="form-control" name="name" value="" id="name">
                </div>
                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Add">
            </form>
        </div>
    </div>
</div>


<?php include(VIEWS.'admin/inc/footer.php'); ?>