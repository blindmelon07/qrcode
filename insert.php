<?php 
//session_start();
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
    $voice = new com("SAPI.SpVoice");
    $text = $_POST['text'];
    $message = "hi" . $text . "Your Attendance has been succesfully added!. thank you";
    $sql = "INSERT INTO  attendance(name,timein) values('$text',NOW())";
    if ($conn->query($sql) === true) {
         $voice->speak($message);
       $_SESSION['success'] = 'Attendance added succesfully';
    } else {
       $_SESSION['error'] = $conn->error;
    }
}
header("location: index.php");
?>