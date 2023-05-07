<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = array("Volvo" => "XC90", "BMW" => "X5");
    if (array_key_exists("Volvo", $a)) {
        echo "Key exists!";
    } else {
        echo "Key does not exist!";
    }
    ?>
</body>

</html>