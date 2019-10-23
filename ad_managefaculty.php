<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title></title>

</head>
<body>
<h2></h2><br>

<table border="=1" class="table">
<tr><td><b>Sr.No</b></td><td><b>Name<b/></td><td><b>Designation</b></td><td><b>Mobile</b></td><td><b>Programme</b></td><td><b>Semester</b></td><td><b>Delete</b></td><td><b>Update</b></td></tr>
<?php
$con=mysqli_connect("localhost","teja","tejas123","FeedBackSystem");
$query=mysqli_query($con,"select * from Faculty");
while ($list=mysqli_fetch_array($query)) {

echo "<tr><td>".$list['id']."</td><td>".$list['Name']."</td><td>".$list['Email']."</td><td>".$list['Mobile']."</td><td>".$list['Programme']."</td><td>".$list['Semister']."</td><td><a href='ad_facdeldb.php?id=$list[0]'><span class='glyphicon glyphicon-remove'></span></a></td><td><a href='ad_magup.php?id=$list[0]'><span class='glyphicon glyphicon-pencil'></span></a></td></tr>";
}
?>



</table>

</body>
</html>
