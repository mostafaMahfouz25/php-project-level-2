<?php include(VIEWS.'admin/inc/header.php'); ?>


<div class="col-8 mx-auto my-5">
    <div class="card-header">
        <h3 class="text-center ">Edit Manager Info</h3>
        <div>
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success text-center">  <?php echo session()->flash('success'); ?>  </div>
            <?php endif;  ?>
            <form class="border p-5 my-3 " method="POST" action="<?php  echo AURL.'update-manager'; ?>">
                <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $row['admin_id']; ?>">
                        <label for="name"  class="text-dark "> Name</label>
                        <input type="text" name="name"  value="<?php echo $row['admin_name']; ?>" class="form-control" id="name">
                    </div>

                    <div class="form-group">
                        <label for="email"  class="text-dark "> Email</label>
                        <input type="email" name="email" value="<?php echo $row['admin_email'];  ?>" class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <label for="password"  class="text-dark "> Password</label>
                        <input type="password" name="password"  class="form-control" id="password">
                    </div>
                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Save">
            </form>
        </div>
    </div>
</div>


<?php include(VIEWS.'admin/inc/footer.php'); ?>