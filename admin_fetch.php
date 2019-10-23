<?php


  $link=mysqli_connect("localhost","teja","tejas123");
  $database=mysqli_select_db($link,"FeedBackSystem");

  $UserEmail=$_POST['user'];
  $Password=$_POST['password'];
  $query ="select * from Admin1 where User='$UserEmail' and Pass='$Password'";
  $result =mysqli_query($link,$query);

  if(mysqli_num_rows($result)==1){
    session_start();
    $_SESSION["AdminUser"]=$UserEmail;
    echo "<script>alert('Login successfully');
    window.location.href='admin_update.php';
    </script>";
  }
  else{
    echo "<script>
    alert('Email and Password is INVALID,If your not registered please register first!');
    window.location.href='admin_login.php';
    </script>";
  }
session_write_close();
?>
