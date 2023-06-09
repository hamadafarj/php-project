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

    class Appointment
    {
        private $time;
        private $place;
        public function setTime($m)
        {
            $this->time = $m;
        }
        public function getTime()
        {
            return $this->time;
        }
        public function setPlace($c)
        {
            $this->place = $c;
        }
        public function getPlace()
        {
            return $this->place;
        }
        public function __construct($time, $place)
        {
            $this->setTime($time);
            $this->setPlace($place);
        }
    }

    $frinda = new Appointment("4:00 pm", "i 215");
    echo "Time:", $frinda->getTime(), "<p>Place:", $frinda->getPlace();

    ?>
</body>

</html>