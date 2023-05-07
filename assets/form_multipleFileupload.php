<?php
// Multiple file uploads in PHP -

$allowedTypes = array(
    'image/png',
    'image/jpg',
    'image/jpeg'
);

if(isset($_FILES['photo'])){
    $totalFiles = count($_FILES['photo']['name']);
    for ($i=0; $i<$totalFiles; $i++){
        if(in_array($_FILES['photo']['type'][$i], $allowedTypes) !== false && $_FILES['photo']['size'][$i] < 5*1024*1024){
            move_uploaded_file($_FILES['photo']['tmp_name'][$i], "files/".$_FILES['photo']['name'][$i]);
            $success = "File Uploaded Successfully";
        }else{
            $error = "File Not Uploaded.";
        }

    }
}

//if(isset($_FILES['photo'])){
//    // move_uploaded_file($_FILES['photo']['tmp_name'], "files/images.jpg");
//    if($_FILES['photo']['type'] == 'image/png' || $_FILES['photo']['type'] == 'image/jpeg'){
//        move_uploaded_file($_FILES['photo']['tmp_name'], "files/".$_FILES['photo']['name']);
//    }
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body{
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>File Upload Form</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto nam velit aliquid maxime ex omnis!</p>
            <pre>
                    <p>
                        <?php
                        print_r($_POST);
                        print_r($_FILES);
                        ?>
                    </p>
                </pre>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST" enctype="multipart/form-data">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname">

                <label for="photo">Photo</label>
                <span style="color: <?php if(isset($success)): echo 'green'; elseif(isset($error)): echo 'red'; endif; ?>">
                        <?php
                        if(isset($success)):
                            echo $success;
                        elseif(isset($error)):
                            echo $error;
                        endif;
                        ?>
                    </span><br>
                <input type="file" name="photo[]" id="photo">
                <input type="file" name="photo[]" id="photo">
                <input type="file" name="photo[]" id="photo">


                <br><br>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>