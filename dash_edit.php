<?php
session_start();
include('./back/include/config.php');
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $sel = "select * from users where email='$email'";
    $run = mysqli_query($con, $sel) or die(mysqli_error($con));
    while ($users = mysqli_fetch_array($run)) {
        $id = $users['id'];
        $owner_name = $users['owner_name'];
        $business_name = $users['business_name'];
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>My Business | SM</title>

            <!-- Custom fonts for this template-->
            <link href="./admin_assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

            <!-- Custom styles for this template-->
            <link href="./admin_assets/css/sb-admin-2.min.css" rel="stylesheet">

            <!-- Custom styles applied to the dashboard by Soham Mandaliya -->
            <link rel="stylesheet" href="./back/include/style.css">

        </head>

        <body id="page-top">

            <!-- Preloader -->
            <div class="loader_bg">
                <div class="loader"></div>
            </div>

            <!-- Page Wrapper -->
            <div id="wrapper">

                <!-- Sidebar -->
                <ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dash.php">
                        <!-- <div class="sidebar-brand-icon rotate-n-15">
                            <i class="fas fa-laugh-wink"></i>
                        </div> -->
                        <!-- <div class="sidebar-brand-text mx-3">My Business</div> -->
                    </a>

                    <!-- Divider -->
                    <hr class="sidebar-divider my-0">

                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-building"></i>
                            <span>My Business</span>
                        </a>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="buttons.html">Overview</a>
                                <a class="collapse-item" href="cards.html">Products Or Services</a>
                                <a class="collapse-item" href="cards.html">Push Notifications</a>
                            </div>
                        </div>
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">

                </ul>
                <!-- End of Sidebar -->

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">

                        <!-- Topbar -->
                        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                            <!-- Sidebar Toggle (Topbar) -->
                            <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>

                            <!-- Topbar Search -->
                            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-dark" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <!-- Topbar Navbar -->
                            <ul class="navbar-nav ml-auto">

                                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                                <li class="nav-item dropdown no-arrow d-sm-none">
                                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-search fa-fw"></i>
                                    </a>
                                    <!-- Dropdown - Messages -->
                                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                        <form class="form-inline mr-auto w-100 navbar-search">
                                            <div class="input-group">
                                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-dark" type="button">
                                                        <i class="fas fa-search fa-sm"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>

                                <!-- Nav Item - Alerts -->
                                <li class="nav-item dropdown no-arrow mx-1">
                                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-bell fa-fw"></i>
                                        <!-- Counter - Alerts -->
                                        <span class="badge badge-danger badge-counter">3+</span>
                                    </a>
                                    <!-- Dropdown - Alerts -->
                                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                        <h6 class="dropdown-header">
                                            Alerts Center
                                        </h6>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="mr-3">
                                                <div class="icon-circle bg-dark">
                                                    <i class="fas fa-file-alt text-white"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="small text-gray-500">December 12, 2019</div>
                                                <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </li>

                                <div class="topbar-divider d-none d-sm-block"></div>

                                <!-- Nav Item - User Information -->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $owner_name; ?>'s <?php echo $business_name; ?></span>
                                        <img class="img-profile rounded-circle" src="./admin_assets/img/undraw_profile.svg">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Business Profile
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="./back/operation/logout.php" data-toggle="modal" data-target="#logoutModal">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>

                            </ul>

                        </nav>
                        <!-- End of Topbar -->

                        <!-- Begin Page Content -->
                        <div class="container-fluid" id="main-content">
                            <div class="card card-body shadow p-3">
                                <form action="./dash_update.php" method="post" enctype="multipart/form-data">
                                    <?php
                                    $query = "SELECT * FROM `business_details` WHERE `user_id` = $id";
                                    $queryrun = mysqli_query($con, $query);
                                    if ($queryrun->num_rows >= 0) {
                                        $row = mysqli_fetch_array($queryrun);
                                        $icon_img = $row['icon_img'];
                                        $bg_img = $row['bg_img'];
                                        $category = $row['category'];
                                        $website = $row['website'];
                                        $b_contact = $row['b_contact'];
                                        $b_email = $row['b_email'];
                                        $tags = $row['tags'];
                                        $description = $row['description'];
                                        $facebook = $row['facebook'];
                                        $instagram = $row['instagram'];
                                        $linkedin = $row['linkedin'];
                                        $skype = $row['skype'];
                                        $twitter = $row['twitter'];
                                        $pinterest = $row['pinterest'];
                                    ?>
                                        <div class="container-fluid">

                                            <h5 class="text-gray-900 font-weight-bold">Company Logo</h5>
                                            <span class="text-xs text-muted">Size should be less then 2 MB.</span>

                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mt-4 text-sm text-gray-700">Square Icon Image</p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <p class="mt-4 text-sm text-gray-700">Primary Background Image</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="w-100 d-flex flex-column align-items-end">
                                                        <input type="submit" class="btn btn-md btn-primary mt-3 p-2" name="submit" value="Save" style="width: 25%; background-color: #548CFF; border-radius: 12px; font-size: .9rem; border: none;">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">

                                                <input type="hidden" name="id" value="<?php echo $id; ?>">

                                                <div class="col-sm-2">
                                                    <?php
                                                    if ($icon_img == NULL) {
                                                    ?>
                                                        <img class="img-fluid mb-4" style="width: 250px;" src="./assets/img/image.png" alt="..." id="selectedImage">
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <img class="img-fluid mb-4" style="width: 250px;" src="./files/<?php echo $icon_img ?>" alt="..." id="selectedImage">
                                                    <?php
                                                    }
                                                    ?>
                                                    <!-- <img class="img-fluid mb-4" style="width: 250px;" src="./assets/img/image.png" alt="..." id="selectedImage"> -->
                                                </div>
                                                <div class="col-sm-1 my-auto">
                                                    <div class="my-3">
                                                        <button type="button" class="btn btn-primary rounded-circle" id="uploadButton">
                                                            <i class="fas fa-upload"></i>
                                                        </button>
                                                        <input type="file" id="fileInput" style="display: none;" accept="image/*" name="icon_img">
                                                    </div>
                                                    <div class="my-3">
                                                        <button type="button" class="btn btn-danger rounded-circle" id="deleteButton">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <?php
                                                    if ($icon_img == NULL) {
                                                    ?>
                                                        <img class="img-fluid mb-4" style="width: 250px;" src="./assets/img/image.png" alt="..." id="selectedImage1">
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <img class="img-fluid mb-4" style="width: 250px;" src="./files/<?php echo $bg_img ?>" alt="..." id="selectedImage1">
                                                    <?php
                                                    }
                                                    ?>
                                                    <!-- <img class="img-fluid mb-4" style="width: 15rem;" src="./assets/img/image.png" alt="..." id="selectedImage1"> -->
                                                </div>
                                                <div class="col-sm-1 my-auto">
                                                    <div class="my-3">
                                                        <button type="button" class="btn btn-primary rounded-circle" id="uploadButton1">
                                                            <i class="fas fa-upload"></i>
                                                        </button>
                                                        <input type="file" id="fileInput1" style="display: none;" accept="image/*" name="bg_img">
                                                    </div>
                                                    <div class="my-3">
                                                        <button type="button" class="btn btn-danger rounded-circle" id="deleteButton1">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container-fluid">

                                            <h5 class="text-gray-900 font-weight-bold mt-4">Basic Details</h5>
                                            <span class="text-xs text-muted">Basic details about your business</span>
                                            <div class="row">
                                                <label class="custom-field one col-sm-4">
                                                    <input type="text" name="business_name" class="w-100" placeholder=" " value="<?php echo $business_name; ?>" />
                                                    <span class="placeholder">Business Name*</span>
                                                </label>
                                                <label class="custom-field one col-sm-4">
                                                    <input type="text" class="w-100" placeholder=" " value="Not Set" />
                                                    <span class="placeholder">Business Place*</span>
                                                </label>
                                                <label class="custom-field one col-sm-4">
                                                    <input type="text" name="category" class="w-100" placeholder=" " value="<?php echo $category; ?>" />
                                                    <span class="placeholder">Primary Category*</span>
                                                </label>
                                            </div>
                                            <div class="row">
                                                <label class="custom-field one col-sm-4">
                                                    <input type="text" name="website" class="w-100" placeholder=" " value="<?php echo $website; ?>" />
                                                    <span class="placeholder">Business Website*</span>
                                                </label>
                                                <label class="custom-field one col-sm-4">
                                                    <input type="text" name="b_contact" class="w-100" placeholder=" " value="<?php echo $b_contact; ?>" />
                                                    <span class="placeholder">Business Phone Number*</span>
                                                </label>
                                                <label class="custom-field one col-sm-4">
                                                    <input type="text" name="b_email" class="w-100" placeholder=" " value="<?php echo $b_email; ?>" />
                                                    <span class="placeholder">Business Email Address*</span>
                                                </label>
                                            </div>
                                            <div class="row">
                                                <label class="custom-field one col-sm-4">
                                                    <input type="text" class="w-100" placeholder=" " value="<?php echo $tags; ?>" id="tagInput" />
                                                    <span class="placeholder">Add Descriptive Tags of Products & Services*</span>
                                                </label>
                                                <div class="col-sm-4 mt-4">
                                                    <button type="button" class="btn btn-primary" onclick="addTag()">Add Tag</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12" id="tagContainer">
                                                    <!-- Tags will be added here -->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="custom-field one col-sm-12">
                                                    <textarea class="w-100" name="description" rows="3" placeholder=" "><?php echo $description; ?></textarea>
                                                    <span class="placeholder">Business Description*</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="container-fluid">

                                            <h5 class="text-gray-900 font-weight-bold mt-5">Social Media Links</h5>
                                            <span class="text-xs text-muted">Add your social media link to connect with your audience closely</span>
                                            <div class="row mt-3">
                                                <div class="col-sm-3 d-flex align-items-center">
                                                    <h6 class="mb-0 text-muted">Platform</h6>
                                                </div>
                                                <div class="col-sm-9 d-flex align-items-center">
                                                    <h6 class="mb-0 text-muted">URL</h6>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-sm-3 d-flex align-items-center">
                                                    <i class="fab fa-facebook fa-lg"></i>
                                                    <p class="ml-2 mb-0 text-gray-900 font-weight-bold">Facebook</p>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" name="facebook" class="form-control" id="facebookInput" placeholder="Enter Facebook Link" value="<?php echo $facebook; ?>" />
                                                </div>
                                                <div class="col-sm-4">
                                                    <a href="<?php echo $facebook; ?>" class="text-muted">Test Link
                                                        <i class="fas fa-external-link-alt"></i>
                                                    </a>
                                                </div>
                                                <div class="col-sm-1">
                                                    <i class="fas fa-trash" onclick="clearFacebookInput()"></i>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-sm-3 d-flex align-items-center">
                                                    <i class="fab fa-instagram fa-lg"></i>
                                                    <p class="ml-2 mb-0 text-gray-900 font-weight-bold">Instagram</p>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="instagramInput" placeholder="Enter Instagram Link" value="<?php echo $instagram; ?>" />
                                                </div>
                                                <div class="col-sm-4">
                                                    <a href="<?php echo $instagram; ?>" class="text-muted">Test Link
                                                        <i class="fas fa-external-link-alt"></i>
                                                    </a>
                                                </div>
                                                <div class="col-sm-1">
                                                    <i class="fas fa-trash" onclick="clearInstagramInput()"></i>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-sm-3 d-flex align-items-center">
                                                    <i class="fab fa-linkedin fa-lg"></i>
                                                    <p class="ml-2 mb-0 text-gray-900 font-weight-bold">LinkedIn</p>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="linkedinInput" placeholder="Enter LinkedIn Link" value="<?php echo $linkedin; ?>" />
                                                </div>
                                                <div class="col-sm-4">
                                                    <a href="<?php echo $linkedin; ?>" class="text-muted">Test Link
                                                        <i class="fas fa-external-link-alt"></i>
                                                    </a>
                                                </div>
                                                <div class="col-sm-1">
                                                    <i class="fas fa-trash" onclick="clearLinkedinInput()"></i>
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-sm-3 d-flex align-items-center">
                                                    <i class="fab fa-skype fa-lg"></i>
                                                    <p class="ml-2 mb-0 text-gray-900 font-weight-bold">Skype</p>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="skypeInput" placeholder="Enter Skype Link" value="<?php echo $skype; ?>" />
                                                </div>
                                                <div class="col-sm-4">
                                                    <a href="<?php echo $skype; ?>" class="text-muted">Test Link
                                                        <i class="fas fa-external-link-alt"></i>
                                                    </a>
                                                </div>
                                                <div class="col-sm-1">
                                                    <i class="fas fa-trash" onclick="clearSkypeInput()"></i>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-sm-3 d-flex align-items-center">
                                                    <i class="fab fa-twitter fa-lg"></i>
                                                    <p class="ml-2 mb-0 text-gray-900 font-weight-bold">Twitter</p>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="twitterInput" placeholder="Enter Twitter Link" value="<?php echo $twitter; ?>" />
                                                </div>
                                                <div class="col-sm-4">
                                                    <a href="<?php echo $twitter; ?>" class="text-muted">Test Link
                                                        <i class="fas fa-external-link-alt"></i>
                                                    </a>
                                                </div>
                                                <div class="col-sm-1">
                                                    <i class="fas fa-trash" onclick="clearTwitterInput()"></i>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-sm-3 d-flex align-items-center">
                                                    <i class="fab fa-pinterest fa-lg"></i>
                                                    <p class="ml-2 mb-0 text-gray-900 font-weight-bold">Pinterest</p>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="pinterestInput" placeholder="Enter Pinterest Link" value="<?php echo $pinterest; ?>" />
                                                </div>
                                                <div class="col-sm-4">
                                                    <a href="<?php echo $pinterest; ?>" class="text-muted">Test Link
                                                        <i class="fas fa-external-link-alt"></i>
                                                    </a>
                                                </div>
                                                <div class="col-sm-1">
                                                    <i class="fas fa-trash" onclick="clearPinterestInput()"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container-fluid">

                                            <h5 class="text-gray-900 font-weight-bold mt-5">Business Hours of Operation</h5>
                                            <span class="text-xs text-muted">Configure the standard hours of operation for this business.</span>

                                            <div class="row mt-4">
                                                <div class="col-sm-3 d-flex align-items-center">
                                                    <h6 class="mb-0 text-muted">Days</h6>
                                                </div>
                                                <div class="col-sm-3 d-flex align-items-center">
                                                    <h6 class="mb-0 text-muted">Status</h6>
                                                </div>
                                                <div class="col-sm-6 d-flex align-items-center">
                                                    <h6 class="mb-0 text-muted">Timing</h6>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-sm-3 d-flex align-items-center">
                                                    <p class="text-gray-900 font-weight-bold">Sunday</p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input toggle-switch" type="checkbox" role="switch" id="switch1" checked>
                                                        <label class="form-check-label switch-label" for="switch1">Open</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 d-flex">
                                                    <input type="time" class="form-control col-sm-4" name="" id="" value="12:00">
                                                    <p class="col-sm-1 align-items-center">TO</p>
                                                    <input type="time" class="form-control col-sm-4" name="" id="" value="23:00">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-sm-3 d-flex align-items-center">
                                                    <p class="text-gray-900 font-weight-bold">Monday</p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input toggle-switch" type="checkbox" role="switch" id="switch2" checked>
                                                        <label class="form-check-label switch-label" for="switch2">Open</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 d-flex">
                                                    <input type="time" class="form-control col-sm-4" name="" id="" value="12:00">
                                                    <p class="col-sm-1 align-items-center">TO</p>
                                                    <input type="time" class="form-control col-sm-4" name="" id="" value="23:00">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-sm-3 d-flex align-items-center">
                                                    <p class="text-gray-900 font-weight-bold">Tuesday</p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input toggle-switch" type="checkbox" role="switch" id="switch3" checked>
                                                        <label class="form-check-label switch-label" for="switch3">Open</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 d-flex">
                                                    <input type="time" class="form-control col-sm-4" name="" id="" value="12:00">
                                                    <p class="col-sm-1 align-items-center">TO</p>
                                                    <input type="time" class="form-control col-sm-4" name="" id="" value="23:00">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-sm-3 d-flex align-items-center">
                                                    <p class="text-gray-900 font-weight-bold">Wednesday</p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input toggle-switch" type="checkbox" role="switch" id="switch4" checked>
                                                        <label class="form-check-label switch-label" for="switch4">Open</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 d-flex">
                                                    <input type="time" class="form-control col-sm-4" name="" id="" value="12:00">
                                                    <p class="col-sm-1 align-items-center">TO</p>
                                                    <input type="time" class="form-control col-sm-4" name="" id="" value="23:00">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-sm-3 d-flex align-items-center">
                                                    <p class="text-gray-900 font-weight-bold">Thursday</p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input toggle-switch" type="checkbox" role="switch" id="switch5" checked>
                                                        <label class="form-check-label switch-label" for="switch5">Open</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 d-flex">
                                                    <input type="time" class="form-control col-sm-4" name="" id="" value="12:00">
                                                    <p class="col-sm-1 align-items-center">TO</p>
                                                    <input type="time" class="form-control col-sm-4" name="" id="" value="23:00">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-sm-3 d-flex align-items-center">
                                                    <p class="text-gray-900 font-weight-bold">Friday</p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input toggle-switch" type="checkbox" role="switch" id="switch6" checked>
                                                        <label class="form-check-label switch-label" for="switch6">Open</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 d-flex">
                                                    <input type="time" class="form-control col-sm-4" name="" id="" value="12:00">
                                                    <p class="col-sm-1 align-items-center">TO</p>
                                                    <input type="time" class="form-control col-sm-4" name="" id="" value="23:00">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-sm-3 d-flex align-items-center">
                                                    <p class="text-gray-900 font-weight-bold">Saturday</p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input toggle-switch" type="checkbox" role="switch" id="switch7" checked>
                                                        <label class="form-check-label switch-label" for="switch7">Open</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 d-flex">
                                                    <input type="time" class="form-control col-sm-4" name="" id="" value="12:00">
                                                    <p class="col-sm-1 align-items-center">TO</p>
                                                    <input type="time" class="form-control col-sm-4" name="" id="" value="23:00">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container-fluid">
                                            <div class="row mt-5">
                                                <div class="col-sm-11">
                                                    <h5 class="text-gray-900 font-weight-bold">Custom Buttons</h5>
                                                </div>
                                                <div class="col-sm-1">
                                                    <a href="#">
                                                        <i class="fas fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <span class="text-xs text-muted col-sm-12">Create custom buttons for your website.</span>
                                            </div>

                                            <div class="row mt-3">
                                                <label class="custom-field one col-sm-4">
                                                    <input type="text" class="w-100" placeholder=" " value="Not Set" />
                                                    <span class="placeholder">Enter Button Label*</span>
                                                </label>
                                                <label class="custom-field one col-sm-4">
                                                    <input type="text" class="w-100" placeholder=" " value="Not Set" />
                                                    <span class="placeholder">URL*</span>
                                                </label>
                                                <div class="custom-field one mt-2 col-sm-3">
                                                    <a href="#" class="text-muted">Test Link
                                                        <i class="fas fa-external-link-alt"></i>
                                                    </a>
                                                </div>
                                                <div class="custom-field one mt-1 col-sm-1">
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <label class="custom-field one col-sm-4">
                                                    <input type="text" class="w-100" placeholder=" " value="Not Set" />
                                                    <span class="placeholder">Enter Button Label*</span>
                                                </label>
                                                <label class="custom-field one col-sm-4">
                                                    <input type="text" class="w-100" placeholder=" " value="Not Set" />
                                                    <span class="placeholder">URL*</span>
                                                </label>
                                                <div class="custom-field one mt-2 col-sm-3">
                                                    <a href="#" class="text-muted">Test Link
                                                        <i class="fas fa-external-link-alt"></i>
                                                    </a>
                                                </div>
                                                <div class="custom-field one mt-1 col-sm-1">
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Soham Mandaliya</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="../operation/logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <!-- <script src="./admin_assets/vendor/jquery/jquery.min.js"></script> -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="./admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="./admin_assets/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="./admin_assets/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="./admin_assets/vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="./admin_assets/js/demo/chart-area-demo.js"></script>
            <script src="./admin_assets/js/demo/chart-pie-demo.js"></script>

            <!-- Custom JS applied to the dashboard by Soham Mandaliya -->
            <script src="./back/include/script.js"></script>

        </body>

        </html>

<?php
    }
} else {
    echo "<script>window.location='../../index.php';</script>";
}
?>