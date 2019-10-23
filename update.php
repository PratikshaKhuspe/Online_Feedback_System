<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
    <?php
    $email=$_SESSION['User1'];
    $servername = "localhost";
    $username = "teja";
    $password = "tejas123";
    $dbname = "FeedBackSystem";
    $conn =mysqli_connect($servername, $username, $password, $dbname)or die;
    $sql="SELECT * FROM User1 where Email='$email'";
    $result =mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_NUM);
    echo "<a class='navbar-brand' href='#'>Welcome,".$row[1]."</a>";
     ?>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
</nav>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3" style="background-color:lightgray; height:600px; margin:0; padding:0;">
      <h4 style="background-color:#6495ED;height:50px; color:white; text-align:center;line-height:50px;">Dashboard</h4>
      <img src="https://www.pngrepo.com/download/145523/desert.png" style="height:150px; margin-left:85px;"><br><br>
      <div class="abc" style="margin-left:50px; margin-top:20px;">
      <a href="update.php?option=Updatepass"><span class="glyphicon glyphicon-user"></span>   Update Password</a><br><br>
      <a href="update.php?option=Updateprofile"><span class="glyphicon glyphicon-user"></span>   Update Profile</a><br><br>
      <a href="update.php?option=feedback"><span class="glyphicon glyphicon-envelope"></span>  Feedback</a>
    </div>
    </div>
    <div class="col-sm-9">
      <?php
       $opt=$_GET['option'];
       if($opt!="")
       {
         if($opt=="Updatepass")
         {
           include('updatepass.php');

         }
         elseif($opt=="Updateprofile")
         {
           include('updateprofile.php');

         }
         elseif($opt=="feedback")
         {
           include('stud_feedback.php');

         }

       }
       else{
           echo "<div class='row'>
           <h2> Dashboard</h2><br><br>
           <div class='col-sm-3'>
              <div class='container-fluid padding'>
                <div class='row padding'>
                  <div class='col-md-3'>
                    <div class='card'>
                      <img class='card-img-top' src='demo.png'>
                      <div class='cart-body'>
                        <h4 class='cart-title'>Admin</h4>
                        <p class='cart-text' style='font-size:30px'>Kajal Biramane</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div></div>
              <div class='col-sm-3' >
              <div class='container-fluid padding'>
                <div class='row padding'>
                  <div class='col-md-3'>
                    <div class='card'>
                      <img class='card-img-top' src='demo.png'>
                      <div class='cart-body'>
                        <h4 class='cart-title'>Admin</h4>
                        <p class='cart-text' style='font-size:30px'>Pranali Sargar</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>

               <div class='col-sm-3' >
              <div class='container-fluid padding'>
                <div class='row padding'>
                  <div class='col-md-3'>
                    <div class='card'>
                      <img class='card-img-top' src='demo.png'>
                      <div class='cart-body'>
                        <h4 class='cart-title'>Admin</h4>
                        <p class='cart-text' style='font-size:30px'>Dhanshree Jedhe</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div></div></div>";
         }
       ?>
    </div>
  </div>
</div>
</body>
</html>
