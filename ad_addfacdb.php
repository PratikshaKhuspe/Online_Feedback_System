<?php
$servername = "localhost";
$username = "teja";
$password = "tejas123";
$dbname = "FeedBackSystem";

// Create connection
// Check connection
//if (!$con) {
  //  die("Connection failed: " . mysqli_connect_error());


$a=$_POST["id"];
$b=$_POST["name"];
$c=$_POST["email"];
$d=$_POST["pass"];
$e=$_POST["mobile"];
$f=$_POST["programm"];
$g=$_POST["semester"];




$conn = mysqli_connect($servername, $username, $password, $dbname) or die;


$sql = "INSERT INTO Faculty(Name,Email,Pass,Mobile,Designation,Programme,Semister)VALUES('$a','$b', '$c','$d','$e','$f','$g')";


if($conn->query($sql)==TRUE){
  echo "<script>alert('Added successfully');
    window.location.href='admin_update.php?option=Ad_ManageFaculty';
    </script>";
}
  else {
    echo "failed to inserted".$sql."<br>".$conn->error;

  }

  $conn->close();
?>
