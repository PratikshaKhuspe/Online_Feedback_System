<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
      <div class="col-sm-10">
<h3 class="text-center"><u>Student Feedback Form</u></h3>
<p><b>Please give your answer about the following question by circling the given grade on the scale:<b></p>
<button class="btn btn-success">Strongly agree 5</button>
<button class="btn btn-danger">Agree 4</button>
<button class="btn btn-info">Neutral 3</button>
<button class="btn btn-basic">Disagree 2</button>
<button class="btn btn-danger">Strongly Disagree 1</button>
<table class="table table-bordered" style="margin-top:50px">
  <fieldset>
<h3>1-Course Material</h3>
<form class="" action="ad_feeddb.php" method="post">
<table class="table table-bordered">
   <tr>
        <th>Select Faculty</th>
        <td>
          <select name="faculty" class="form-control">
            <?php
            $con=mysqli_connect("localhost","teja","tejas123","FeedBackSystem");
            $sql=mysqli_query($con,"select * from Faculty");
            while($r=mysqli_fetch_array($sql)){
              echo "<option value='".$r['Pass']."'>".$r['Name']."</option>";
            }
             ?>
          </select>
        </td>
      </tr>
<tr>
<td><b>1:</b> Teacher provided the course outline having weekly content plan with list of  required text book:</td>
<td>

  <input type="radio" name="q1" value="5" required> 5
  <input type="radio" name="q1" value="4">4
  <input type="radio" name="q1" value="3"> 3
<input type="radio" name=" q1" value="2">2
<input type="radio" name="q1" value="1">1</td>
</tr>

<tr>
<td><b>2:</b>Course objectives,learning outcomes and grading criteria are clear to me:</td>
<td><input type="radio" name="q2" value="5" required>5
  <input type="radio" name="q2" value="4">4
  <input type="radio" name="q2" value="3">3
<input type="radio" name=" q2" value="2">2
<input type="radio" name="q2" value="1">1</td>
</tr>

<tr>
<td>
<b>3:</b>Course integrates throretical course concepts with the real world examples:</td>
<td>
<input type="radio" name="q3" value="5" required> 5
  <input type="radio" name="q3" value="4">4
  <input type="radio" name="q3" value="3"> 3
<input type="radio" name="q3" value="2">2
<input type="radio" name="q3" value="1">1</td>
</tr>
</table>

<h3>2-Class Teaching</h3>
 <table  class="table table-bordered" >
<Td><b>4:</b> Teacher is punctual,arrives on time and leaves on time:</td>
<td> <input type="radio" name="q4" value="5" required> 5
  <input type="radio" name="q4" value="4">4
  <input type="radio" name="q4" value="3"> 3
<input type="radio" name="q4" value="2">2
<input type="radio" name="q4" value="1">1
</td>

<tr>
<td>
<b>5:</b> Teacher is good at stimulating the interest in the course content:</td>
<td>
<input type="radio" name="q5" value="5" required> 5
<input type="radio" name="q5" value="4">4
  <input type="radio" name="q5" value="3"> 3
<input type="radio" name="q5" value="2">2
<input type="radio" name="q5" value="1">1</td>
</tr>
<tr>
<td><b>6:</b> Teacher is good at explaining the subject matter:</td>
<td>
 <input type="radio" name="q6" value="5" required> 5
  <input type="radio" name="q6" value="4">4
  <input type="radio" name="q6" value="3"> 3
<input type="radio" name=" q6" value="2">2
<input type="radio" name="q6" value="1">1</td>
</tr>

<tr><td>
<b>7:</b> Teacher's presentation was clear,loud ad easy to understand:</td>
<td> <input type="radio" name="q7" value="5" required> 5
  <input type="radio" name="q7" value="4">4
  <input type="radio" name="q7" value="3"> 3
<input type="radio" name="q7" value="2">2
<input type="radio" name="q7" value="1">1</td>
<tr>
<td>
<b>8:</b> Teacher is good at using innovative teaching methods/ways:</td><td>
<input type="radio" name="q8" value="5" required> 5
  <input type="radio" name="q8" value="4">4
  <input type="radio" name="q8" value="3">3
<input type="radio" name="q8" value="2">2
<input type="radio" name="q8" value="1">1</td>
</tr>
<tr>
<td>
<b>9:</b> Teacher is available and helpful during counseling hours:</td>
<td><input type="radio" name="q9" value="5" required>5
  <input type="radio" name="q9" value="4">4
  <input type="radio" name="q9" value="3"> 3
<input type="radio" name="q9" value="2">2
<input type="radio" name="q9" value="1">1</td>
</tr>
<tr>
<td>
<b>10:</b> Teacher has competed the whole course as per course outline:</td>
<td>
 <input type="radio" name="q10" value="5" required> 5
  <input type="radio" name="q10" value="4">4
  <input type="radio" name="q10" value="3"> 3
<input type="radio" name="q10" value="2">2
<input type="radio" name="q10" value="1">1</td>
</tr>
</table>

<h3>3-Class Assessment</h3>
 <table  class="table table-bordered" >
<tr>
<td><b>11:</b>Teacher was always fair and impartial:</td>
<td>
 <input type="radio" name="q11" value="5" required> 5
  <input type="radio" name="q11" value="4">4
  <input type="radio" name="q11" value="3"> 3
<input type="radio" name="q11" value="2">2
<input type="radio" name="q11" value="1">1</td>
</tr>
<tr>
<td><b>12:</b>Assessments conducted are clearly connected to maximize learining objectives:</td>
<Td>
 <input type="radio" name="q12" value="5" required> 5
  <input type="radio" name="q12" value="4">4
  <input type="radio" name="q12" value="3"> 3
<input type="radio" name="q12" value="2">2
<input type="radio" name="q12" value="1">1</td>
</tr>
</table>

<b>13:</b>What I liked about the course:<br><br>
<center>
<textarea name="quest13" rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;">

</textarea></center><br><br>
<b>14:</b>Why I disliked about the course:<br><br>
<center>
<textarea name="quest14" rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;">

</textarea></center>

<p align="center"><button type="submit" style="font-size:7pt;color:white;background-color:brown;border:2px solid #336600;padding:7px" name="sub">Submitt</button></p>


</form>
</fieldset>


</div>
      </div>

</div>
</body>
</html>
