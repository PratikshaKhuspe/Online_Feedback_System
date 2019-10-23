<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>

  footer{
    text-align: center;
    margin: 0;
    padding: 1%;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #00BFFF;
    color: white;
    position: fixed;
  }
  </style>
  </head>
  </head>
  <body>
    <nav class="navbar navbar-default" style="background-color:#00BFFF;">
        <div class="navbar-header">
          <a class="navbar-brand" href="#" style="color:white;">Online Feedback System</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="home.php" style="color:white;"><span class="glyphicon glyphicon-home"></span> Home</a></li>
          <li><a href="#" style="color:white;"><span class="glyphicon glyphicon-user"></span> About</a></li>
          <li><a href="signup.php" style="color:white;"><span class="glyphicon glyphicon-log-out"></span> Registration</a></li>
          <li><a href="login.php" style="color:white;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <li><a href="contact.php" style="color:white;"><span class="glyphicon glyphicon-earphone"></span> Contact</a></li>
        </ul>
    </nav>
    <div class="container">
      <div class="row">
      <div class="col-sm-8">
        <h2>Contact Us</h2><br><br>
        <form class="form-inline" action="contactdb.php" method="post">
          <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" style="margin-left:130px; width:500px">
            </div><br><br>
            <div class="form-group">
              <label>Mobile Number:</label>
              <input type="number" class="form-control" name="MNum" required id="num" placeholder="enter mobile number" style="margin-left:70px; width:500px">
              </div><br><br>
          <div class="form-group">
            <label>Email Address:</label>
            <input type="email" class="form-control" placeholder="Enter email" name="email" style="margin-left:70px; width:500px">
          </div><br><br>
          <div class="form-group">
            <label>Message:</label>
            <textarea id="message" name="msg" placeholder="Write Message" class="form-control" style="margin-left:110px; width:500px; height:100px"></textarea>
            </div>
            <button type="submit" class="btn btn-success" id="submit" name="Submit" style="margin-left:40px; margin-top:30px;">LOGIN</button>

          </form>

      </div>
      <div class="col-sm-4">
        <h2>Contact Details</h2>
        <p>E-24 Sector 63 <br>
          Noida, India 90210</p>
          <p><span class="glyphicon glyphicon-earphone"></span> P_ (123) 456-7690</p>
          <p><span class="glyphicon glyphicon-envelope"></span> E_ meera@gmail.com</p>
          <p><span class="glyphicon glyphicon-time"></span> H_ Monday - Sunday 9:00 AM to 9:00 PM</p>
          <p>
        <a href="https://www.twitter.com"><i class="fa fa-twitter-square" style="font-size:20px"></i></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.facebook.com"><i class="fa fa-facebook-square" style="font-size:20px"></i></a>&nbsp;&nbsp;&nbsp;
        <!-- <i class="fa fa-youtube" style="font-size:20px"></i>&nbsp;&nbsp;&nbsp; -->
        <a href="https://www.instagram.com"><i class="fa fa-instagram" style="font-size:20px"></i></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.google.com"><i class="fa fa-google-plus-square" style="font-size:24px"></i></a>
       </p>
      </div>
      </div>
    </div>
    <div>
     <footer>&copy;Developed by_______phppoint.com</footer>
   </div>
  </body>
</html>
