<?php



$servername = "localhost";
$username = "root@localhost";
$password = "";
$Database = "MyGuest";
$con = new mysqli($servername, $username, $password, $Database);
if ($con->connect_error) {
    die("Connection Error" . $con->connect_error);
}
if (isset($_POST['submit'])) {
    $sql = 'INSERT INTO EMPLOYEE (Name,Salary,DepartmentName) values	("' . $_POST["Name"] . '",' . $_POST["salary"] . ',"' . $_POST["DepName"] . " ";
    if ($con->query($sql) === TRUE) {
        echo "New Recored was inserted ";
    } else {
        echo "Error" . $con->error;
    }
}
$con->close();


$sql = "SELECT ID, Name , Salary, DepartmentNameFROM MyGuests";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"] . " - Name: " . $row[" Name "] . "- Salary " . $row[" Salary "] . "<br>";
    }
} else {
    echo "0 results";
}

