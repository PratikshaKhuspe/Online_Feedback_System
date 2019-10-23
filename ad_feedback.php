<html>
  <head>
  </head>
  <body>
    <div class="table-responsive">
      <table class="table">
        <th>Sr.No</th>
        <th>Student</th>
        <th>Teacher</th>
        <th>Quest1</th>
        <th>Quest2</th>
        <th>Quest3</th>
        <th>Quest4</th>
        <th>Quest5</th>
        <th>Quest6</th>
        <th>Quest7</th>
        <th>Quest8</th>
        <th>Quest9</th>
        <th>Quest10</th>
        <th>Quest11</th>
        <th>Quest12</th>
        <th>Quest13</th>
        <th>Quest14</th>
        <th>Date</th>
        <?php
          $con=mysqli_connect("localhost","teja","tejas123","FeedBackSystem");
          $query=mysqli_query($con,"select * from Feedback");
          while ($list=mysqli_fetch_array($query)) {
            echo "<tr><td>".$list[0]."</td><td>".$list[1]."</td><td>".$list[2]."</td><td>".$list[3]."</td><td>".$list[4]."</td><td>".$list[5]."</td><td>".$list[6]."</td><td>".$list[7].
            "</td><td>".$list[8]."</td><td>".$list[9]."</td><td>".$list[10]."</td><td>".$list[11]."</td><td>".$list[12]."</td><td>".$list[13]."</td><td>".$list[14]."</td><td>".$list[15]."</td><td>".$list[16]."</td><td>".$list[17].
            "</td></tr>";
          }
         ?>
      </table>
    </div>
  </body>
</html>
