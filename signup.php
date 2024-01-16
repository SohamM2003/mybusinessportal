<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">

    <!-- Custom styles applied to the dashboard by ~SM -->
    <link rel="stylesheet" href="./back/include/style.css">

    <style>
        .col-md-6 {
            height: 100vh;
        }

        input:active {
            border-color: #548CFF;
        }

        /* Media query for screens with a maximum width of 768px (tablet and mobile) */
        @media (max-width: 768px) {
            p {
                position: static;
                margin-top: 10px;
                text-align: center;
            }
        }
    </style>
    <title>Signup for Business | SM</title>
</head>

<body>

    <!-- Preloader -->
    <div class="loader_bg">
        <div class="loader"></div>
    </div>

    <div class="container-fluid">
        <div class="row">

            <!-- Second column: Welcome message and copyright -->
            <div class="col-md-6" style="background-image: url('./assets/img/bg.png'); background-size: cover; background-repeat: no-repeat; height: 100vh; display: flex; justify-content: center; align-items: center;">
                <!-- Welcome Message -->
                <h1 style="position: absolute; text-align: center; color: #FFF;">Welcome to <br /> My Business</h1>
                <!-- Copyright Line -->
                <p style="margin-top: auto; margin-right: 50%; color: white; font-size: 12px;">&copy; Soham Mandaliya</p>
            </div>

            <!-- First column: Login form -->
            <div class="col-md-6">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="d-flex justify-content-center align-items-center vh-100">
                                <div class="col-12 col-lg-7 my-5 p-2">
                                    <!-- Login Title and Description -->
                                    <h4 class="my-1">Signup</h4>
                                    <h6 style="color: #869BB9;">Enter the credentials to continue</h6>

                                    <div class="p-3">
                                        <!-- Login Form -->
                                        <form method="post" action="./back/operation/signup.php">
                                            <div class="form-group">
                                                <input type="text" class="form-control my-3 p-2" name="owner_name" placeholder="Enter Owner Name" style="width: 100%;" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control my-3 p-2" name="business_name" placeholder="Enter Business Name" style="width: 100%;" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control my-3 p-2" name="email" placeholder="Enter Your Email" style="width: 100%;" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control my-3 p-2" name="password" placeholder="Enter Your Password" style="width: 100%;" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control my-3 p-2" name="con_password" placeholder="Re-enter Your Password" style="width: 100%;" required>
                                            </div>
                                            <div class="d-flex justify-content-center mb-2">
                                                <p class="text-muted">Already Registered?&nbsp;</p>
                                                <a href="./index.php" style="text-decoration: none;">Login Here!</a>
                                            </div>
                                            <!-- Login Button -->
                                            <div class="text-center">
                                                <input type="submit" class="btn btn-md" name="register" value="Register" style="width: 70%; background-color: #548CFF; border-radius: 12px;">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="./admin_assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.bundle.js"></script>

    <!-- Custom JS applied to the dashboard by Soham Mandaliya -->
    <script src="./back/include/script.js"></script>

</body>

</html>