<?php 
// HTML Input - Checkboxes and Grouped Checkboxes

header('X-XSS-Protection:0');
include_once "./form_checkbox-function.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checked Form</title>
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
                <h2>Checked Form</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat dicta enim provident? Cumque, fugit at?</p>

                <p>
                    <?php 
                    $fname = '';
                    $lname = '';
                    $checked = '';

                    if(isset($_REQUEST['cb1']) && $_REQUEST['cb1'] == 1){
                        $checked = 'checked';
                    }

                    echo "<pre>";
                    print_r($_REQUEST);
                    echo "</pre>";
                    
                    ?>

                    <?php 
                    if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])){
                        $fname = htmlspecialchars($_REQUEST['fname']);
                        // $fname = filter_input(INPUT_POST, 'fname',  FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    } 
                    ?>

                    <?php 
                    if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])){
                        $lname = htmlspecialchars($_REQUEST['lname']);
                        // $lname = filter_input(INPUT_POST, 'lname',  FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    } 
                    ?>
                </p>

                <p>
                    First Name : <?php echo $fname; ?><br>
                    Last Name : <?php echo $lname; ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="./form_checkbox.php" method="GET">

                    <label for="fname">First Name :</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">

                    <label for="lname">Last Name :</label>
                    <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">

                    <div>
                        <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checked; ?>>
                        <label for="cb-1" class="label-inline">remember</label>
                    </div>

                    <div>
                        <input type="checkbox" name="cb1" id="cb1" <?php echo $checked; ?>>
                        <label for="cb-1" class="label-inline">not remember</label>
                    </div> <br>

                    <!-- ================================================ -->
                    
                    <label class="label">Select Some Games</label>

                    <input type="checkbox" name="games[]" value="cricket" <?php echo isGameChecked('games', 'cricket') ?> >
                    <label class="label-inline">Cricket</label><br>

                    <input type="checkbox" name="games[]" value="football" <?php echo isGameChecked('games', 'football') ?> >
                    <label class="label-inline">Football</label><br>

                    <input type="checkbox" name="games[]" value="basketball" <?php echo isGameChecked('games', 'basketball') ?> >
                    <label class="label-inline">Basketball</label><br>
                    
                    <input type="checkbox" name="games[]" value="hocki" <?php echo isGameChecked('games', 'hocki') ?> >
                    <label class="label-inline">Hocki</label><br><br>

                    <!-- ================================================ -->

                    <label class="label">Select Some Fruits</label>

                    
                    <input type="checkbox" name="fruits[]" value="orange" <?php echo isFruitChecked('orange') ?> >
                    <label class="label-inline">Orange</label><br>

                    <input type="checkbox" name="fruits[]" value="mango" <?php echo isFruitChecked('mango') ?> >
                    <label class="label-inline">Mango</label><br>

                    <input type="checkbox" name="fruits[]" value="banana" <?php echo isFruitChecked('banana') ?> >
                    <label class="label-inline">Banana</label><br>
                    
                    <input type="checkbox" name="fruits[]" value="lemon" <?php echo isFruitChecked('lemon') ?> >
                    <label class="label-inline">Lemon</label><br> 
                   
                    <!-- ================================================ -->


                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


<!-- 
htmlspecialchars(); - এই ফাংশন এর মাধ্যমে সে html-এর যে কোন কিছুকে সে string বানিয়ে ফেলবে
 -->

