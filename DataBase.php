<?php
header("Content-Type: text/html; charset=utf-8");
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "pddrunner";

$conn = mysqli_connect($servername, $username, $password, $db);


$conn -> set_charset("utf8");
if (!$conn){
    echo 'Error connect to datsbase!';
}

$result = mysqli_query($conn, "SELECT * FROM `questions`");

while($row = $result->fetch_row()) {
    $myArray[] = $row;
}
echo json_encode($myArray);

?>