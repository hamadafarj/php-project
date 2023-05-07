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
    $arr = array('0' => "Welcome", '1' => "to", '2' => "PHP");
    $results = print_r($arr, true);
    echo $results;
    ?>
</body>

</html>