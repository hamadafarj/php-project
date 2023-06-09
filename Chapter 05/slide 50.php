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
    class friendContInfo
    {
        private $name;
        private $email;
        private $phone;
        private static $count = 0;

        public function __construct($name, $email, $phone)
        {
            $this->name = $name;
            $this->email = $email;
            $this->setPhone($phone);
            self::$count++;
        }

        public function __destruct()
        {
            self::$count--;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function getPhone()
        {
            return $this->phone;
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function setPhone($phone)
        {
            if ($this->validatePhone($phone)) {
                $this->phone = $phone;
            } else {
                throw new Exception('Invalid phone number');
            }
        }

        private function validatePhone($phone)
        {
            // Implement your phone number validation logic here
            // For example, let's assume a valid phone number should have exactly 10 digits
            if (preg_match('/^\d{10}$/', $phone)) {
                return true;
            } else {
                return false;
            }
        }

        public static function getCount()
        {
            return self::$count;
        }
    }
    ?>
</body>

</html>