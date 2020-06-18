<?php include(VIEWS.'admin/inc/header.php'); ?>


    <div class="col-12">
        <a href="<?php echo AURL.'add-course'; ?>" class="btn btn-info">Add New Course</a>
    </div>



    <div class="col-12">
     <h1 class="text-center my-3">View All Courses</h1>
    </div>
    <div class="col-12 mx-auto my-5 border p-3">
            <?php if(session()->has('deleted-success')): ?>
                <div class="alert alert-success text-center">  <?php echo session()->flash('deleted-success'); ?>  </div>
            <?php endif;  ?>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>

                <?php if($courses): ?>
                <?php foreach($courses as $row): ?>
                    <tr>
                        <td> <?php type_count(); ?> </td>
                        <td><?php echo $row['co_title']; ?></td>
                        <td><?php echo $row['co_description']; ?></td>
                        <td>
                            <a href="<?php echo AURL.'edit-course/'.$row['co_id']; ?>" class="btn btn-info" >Edit</a>
                        </td>
                        <td>
                            <a href="<?php echo AURL.'delete-course/'.$row['co_id']; ?>" class="btn btn-danger" >Delete</a>
                        </td>
                    </tr>
                <?php  endforeach; ?>
                <?php  endif; ?>
            </tbody>
        </table>
    </div>







<?php include(VIEWS.'admin/inc/footer.php'); ?>