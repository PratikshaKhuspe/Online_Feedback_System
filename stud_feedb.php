<?php
session_start();
$servername = "localhost";
$username = "teja";
$password = "tejas123";
$dbname = "FeedBackSystem";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
    $id=(int)'';
    $user = $_SESSION['user'];
    $faculty = $_POST['faculty'];
    $quest1 = $_POST['q1'];
    $quest2 = $_POST['q2'];
    $quest3 = $_POST['q3'];
    $quest4 = $_POST['q4'];
    $quest5 = $_POST['q5'];
    $quest6 = $_POST['q6'];
    $quest7 = $_POST['q7'];
    $quest8 = $_POST['q8'];
    $quest9 = $_POST['q9'];
    $quest10= $_POST['q10'];
    $quest11 = $_POST['q11'];
    $quest12= $_POST['q12'];
    $quest13= $_POST['q13'];
    $quest14= $_POST['q14'];

    $sql="insert into Feedback values($id,'$user','$faculty','$quest1','$quest2','$quest3','$quest4','$quest5','$quest6','$quest7',
    '$quest8','$quest9','$quest10','$quest11','$quest12','$quest13','$quest14')";

    if (mysqli_query($conn,$sql)) {
        echo "done";
    }
    else {
        echo "$sql <br>".mysqli_error($conn);
    }
?>
