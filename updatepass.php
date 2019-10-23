
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>

   </head>
   <body>
     <div class="container-fluid">
       <form class="" action="change.php" method="post">

     	<div class="row">
       <div class="col-sm-9">
         <h3>Update Password.</h3><br>
          <table class="table">
            <tr>
            <td>Enter old password</td>
              <td><input type="password" class="form-control" placeholder="Enter password" name="pwd" style="margin-left:40px; width:300px"></td>
            </tr>
              <tr>
            <td>Enter Your new password</td>
            <td><input type="password" class="form-control"  placeholder="Enter password" name="pwd1" style="margin-left:40px; width:300px"></td>
          </tr>
          <tr>
            <td>Enter Your confirm password</td>
           <td><input type="password" class="form-control" placeholder="Enter password" name="pwd2" style="margin-left:40px; width:300px"></td>
         </tr>
       </table>
          <button type="submit" class="btn btn-primary" name="submit">Update Password</button>
          <button type="reset" class="btn btn-primary" name="res">Reset</button>

       </div>
     </div>
      </form>
     </div>
     <br>

   </body>
 </html>
