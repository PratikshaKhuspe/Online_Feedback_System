
<!DOCTYPE html>
<html lang='en'>
<head>
  <title>Bootstrap Example</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>
  <style media="screen">
    nav a{
      color: blue;
      font-size: 20px;
      text-decoration: none !important
    }

    .head1 h4{
      line-height:40px;
    }
    .sidenav{
      margin: 0;
      padding: 0;
      background-color: lightgrey;
      height:550px;
    }
    .collapse{
      background-color: green;
      border-bottom:1px solid black;
      margin: 0;
      padding:2%;
    }
    .collapse a{
      color: white;
      text-decoration: none;
      font-size: 15px;
    }
    .head1{
      background-color:black;
      color:white;
      height: 40px;
      text-align: center;
    }
    .list a{
      padding-left:15%;
      color: black;
    }

    </style>
</head>
<body>

<nav class='navbar navbar-default' style="background-color:lightgreen;">
  <div class='container-fluid'>
    <div class='navbar-header'>
      <a class='navbar-brand' href='#'>Faculty Feedback System
        <?php
      session_start();
      echo $_SESSION['AdminUser'];
       ?>
     </a>
    </div>

    <ul class='nav navbar-nav navbar-right'>
      <li><a href="logout.php"><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class='container-fluid'>
<div class='row'>
    <div class='col-sm-3' style='background-color:lightgray;height:1200px;margin:0;padding:0;'>
    <!-- <div class='box' style='background-color:#6495ED; height:50px; text-align:center;line-height:50px; font-size:20px' >Dashboard  </div><br> -->

   <!-- <div class='box1' style='padding:20px;'> -->
     <a href="admin_update.php?option=ad_dash"><h3>  <span class='glyphicon glyphicon-home'></span>  DashBoard</h3></a><br><br>
     <nav>
                <div class="linknav">
              <a data-toggle="collapse" href="#Faculty" role="button">&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span> Faculty <span class="caret"></span></a>
                <div class="collapse" id="Faculty">
                  <a href="admin_update.php?option=Add_Faculty">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i> ADD Faculty</a>
                  <hr>
                  <a href="admin_update.php?option=Ad_ManageFaculty">&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-eye" aria-hidden="true"></span>  Manage Faculty</a>
              </div>
                <div class="linknav">
                </div><br>
               <a data-toggle="collapse" href="#Student" role="button">&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span> Student <span class="caret"></span></a>
                <div class="collapse" id="Student">
                <a href="admin_update.php?option=admagstu">&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-eye" aria-hidden="true"></span>  Manage Student</a>
              </div>
            </div><br>
              <div class="linknav">
                <a data-toggle="collapse" href="#Feedback" role="button">&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-book" aria-hidden="true"></span>  Feedback <span class="caret"></span></a>
                 <div class="collapse" id="Feedback">
                 <a href="admin_update.php?option=ad_feed">&nbsp;&nbsp;&nbsp;&nbsp;Feedback</a>
                 <hr>
                  <a href="#">&nbsp;&nbsp;&nbsp;&nbsp;Feedback Average</a>
                 </div>
               </div><br>
                 <div class="linknav">
                  <a href="admin_update.php?option=ad_con"><h5>&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Contact us</a></h5>
                </div>
              </nav>
            </div>
    <div class='col-sm-9' style='height:600px;'>
    <?php
       $opt=$_GET['option'];
       if($opt!=''){
         if($opt=='Add_Faculty'){
           include('ad_faculty.php');
         }
         elseif($opt=='Ad_ManageFaculty')
         {
           include('ad_managefaculty.php');

         }
         elseif($opt=='ad_dash')
         {
           include('ad_dashboard.php');

         }
         elseif($opt=='admagstu') {
           include('ad_magstu.php');
         }
         elseif($opt=='adupdate') {
           include('ad_notiupdate.php');
         }
         elseif($opt=='ad_feed')
         {
           include('ad_feedback.php');

         }
         elseif($opt=='ad_con')
         {
           include('ad_contact.php');

         }
       }
       else{
         echo "<div class='col-sm-3'>
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

        </div></div>";
       }
     ?>

</body>
</html>
