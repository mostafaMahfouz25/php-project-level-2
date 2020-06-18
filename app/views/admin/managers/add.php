<?php include(VIEWS.'admin/inc/header.php'); ?>


<div class="col-8 mx-auto my-5">
    <div class="card-header">
        <h3 class="text-center ">Add New Category</h3>
        <div>
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success text-center">  <?php echo session()->flash('success'); ?>  </div>
            <?php endif;  ?>
            <form class="border p-5 my-3 " method="POST" action="<?php  echo AURL.'store-manager'; ?>">
            <div class="form-group">
                        <label for="name"  class="text-dark "> Name</label>
                        <input type="text" name="name" value="<?php old('name'); ?>" class="form-control" id="name">
                    </div>

                    <div class="form-group">
                        <label for="email"  class="text-dark "> Email</label>
                        <input type="email" name="email" value="<?php old('email'); ?>" class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <label for="name"  class="text-dark "> Password</label>
                        <input type="password" name="password"  class="form-control" id="name">
                    </div>
                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Add">
            </form>
        </div>
    </div>
</div>


<?php include(VIEWS.'admin/inc/footer.php'); ?>