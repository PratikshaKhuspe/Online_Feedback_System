<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
      <div class="container-fluid text-center" style="margin-left:300px;">
      <div class="row">
        <div class="col-sm-8">
      <h2>Faculty Login form</h2>
      <form class="form-inline" action="fetch.php" method="post">
        <div class="form-group">
          <label>Enter Email:</label>
          <input type="email" class="form-control" placeholder="Enter email" name="email" style="margin-left:70px; width:300px">
        </div><br><br>
        <div class="form-group">
          <label for="pwd">Enter Password:</label>
          <input type="password" class="form-control"  placeholder="Enter password" name="pwd" style="margin-left:40px; width:300px">
        </div><br>

        <button type="submit" class="btn btn-success" id="submit" name="Submit" style="margin-left:40px; margin-top:30px;">LOGIN</button>
      </form>
      </div>
    </div>
  </div>
      <div>
       <footer>&copy;Developed by_______phppoint.com</footer>
     </div>
    </body>
    </html>
