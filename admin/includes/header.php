<?php
include("../connection.php");

$sql = "SELECT * FROM `admins` WHERE email='admin@gmail.com'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Zomato - Admin</title>

    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Linear Icon css -->
    <link rel="stylesheet" href="assets/css/linearicon.css">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/remixicon.css">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- swiper slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/swiper-bundle.min.css">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="assets/css/vendors/slick.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <i class="ri-arrow-up-double-fill"></i>
    </div>
    <!-- tap on tap end -->

    <!-- loader start -->
    <div class="loader-wrapper">
        <img src="assets/images/loader.gif" alt="">
    </div>
    <!-- loader end -->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper m-0">
                <div class="header-logo-wrapper p-0">
                    <div class="logo-wrapper">
                        <a href="dashboard.php">
                            <img class="img-fluid main-logo" src="assets/images/logo/1.png" alt="logo">
                            <img class="img-fluid white-logo" src="assets/images/logo/1-white.png" alt="logo">
                        </a>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                        <a href="dashboard.php">
                            <img class="img-fluid for-light" src="assets/images/logo/1.png" alt="logo">
                            <img class="img-fluid for-dark" src="assets/images/logo/1-white.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="welcome-title">
                    <h5>Food that's you loved!</h5>
                    <span>Delight your taste with our most famous food !!</span>
                </div>
                <div class="nav-right col-xl-6 col-5 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li class="profile-nav onhover-dropdown pe-0 me-0">
                            <div class="media profile-media">
                                <img class="user-profile rounded-circle" src="assets/images/admin.png" alt="">
                                <div class="user-name-hide media-body">
                                    <span><?php echo $name ?></span>
                                    <p class="mb-0 font-roboto">Admin<i class="middle ri-arrow-down-s-line"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li>
                                    <a data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                        href="javascript:void(0)">
                                        <i data-feather="log-out"></i>
                                        <span>Log out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <?php
            require_once("sidebar.php");
            ?>

            <!-- dashboard body start -->
            <div class="page-body">