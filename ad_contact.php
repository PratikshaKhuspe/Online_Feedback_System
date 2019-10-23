<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
        <table border="5" class="table">
          <tr><td>Sr.No</td><td>Name</td><td>Email</td><td>Mobile</td><td>Message</td><td>Delete</td></tr>
          <?php
          $con=mysqli_connect("localhost","teja","tejas123","FeedBackSystem");
          $sql=mysqli_query($con,"select * from Contact");

          while($list = mysqli_fetch_array($sql)){
            echo "<tr><td>".$list['c_id']."</td><td>".$list['name']."</td><td>".$list['email']."</td><td>".$list['mobile']."</td><td>".$list['message']."</td><td><a href='ad_condeldb.php?c_id=$list[0]'><span class='glyphicon glyphicon-remove'></span></a></td></tr>";
          }
          ?>
        </table>
      </body>
    </html>

  </body>
</html>
