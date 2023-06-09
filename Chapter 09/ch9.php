<?php
$email="anghamfakher@gmail.com";
preg_match("^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{3}$",$email);


$phone_regex = "/^059{1}[98752]{1}[0-9]{6}$/";
preg_match($phone_regex);
//echo $pattern ;