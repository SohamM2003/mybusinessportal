<?php

include './back/include/config.php';

if (isset($_POST['submit'])) {

    // Data to be changed in users table
    $id = $_POST['id'];
    $business_name = $_POST['business_name'];

    // Data to be changed in business_details table
    $category = $_POST['category'];
    $website = $_POST['website'];
    $b_contact = $_POST['b_contact'];
    $b_email = $_POST['b_email'];
    $description = $_POST['description'];
    $facebook = $_POST['facebook'];

    // Check if images were provided
    if (!empty($_FILES['icon_img']['name']) && !empty($_FILES['bg_img']['name'])) {
        $icon_img = $_FILES['icon_img'];
        $bg_img = $_FILES['bg_img'];

        $icon_img_file_name = $icon_img['name'];
        $bg_img_file_name = $bg_img['name'];

        $file_ext_icon = strtolower(pathinfo($icon_img_file_name, PATHINFO_EXTENSION));
        $file_ext_bg = strtolower(pathinfo($bg_img_file_name, PATHINFO_EXTENSION));
        $valid_file_ext = array('png', 'jpg', 'jpeg');

        if (in_array($file_ext_icon, $valid_file_ext) && in_array($file_ext_bg, $valid_file_ext)) {
            $img_store_icon = "files/" . $icon_img_file_name;
            $img_store_bg = "files/" . $bg_img_file_name;

            move_uploaded_file($icon_img['tmp_name'], $img_store_icon);
            move_uploaded_file($bg_img['tmp_name'], $img_store_bg);

            $sql = "UPDATE `business_details` SET `icon_img`='$icon_img_file_name',`bg_img`='$bg_img_file_name',`category`='$category',`website`='$website',`b_contact`='$b_contact',`b_email`='$b_email', `description`='$description', `facebook` = '$facebook' WHERE `id`='$id'";
        } else {
            // Invalid image extension
?>
            <script>
                alert('Extension is not valid');
                window.location = "./dash_edit.php";
            </script>
        <?php
        }
    } else {
        // Images not provided, update other fields only
        $sql = "UPDATE `business_details` SET `category`='$category',`website`='$website',`b_contact`='$b_contact',`b_email`='$b_email', `description`='$description', `facebook` = '$facebook' WHERE `id`='$id'";
    }

    // Additional Query for users table
    $additionalSqlUsers = "UPDATE `users` SET `business_name`='$business_name' WHERE `id`='$id'";

    // Execute Main Query and Additional Query for users table
    $mainQuery = mysqli_query($con, $sql);
    $additionalQueryUsers = mysqli_query($con, $additionalSqlUsers);

    if ($mainQuery && $additionalQueryUsers) {
        ?>
        <script>
            alert('Your Data updated successfully');
            window.location = "./dash.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Your Data update failed');
            window.location = "./dash_edit.php";
        </script>
<?php
    }

    mysqli_close($con);
}
?>