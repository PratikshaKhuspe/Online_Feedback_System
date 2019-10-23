<h1 align="center" style="text-decoration:underline"><a href="">Admin Dashboard</a></h1>
<?php
$servername = "localhost";
$username = "teja";
$password = "tejas123";
$dbname = "FeedBackSystem";
$conn =mysqli_connect($servername, $username, $password, $dbname)or die;
//all complaints
$qq=mysqli_query($conn,"select * from Faculty ");
$rows=mysqli_num_rows($qq);
echo "<h2 style='color:green'>Total Number of Faculty : $rows</h2>";

//all emegency compalints
$q=mysqli_query($conn,"select * from User1");
$r1=mysqli_num_rows($q);
echo "<h2 style='color:orange'>Total Number of Student : $r1</h2>";


//all users
$q2=mysqli_query($conn,"select * from Feedback");
$r2=mysqli_num_rows($q2);
echo "<h2 style='color:black'>Total Number feedback given by users  : $r2</h2>";
?>
