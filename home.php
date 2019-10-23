<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>

footer{
  text-align: center;
  padding: 1%;
  background-color: #00BFFF;
  color: white;
}
</style>
</head>

<body>

<nav class="navbar navbar-default" style="background-color:#00BFFF;">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white;">Online Feedback System</a>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" style="color:white;"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="#" style="color:white;"><span class="glyphicon glyphicon-user"></span> About</a></li>
      <li><a href="signup.php" style="color:white;"><span class="glyphicon glyphicon-log-out"></span> Registration</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;"><span class="glyphicon glyphicon-log-in"></span> Login</a>
        <ul class="dropdown-menu">
          <li><a href="studentlogin.php">Student</a></li>
          <li><a href="facultylogin.php">Faculty</a></li>
          <li><a href="admin_login.php">Admin</a></li>
        </ul>
      </li>
      <li><a href="contact.php" style="color:white;"><span class="glyphicon glyphicon-earphone"></span> Contact</a></li>
    </ul>
</nav>
<div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

<div class="carousel-inner">

  <div class="item active">
    <img src="https://www.feedbackexpress.com/wp-content/uploads/2016/04/amazon_feedback.jpg"style= "height:400px; width:100%;">

  </div>

  <div class="item">
    <img src="https://www.ucb.ac.uk/content/images/landing/carousel/college/feedback.jpg" style="height:400px;width:100%;">

  </div>

  <div class="item">
    <img src="https://www.bodhih.com/wp-content/uploads/2016/08/Giving-and-receiving-feedback.jpg" style="height:400px;width:100%;">

  </div>

</div>


<a class="left carousel-control" href="#myCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  <span class="sr-only">Next</span>
</a>
</div>
</div><br>
<div class="container">
  <div class="row">
    <div class="col-sm-9">
      <h2>About Faculty Feedback System</h2>
      <p>An automatic system to analyze the textual feedbacks of faculty members teaching in any institute is proposed. The proposed system extracts all the important aspects from the feedbacks and then sentiment score of each aspect for each faculty is calculated using machine learning algorithms.</p>
    </div>
  </div>
</div>

  <footer>&copy;Developed by_______phppoint.com</footer>


</body>
</html>
