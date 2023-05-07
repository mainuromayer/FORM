<?php 
// Discuss different types of HTTP verbs like GET POST PUT DELETE PATCH
header('X-XSS-Protection:0');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
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
                <h2>First Form</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat dicta enim provident? Cumque, fugit at?</p>

                <p>
                    <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])): ?>
                    First Name : <?php echo $_REQUEST['fname']; ?> <br>
                    <?php endif; ?>
                    <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])): ?>
                    Last Name : <?php echo $_REQUEST['lname']; ?> <br>
                    <?php endif; ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="./form-1.php" method="GET">   <!-- [POST,GET = HTTP VERB] -->
                    <label for="fname">First Name :</label>
                    <input type="text" name="fname" id="fname">
                    <label for="lname">Last Name :</label>
                    <input type="text" name="lname" id="lname">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


<!-- 
method:
 $_GET = url এ input field এর value গুলো দেখার জন্য
 $_POST = url এ input field এর value hide রাখবে
 $_REQUEST = $_GET , $_POST  দুইটাই support করবে

-->


<!-- 
HTTP Methods :

    GET.
    POST.
    PUT.
    DELETE.
    PATCH.
 -->


<!-- 
XSS : Cross-site scripting 

Cross-site scripting attacks, also called XSS attacks, are a type of injection attack that injects malicious code into otherwise safe websites. An attacker will use a flaw in a target web application to send some kind of malicious code, most commonly client-side JavaScript, to an end user.
 -->

