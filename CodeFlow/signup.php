<?php
$f = $_POST["firstName"];
$g = $_POST["lastName"];
$h = $_POST["email"];
$i = $_POST["password"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "applications";
//Create connection 
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}
echo "Succesfully you have created connection";
//insert into table
$sql = "INSERT INTO lists(Name,LName,Email,Pass) VALUES('$f','$g','$h','$i')";
if ($conn->query($sql) === TRUE) {
    echo "<h1>Hello $f your record inserted into table fname successfully</h1>";
} else {
    echo "error " . $conn->error;
}
//End connection
$conn->close();

?>