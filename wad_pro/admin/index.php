<?php
session_start();
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
require_once "../server/db_connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <title>TechBox Admin Panel</title>
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3><img src="../img/logo.png"> Admin Panel</h3>
        </div>
        <ul class="list-unstyled components">

            <li>
                <a href="../index.php">
                    <i class="fa fa-sign-out-alt"></i> Home </a>
            </li>
            <li>
                <a href="logout.php">
                    <i class="fa fa-sign-out-alt"></i> Admin logout</a>
            </li>
        </ul>
    </nav>
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
        <div class="container">
            <h2 class="text-center text-primary"><?php echo @$_GET['logged_in']?></h2>

    </div>
</div>
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

    });
</script>
</body>
</html>