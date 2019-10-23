<?php

$con=mysqli_connect("localhost","teja","tejas123","FeedBackSystem");

if($con->connect_error){
die("ERROR unable to connect:".$con->connect_error);
}
$name = $_POST['name'];
$email = $_POST['email'];

$mobile=$_POST['MNum'];
$msg=$_POST['msg'];




$sql = "insert into Contact(name,email,mobile,message)values('$name','$email','$mobile','$msg')";

if(mysqli_query($con, $sql)){
    echo "<script>
    alert('Welcome ,Your Records save successfully');
    window.location.href='home.php';
    </script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
mysqli_close($con);
?>
