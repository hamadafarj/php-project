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
            $Ali = array("mob" => "0590123456", "email" => "ali@gmail.com");
            $friendList = array(
                "Ali" => array("mob" => "0590123456", "email" => "ali@gmail.com"),
                "Ahmad" => array("mob" => "0591234560", "email" => "ahmad@gmail.com"),
                "Omer" => array("mob" => "0592345601", "email" => "omer@gmail.com")
            );
            ?>


    <!-- <?php
    $friendList = array(
        "Ali" => array("mob" => "0590123456", "email"                    => "ali@gmail.com"),
        "Ahmad" => array("mob" => "0591234560",                    "email" => "ahmad@gmail.com"),
        "Omer" => array("mob" => "0592345601",                   "email" => "omer@gmail.com")
    ); ?>
    <table border='2'>
        <thead>
            <tr>
                <th>name</th>
                <th>mobile</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for (reset($frindList); $ky = key($frindList); next($frindList)) {
                echo "<tr><th> $ky </th>";
                for (reset($frindList[$ky]); $k = key($frindList[$ky]); next($frindList[$ky])) {
                    echo "<td>", $frindList[$ky][$k], "</td>";
                }
                echo "</tr>";
            }
            echo "</tbody> </table>"; ?> -->

</body>

</html>