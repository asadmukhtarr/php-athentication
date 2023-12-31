<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login System</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <a class="navbar-brand" href="#">Login System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <?php 
                if(empty($_SESSION['name'])){
            ?>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="register.php">Register <span class="sr-only">(current)</span></a>
                </li>
            <?php
                } else {
            ?>
                <li class="nav-item active">
                    <a class="nav-link" href="home.php"> <i class="fa fa-user-circle"></i> <?php echo $_SESSION['name']; ?> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="actions/logout.php"> <i class="fa fa-sign-out"></i> Logout <span class="sr-only">(current)</span></a>
                </li>
            <?php
                }
            ?>
        </ul>
    </div>
    </nav>