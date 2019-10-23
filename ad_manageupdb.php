<?php

$servername = "localhost";
$username = "teja";
$password = "tejas123";
$dbname = "FeedBackSystem";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name=$_POST['Name'];
$des=$_POST['designation'];
$email=$_POST['Email_Id'];
$passw=$_POST['Password'];
$prog=$_POST['programme'];
$sem=$_POST['semester'];
$mob=$_POST['Mobile_Number'];
$sql1="update Faculty set Name='$name',Designation='$des',Email='$email',Pass='$passw',Programme='$prog',Semister='$sem',Mobile='$mob' where name='$name'";
if(mysqli_query($conn,$sql1)){
    echo "<script>
    alert('Faculty Updated Successfully...');
    window.location.href='admin_update.php?option=Ad_ManageFaculty';
    </script>";
  }
  else{
    echo "<script>
    alert('Please Try Again...');
    </script>";
  }
?>
