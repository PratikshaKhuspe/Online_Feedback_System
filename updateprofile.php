<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <div class="container-fluid">
      <form class="" action="profiledb.php" method="POST">

     <div class="row">
      <div class="col-sm-9">
        <h3><center>Update Your Profie</center></h3><br>
         <table class="table">
           <tr>
           <th>Enter your Name</th>
           <th><input type="text" class="form-control" id="name" placeholder="Enter name" name="name" style="margin-left:70px; width:300px"></th>
           </tr>

         <tr>
           <th>Enter Your Mobile</th>
           <th><input type="number" class="form-control" name="MNum" required id="num" placeholder="enter mobile number" style="margin-left:70px; width:300px"></th>
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
       <th>Select Your Gender</th>
       <th><input type="radio" name="Gender" value="Male"><span id="male">&nbsp; Male</span>&nbsp;&nbsp;
           <input type="radio" name="Gender" value="Female"><span id="male">&nbsp; Female</span>&nbsp;&nbsp;</th>
    </tr>
       <tr>
         <th>Choose your Hobbies</th>
         <th><input type="checkbox" name="remember" value="Reading"> Reading&nbsp;&nbsp;
         <input type="checkbox" name="remember" value="Singing"> Singing&nbsp;&nbsp;
         <input type="checkbox" name="remember" value="Playing"> Playing</th>
      </tr>
      <tr>
        <th>Upload your Image:</th>
        <th><input type="file" class="form-control" name="fileToUpload" id="fileToUpload"></th>
      </tr>
      <tr>
        <th>Enter Your DOB</th>
        <th>
          <?php
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
    ?>
        </th>
     </tr>
      </table>
         <button type="submit" class="btn btn-primary" name="submit">Update Profile</button>
         <button type="reset" class="btn btn-primary" name="res">Reset</button>

      </div>
    </div>
     </form>
    </div>
    <br>

  </body>
</html>
