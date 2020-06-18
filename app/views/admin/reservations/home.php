<?php include(VIEWS.'admin/inc/header.php'); ?>


  
    <div class="col-12">
     <h1 class="text-center my-3">View All Messages</h1>
    </div>
    <div class="col-12 mx-auto my-5 border p-3">
            <?php if(session()->has('deleted-success')): ?>
                <div class="alert alert-success text-center">  <?php echo session()->flash('deleted-success'); ?>  </div>
            <?php endif;  ?>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Course Title</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>

                <?php if($reservations): ?>
                <?php foreach($reservations as $row): ?>
                    <tr>
                        <td> <?php type_count(); ?> </td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['co_title']; ?></td>

                        <td>
                            <a href="<?php echo AURL.'delete-reservation/'.$row['res_id']; ?>" class="btn btn-danger" >Delete</a>
                        </td>
                    </tr>
                <?php  endforeach; ?>
                <?php  endif; ?>
            </tbody>
        </table>
    </div>







<?php include(VIEWS.'admin/inc/footer.php'); ?>