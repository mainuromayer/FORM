<?php
// Detailed discussion on select field -

include_once "form_select-function.php";

$fruits = ["mango", "orange", "Banana", "apple", "lemon", "peach"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select/Dropdown Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Select/Dropdown</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum nisi exercitationem ad iure voluptatem. Cum!</p>
                <p>
                    <?php
                    echo "<pre>";
                    print_r($_POST);
                    echo "</pre>";

                    $sfruits = isset($_POST['fruits']) ? $_POST['fruits']:array();
                    // $sfruits = $_POST['fruits'] ?? array();
                    // $sfruits = filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);

                    if(count($sfruits)>0){
                        echo "You are selected: ".join(", ", $sfruits);
                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="./form_select.php" method="POST">
                    <label for="fruits">Select Some Fruits</label>
                    <select style="height: 200px;" name="fruits[]" id="fruits" multiple>
                        <option value="" disabled selected>--please choose an option--</option>
                        <!-- 
                        <option value="mango">Mango</option>
                        <option value="orange">Orange</option>
                        <option value="banana">Banana</option> 
                        -->
                        <?php echo displayOptions($fruits, $sfruits); ?>
                    </select>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>