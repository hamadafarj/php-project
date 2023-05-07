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
    echo "<br>";
    $stdGrads = array(78.8, 80.5, 81.2, 90.8, 76.6);

    echo "<table border='1'>";
    echo "<tr>";
    for ($i = 1; $i < count($stdGrads) + 1; $i++) {
        echo "<td> $i th</td>";
    }
    echo "</tr> ";
    echo "<tr>";
    foreach ($stdGrads as $sg) {
        echo "<td> $sg</td>";
    }
    echo "</tr> ";
    echo "</table>";
    ?>
</body>


</html>