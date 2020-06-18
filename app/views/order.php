<?php include(VIEWS.'inc/header.php'); ?>


    


    
<div class="col-12 mx-auto my-5">
    <div class="card-header">
        <h3 class="text-center ">Order Now</h3>
        <h4>Course Name : <?php echo $row['co_title']; ?> <hr> </h4>
        
        <h4>Course Description</h4>
        <p><?php echo $row['co_description']; ?></p>
        <div>
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success text-center">  <?php echo session()->flash('success'); ?>  </div>
            <?php endif;  ?>
            <form class="border p-5 my-3 " method="POST" action="<?php  echo URL.'add-order'; ?>">
                    <div class="form-group">
                        <label for="name"  class="text-dark "> Name</label>
                        <input type="hidden" name="course" value="<?php echo $row['co_id'] ?>">
                        <input type="text" required name="name" value="<?php old('name'); ?>" class="form-control" id="name">
                    </div>

                    <div class="form-group">
                        <label for="email"  class="text-dark "> Email</label>
                        <input type="email" required name="email" value="<?php old('email'); ?>" class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <label for="phone"  class="text-dark "> Phone</label>
                        <input type="text" required name="phone" value="<?php old('phone'); ?>" class="form-control" id="subject">
                    </div>
               
                <input type="submit" name="submit" class="btn btn-info btn-block" value="Send">
            </form>
        </div>
    </div>
</div>









<?php include(VIEWS.'inc/footer.php'); ?>