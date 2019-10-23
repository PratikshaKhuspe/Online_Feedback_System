<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
        <table border="5" class="table">
          <tr><td>Sr.No</td><td>Name</td><td>Email</td><td>Mobile</td><td>Programme</td><td>Semester</td><td>Delete</td></tr>
          <?php
          $con=mysqli_connect("localhost","teja","tejas123","FeedBackSystem");
          $sql=mysqli_query($con,"select * from User1");

          while($list = mysqli_fetch_array($sql)){
            echo "<tr><td>".$list['id']."</td><td>".$list['Name']."</td><td>".$list['Email']."</td><td>".$list['Mobile']."</td><td>".$list['Programme']."</td><td>".$list['Semister']."</td><td><a href='ad_facdeldb.php?id=$list[0]'><span class='glyphicon glyphicon-remove'></span></a></td></tr>";
          }
          ?>
        </table>
      </body>
    </html>

  </body>
</html>
