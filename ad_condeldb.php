<?php

$servername = "localhost";
$username = "teja";
$password = "tejas123";
$dbname = "FeedBackSystem";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die;


	$info=$_GET['c_id'];

	mysqli_query($conn,"delete from Contact where c_id='$info'");
	//header('location:dashboard.php?info=deletestu.php');
  echo "<script>alert('Delete record successfully');
  window.location.href='admin_update.php?option=ad_con'</script>";
?>
