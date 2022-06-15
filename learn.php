<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploading a file</title>
</head>
<body>
    <!-- The data encoding type, enctype, MUST be specified as below -->
        <form enctype="multipart/form-data" action="learn.php" method="POST">
            <!-- MAX_FILE_SIZE must precede the file input field -->
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
            <!-- Name of input element determines name in $_FILES array -->
            Send this file: <input name="userfile" type="file" />
            <input type="submit" name="send" value="Send File" />
        </form>
</body>
</html>

<?php
$uploads_dir = "images/";

if (isset($_POST['send'])){
    echo "name: ".$_FILES['userfile']['name'];
    echo "</br>";
    echo "type: ".$_FILES['userfile']['type'];
    echo "</br>";
    echo "size: ".$_FILES['userfile']['size'];
    echo "</br>";
    echo "temp_name: ".$_FILES['userfile']['tmp_name'];
    echo "</br>";
    echo "error: ".$_FILES['userfile']['error'];
    echo "</br>";

    $destination = $uploads_dir.$_FILES['userfile']['name'];
    $status = move_uploaded_file($_FILES['userfile']['tmp_name'], $destination);
    if ($status){
        echo "file uploaded succesfuly";
    }
    else{
        echo "file was not uploaded";
    }
} 
?>