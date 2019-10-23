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
    </head>
    <body>
  <div class="container">
<h3 class="text-center">Add Faculty</h3>
<div class="row">
<div class="col-lg-12">
<div class="col-sm-2"></div></button></th>
</tr>
</thead>
</form>

<div class="col-sm-8">
<form action="ad_addfacdb.php" method="POST">
  <table class="table">
     <thead>
       <tr>
         <th>Name:</th>
         <th><input type="text" name="id" placeholder="enter your id"></th>
        </tr>
        <tr>

       <tr>
         <th>Designation</th>
         <th><input type="text" name="name" placeholder="enter your name"></th>
        </tr>
        <tr>
          <th>Email</th>
          <th><input type="email" name="email" placeholder="enter your email"></th>
         </tr>
         <tr>
         <th>Password</th>
         <th><input type="password" name="pass" placeholder="enter your password"></th>
        </tr>
        <tr>
        <th>MOBILE NO</th>
        <th><input type="text" name="mobile" placeholder="enter your mobile"></th>
       </tr>
       <tr>
         <th>Programm</th>
         <th>
           <select name="programm">
                 <option>MCA</option>
                 <option>BCA</option>
                 <option>MSC</option>
                 <option>MBA</option>
                 <option>B.COM</option>
                 <option>M.TECH</option>
           </th></tr>
           <th>Semester</th>
           <th>
             <select name="semester">
                   <option>sem 1</option>
                   <option>sem 2</option>
                   <option>sem 3</option>
                   <option>sem 4</option>
                   <option>sem 5</option>
                   <option>sem 6</option>
            </select>
             </th></tr>

             <tr>
               <th>GENDER</th>
          <th>   <p><input type="radio" name="gender" value="male"> Male
             <input type="radio" name="gender" value="female"> Female<br></p></th></tr>



<tr>
<th><button class="btn btn-info">Add New Faculty</button></th>
</tr>

     </thead>
</form>
</div>
<div class="col-sm-2"></div>

</div>
</div>

  </div>


</body>
    </html>
