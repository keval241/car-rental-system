<?php
    include("connect.php");

    if (isset($_POST["submit"])) {
        $id = $_POST['c_id'];
        $n = $_POST['car_name'];
        $o = $_POST['no'];
        $b = $_POST['brand'];
        $p = $_POST['price'];
        $f = $_POST['fuel'];
        $s = $_POST['seat'];
        $a = $_POST['air'];
        $d = $_POST['description'];

        // Initialize filename with old image
        $filename = $_POST['old_img'];

        if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
            $target_dir = "uploads/";
            $tmp_filename = $_FILES['image']['tmp_name'];
            $file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $filename = $_FILES['image']['name'];

            // Validate file type and size
            $allowed_types = ['jpg', 'jpeg', 'png'];

            if (in_array($file_extension, $allowed_types)) {
                if (move_uploaded_file($tmp_filename, $target_dir . $filename)) {
                    // File successfully uploaded
                } else {
                    echo "Error moving uploaded file.";
                    exit;
                }
            } else {
                echo "Invalid file Extention.";
                exit;
            }
        }

        // Prepare and execute SQL query with prepared statements
        
        $sql = "UPDATE vechicels_brand SET v_carname = '$n', v_carno ='$o', v_brand = '$b', v_price = $p, v_fuel = '$f', v_seat = '$s', v_image = '$filename', v_aircondition = '$a', v_description = '$d' WHERE v_id = $id";
        
        $result = mysqli_query($con, $sql);
        if($result){
            header("Location:view-car.php");
        } else {
            echo "No";
        }
    }
?>
