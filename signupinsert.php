<?php
$servername = "localhost";
$username = "teja";
$password = "tejas123";
$dbname = "FeedBackSystem";

$a=$_REQUEST['name'];
$b=$_REQUEST['email'];
$c=$_REQUEST['pwd'];
$e=$_REQUEST['MNum'];
$l=$_REQUEST['program'];
$m=$_REQUEST['sem'];
$f=$_REQUEST['Gender'];
$g=$_REQUEST['remember'];
$h=$_REQUEST['fileToUpload'];
$i=$_REQUEST['year'];
$j=$_REQUEST['month'];
$k=$_REQUEST['day'];

// Create connection
$conn =mysqli_connect($servername, $username, $password, $dbname)or die;
// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

$sql ="INSERT INTO User1 (Name,Email,Pass,Mobile,Programme,Semister,Gender,Hobbies,Image,DOB)VALUES ('$a','$b','$c','$e','$l','$m','$f','$g','$h','$i''$j''$k')";


 if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New Record Created Successfully');
          window.location.href='home.php';
        </script>";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }

$conn->close();
?>
