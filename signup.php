
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
     padding: 1%;
     background-color: #00BFFF;
     color: white;
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
     <h2>Registration form</h2><br>
     <form class="form-inline" action="signupinsert.php">
       <table class="table">
         <thead>
         <tr>
         <th>Enter your name:</th>
         <th><input type="text" class="form-control" id="name" placeholder="Enter name" name="name"></th>
       </tr>
       <tr>
         <th>Enter your email:</th>
        <th> <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"></th>
       </tr>
       <tr>
         <th>Enter your password:</th>
        <th> <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd"></th>
       </tr>
       <tr>
         <th> Mobile Number :</th>
        <th><select id="ph">
          <option>+91</option>
          <option>+92</option>
          <option>+93</option>
          <option>+94</option>
        </select>
        <input type="number" class="form-control" name="MNum" required id="num" placeholder="enter mobile number"></th>
      </tr>
      <tr>
        <th> Select Your Programme :</th>
       <th><select name="program">
         <option>B.A.</option>
         <option>B.Com</option>
         <option>B.Sci.</option>
         <option>BCA</option>
         <option>BMM</option>
         <option>BMS</option>
         <option>BAF</option>
       </select></th>
     </tr>
     <tr>
       <th> Select Your Semister :</th>
      <th><select name="sem">
        <option>I</option>
        <option>II</option>
        <option>III</option>
        <option>IV</option>
        <option>V</option>
        <option>VI</option>

      </select></th>
    </tr>
       <tr>
         <th>Select your Gender :</th>
         <th><input type="radio" name="Gender" value="Male"><span id="male"> Male</span>
             <input type="radio" name="Gender" value="Female"><span id="male"> Female</span></th>
      </tr>
       <tr>
      <th>Choose your hobbies :</th>
      <th><input type="checkbox" name="remember" value="Reading"> Reading
          <input type="checkbox" name="remember" value="Singing"> Singing
          <input type="checkbox" name="remember" value="Playing"> Playing</th>
    </tr>
    <tr>
      <th>Upload your Image:</th>
      <th><input type="file" class="form-control" name="fileToUpload" id="fileToUpload"></th>
    </tr>
    <tr>
      <th>Date of Birth :</th>
    <th>  <?php
echo '<select name="year">';
echo '<option></option>';
for($i = date('Y'); $i >= date('Y', strtotime('-100 years')); $i--){
echo "<option value='$i'>$i</option>";
}
echo '</select> /';
echo '<select name="month">';
echo '<option></option>';
for($i = 1; $i <= 12; $i++){
$i = str_pad($i, 2, 0, STR_PAD_LEFT);
echo "<option value='$i'>$i</option>";
}
echo '</select> /';
echo '<select name="day">';
echo '<option></option>';
for($i = 1; $i <= 31; $i++){
$i = str_pad($i, 2, 0, STR_PAD_LEFT);
echo "<option value='$i'>$i</option>";
}
echo '</select>';
?></th>
</tr>
      <th> <button type="submit" class="btn btn-success" style="margin-left:40px; margin-top:30px;">Save</button>
       <button type="submit" class="btn btn-success" style="margin-left:40px; margin-top:30px;">Reset</button></th>
</thead>
</table>
     </form>
     </div>
   </div>
 </div>
     <div>
      <footer>&copy;Developed by_______phppoint.com</footer>
    </div>
   </body>
 </html>
