<?php
session_start();
$servername = "localhost";
$username = "teja";
$password = "tejas123";
$dbname = "FeedBackSystem";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
  $oldpass=$_POST['pwd'];
  $confpassword=$_POST['pwd2'];
  $email=$_SESSION["User1"];
  $sql="SELECT * FROM User1 where Pass='$oldpass' AND Email='$email'";
  $result =mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)==1){
    $sqlup="update User1 set Pass='$confpassword' where Email='$email'";
    if ($conn->query($sqlup) ==1) {
       echo "New Password update..";
    } else {
        echo "kuch to gadbad hai..";
    }
  }
  else {
    echo "<script>alert('Sorry,some thing wrong');
        </script>";
  }
?>
