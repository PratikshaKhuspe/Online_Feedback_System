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
<form class="" action="admin_fetch.php" method="post" style="margin-left:500px;">
  <br>
  <h3>Admin Login Form</h3><br>
  <table>
    <tr><td>
   <label>Enter Your Username</label></td>
   <td>
   <input type="text" name="user" class="form-control"></td></tr>

   <tr><td>
   <label>Enter Your Password</label></td>
   <td>
   <input type="password" name="password" class="form-control"></td></tr>
   <tr><td>
   <button type="submit" name="Submit" id="submit" class="btn btn-success">Login</button></td></tr>
 </table>

</form>
<div>
 <footer>&copy;Developed by_______phppoint.com</footer>
</div>
</body>
</html>
