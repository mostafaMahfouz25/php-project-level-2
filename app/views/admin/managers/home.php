<?php include(VIEWS.'admin/inc/header.php'); ?>


    <div class="col-12">
        <a href="<?php echo AURL.'add-manager'; ?>" class="btn btn-info">Add New Manager</a>
    </div>



    <div class="col-12">
     <h1 class="text-center my-3">View All Managers</h1>
    </div>
    <div class="col-10 mx-auto my-5 border p-3">
            <?php if(session()->has('deleted-success')): ?>
                <div class="alert alert-success text-center">  <?php echo session()->flash('deleted-success'); ?>  </div>
            <?php endif;  ?>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>

                <?php if($managers): ?>
                <?php foreach($managers as $row): ?>
                    <tr>
                        <td> <?php type_count(); ?> </td>
                        <td><?php echo $row['admin_name']; ?></td>
                        <td><?php echo $row['admin_email']; ?></td>
                        <td>
                            <a href="<?php echo AURL.'edit-manager/'.$row['admin_id']; ?>" class="btn btn-info" >Edit</a>
                        </td>
                        <td>
                            <a href="<?php echo AURL.'delete-manager/'.$row['admin_id']; ?>" class="btn btn-danger" >Delete</a>
                        </td>
                    </tr>
                <?php  endforeach; ?>
                <?php  endif; ?>
            </tbody>
        </table>
    </div>







<?php include(VIEWS.'admin/inc/footer.php'); ?>