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
    $email="anghamfakher@gmail.com";
    preg_match("^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{3}$",$email);
    
    
    $phone_regex = "/^059{1}[98752]{1}[0-9]{6}$/";
    preg_match($phone_regex);
    ?>
</body>
</html>