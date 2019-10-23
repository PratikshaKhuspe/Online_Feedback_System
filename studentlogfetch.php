<?php
$servername = "localhost";
$username = "teja";
$password = "tejas123";
$dbname = "FeedBackSystem";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$email=$_POST["email"];
$pass=$_POST["pwd"];

  $sql="SELECT * FROM User1 WHERE Email ='$email' AND Pass ='$pass'";
  $result =mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)==1){
    session_start();
    $_SESSION["User1"] = $email;
    echo "<script>alert('Login Successfully');
          window.location.href='update.php';
        </script>";
  }
  else {
    echo "<script>alert('Sorry,Invalid Email and Password');
          window.location.href='studentlogfetch.php';
        </script>";
  }
 ?>
