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
    class Visitors
    {
        private  $cardNumber;
        private function validateCardNumber($number)
        {
            if (!preg_match("/^[0-9]{4}-[0-9]{4}$/", $number))
                return FALSE;
            else return TRUE;
        }
        public function setCardNumber($no)
        {
            if ($this->validateCardNumber($no))
                $this->cardNumber = $no;
            else   echo "error massage";
        }
    }
    $visitor = new Visitors();
    $visitor->setCardNumber("5555-5555");
    ?>
</body>

</html>