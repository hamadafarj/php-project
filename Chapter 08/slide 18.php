<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <h2>Calculator</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $operand1 = $_POST["operand1"];
        $operator = $_POST["operator"];
        $operand2 = $_POST["operand2"];

        $result = 0;

        switch ($operator) {
            case "+":
                $result = $operand1 + $operand2;
                break;
            case "-":
                $result = $operand1 - $operand2;
                break;
            case "*":
                $result = $operand1 * $operand2;
                break;
            case "/":
                if ($operand2 != 0) {
                    $result = $operand1 / $operand2;
                } else {
                    echo "Error: Division by zero";
                }
                break;
            case "%":
                $result = $operand1 % $operand2;
                break;
            default:
                echo "Error: Invalid operator";
                break;
        }

        echo "Result: " . $operand1 . " " . $operator . " " . $operand2 . " = " . $result;
    }
    ?>
</body>
</html>