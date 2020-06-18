<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>



<div class="container">
    <div class="row">
        <div class="col-6 mx-auto my-5">
            <div class="card ">
                <div class="card-header">
                    <h3 class="text-center">Login</h3>
                    <?php if(isset($error)): ?>
                        <div class="alert alert-danger text-center">  <?php echo $error; ?>  </div>
                    <?php endif;  ?>
                    <div>
                        <form class="border p-5 my-3 " method="POST" action="<?php  echo AURL.'do-login'; ?>">
                            <div class="form-group">
                                <label for="email"  class="text-dark ">Email</label>
                                <input type="email" required name="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password"  class="text-dark ">Password</label>
                                <input type="password" required name="password" class="form-control" id="password">
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Login">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    </body>
</html>

