<?php include(VIEWS.'inc/header.php'); ?>


    


    
<div class="col-12 mx-auto my-5">
    <div class="card-header">
        <h3 class="text-center ">Contact With Us</h3>
        <div>
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success text-center">  <?php echo session()->flash('success'); ?>  </div>
            <?php endif;  ?>
            <form class="border p-5 my-3 " method="POST" action="<?php  echo URL.'send-message'; ?>">
                    <div class="form-group">
                        <label for="name"  class="text-dark "> Name</label>
                        <input type="text" required name="name" value="<?php old('name'); ?>" class="form-control" id="name">
                    </div>

                    <div class="form-group">
                        <label for="email"  class="text-dark "> Email</label>
                        <input type="email" required name="email" value="<?php old('email'); ?>" class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <label for="subject"  class="text-dark "> Subject</label>
                        <input type="text" required name="subject" value="<?php old('subject'); ?>" class="form-control" id="subject">
                    </div>


                    <div class="form-group">
                        <label for="subject"  class="text-dark "> Message</label>
                        <textarea name="message" required id="message" name="message"  class="form-control"  rows="5"><?php old('message'); ?></textarea>
                    </div>

               
                <input type="submit" name="submit" class="btn btn-info btn-block" value="Send">
            </form>
        </div>
    </div>
</div>









<?php include(VIEWS.'inc/footer.php'); ?>