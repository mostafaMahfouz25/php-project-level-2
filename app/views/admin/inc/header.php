<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL.'assets/admin/css/style.css'; ?>">
    <title>PHP LEVEL 2</title>
  </head>
  <body>
      
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto text-center p-5 border-bottom ">
                <img src="<?php echo URL.'assets/images/logo.png'; ?>" class="img-responsive" width="150" alt="">
            </div>
            <div class="col-10 mx-auto text-center p-2">
                <ul class="nav justify-content-center custome-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php activeLink($active,"home"); ?>" href="<?php echo AURL.'home'; ?>">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  <?php activeLink($active,"categories"); ?> " href="<?php echo AURL.'categories'; ?>">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php activeLink($active,"courses"); ?>" href="<?php echo AURL.'courses'; ?>">COURSES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php activeLink($active,"reservations"); ?>" href="<?php echo AURL.'reservations'; ?>">Reservations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php activeLink($active,"messages"); ?> " href="<?php echo AURL.'messages'; ?>">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php activeLink($active,"managers"); ?> " href="<?php echo AURL.'managers'; ?>">Managers</a>
                    </li>
                    <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0" method="POST" action="<?php echo AURL.'logout'; ?>">
                        <input class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="logout" value="Logout">
                    </form>
                    </li>
    
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">