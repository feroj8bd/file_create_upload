<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILE CREATE & UPLOAD</title>
</head>

<body>
    <h2>File create</h2>

    <?php
    $myfile = fopen("newfile.php", "w") or die("Unable to open file!");
    $data = "Bangladesh\n";
    fwrite($myfile, $data);
    $data = "Dhaka is our Capital city \n";
    fwrite($myfile, $data);
    fclose($myfile);
    ?>

    <!-- upload a photo on php -->

        <h2>Upload a photo</h2>
        <form action="test.php" method="post" enctype="multipart/form-data">
            <label for="photo">Choose a photo:</label>
            <input type="file" name="photo" id="photo">
            <br><br>
            <button type="submit">Upload</button>
        </form>

        <!-- PHP start -->
      
    </body>

</html>