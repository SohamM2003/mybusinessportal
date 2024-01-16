<?php
include('../include/config.php');

if (isset($_POST['register'])) {
    $owner_name = $_POST['owner_name'];
    $business_name = $_POST['business_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $con_password = $_POST['con_password'];

    if ($password == $con_password) {

        $query = "INSERT INTO `users` (`owner_name`, `business_name`, `email`, `password`) VALUES ('$owner_name', '$business_name', '$email', '$password')";
        $result = mysqli_query($con, $query);
        $user_id = $con->insert_id;

        $query1 = "INSERT INTO `business_details` (`user_id`) VALUES ('$user_id')";
        $result1 = mysqli_query($con, $query1);

        if ($result && $result1) {
?>
            <script>
                alert("Registration Successful!");
                window.location = "http://localhost/mybusinessportal/index.php";
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Registration Failed!");
                window.location = "http://localhost/mybusinessportal/signup.php";
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert("Password and Confirm Password Does Not Match!");
            window.location = "http://localhost/mybusinessportal/signup.php";
        </script>
<?php
    }
}
