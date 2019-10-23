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
  $name= $_POST["name"];
  $num= $_POST["MNum"];
  $pro=$_POST["program"];
  $se=$_POST["sem"];
  $gen= $_POST["Gender"];
  $check= $_POST["remember"];
  $c= $_POST["year"];
  $d= $_POST["month"];
  $e= $_POST["day"];
  $email=$_SESSION["User1"];

    $sqlup="update User1 set Name='$name' ,Mobile='$num',Programme='$pro',Semmister='$se', Gender='$gen',Hobbies='$check',DOB='$c''$d''$e' where Email='$email'";;
    if(mysqli_query($conn,$sqlup)){
       echo "New Profile update..";
    }
     else {
        echo "kuch to gadbad hai..";
    }
?>
