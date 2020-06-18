<?php include(VIEWS.'inc/header.php'); ?>


    

<?php foreach($courses as $row):  ?>
    <div class="col-md-4 col-sm-6  col-xs-12 my-3">
        <div class="card text-center p-2">
            <img src="<?php echo URL.'uploads/'.$row['co_image']; ?>" class="card-img-top border" height="250" width="250">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['co_title'];  ?></h5>
                <p class="card-text"><?php echo $row['co_description']; ?></p>
                <a href="<?php echo URL.'order/'.$row['co_id']; ?>" class="btn btn-info">Order Now</a>
            </div>
        </div>
    </div>
<?php endforeach;  ?>








<?php include(VIEWS.'inc/footer.php'); ?>