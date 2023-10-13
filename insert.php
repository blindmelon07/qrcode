<?php 
session_start();
$server = "localhost";
$username = "root";
$password = "";
$dbname = "qrcode";


$conn = new mysqli($server,$username,$password,$dbname);
if ($conn->connect_error) {
   die("connection failed" . $conn->connect_error);
}
if (isset($_POST['text'])) {
    # code...
    $text = $_POST['text'];
    $sql = "INSERT INTO  attendance(name,timein) values('$text',NOW())";
    if ($conn->query($sql) === true) {
       $_SESSION['success'] = 'Attendance added succesfully';
    } else {
       $_SESSION['error'] = $conn->error;
    }
}
header("location: index.php");
?>