<?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
                $allowed = array("jpg" => "image/jpeg", "jpeg" => "image/jpeg", "png" => "image/png");
                $filename = $_FILES['photo']['name'];
                $filetype = $_FILES['photo']['type'];
                $filesize = $_FILES['photo']['size'];

                // Verify photo extension
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if (!array_key_exists($ext, $allowed)) {
                    die('Please choose a valid file');
                }

                // Size validation
                $maxsize = 5 * 1024 * 1024; 
                if ($filesize > $maxsize) {
                    die('Error: File is greater than 5MB!');
                }

                if (in_array($filetype, $allowed)) {
                    move_uploaded_file($_FILES['photo']['tmp_name'], "upload/" . $filename);
                    echo "File upload successfully done!";
                } else {
                    echo "File not uploaded!";
                }

            } else {
                echo "Error: " . $_FILES['photo']['error'];
            }
        }
        ?>