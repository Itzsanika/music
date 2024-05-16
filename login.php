<?php
$con = mysqli_connect('sql312.infinityfree.com','if0_36552763','PJJMxBUIJsa','if0_36552763_mydb');
if(isset($_POST['sub'])){
  $mail=$_POST['Email'];
  $pass=$_POST['Password'];
  
  $query = mysqli_query($con,"select * from users where Email='$mail' and PASSWORD='$pass'" );
  $Aquery = mysqli_query($con, "select * from admin where S_email='$mail' and S_pass= '$pass'");
  if($query || $Aquery){
    if($ab = mysqli_fetch_array($query)){
      session_start();
      $_SESSION['log']=$ab['Name'];
      $_SESSION['mil']=$ab['Email'];
      header("location:page.php");
      echo "<script> alert('users')</script>";

  }else if($jk= mysqli_fetch_array($Aquery)){
    $_SESSION['a_name']=$jk['S_name'];
    $_SESSION['a_mail']=$jk['S_email'];
    echo "<script> alert('admin')</script>";

  }
  
  else{
    echo "<script> alert('WRONG PASSWORD')</script>";
  }
}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="log.css">
</head>
<body>
  <div class="circle">
    <div class="bubbles">
      <span style="--i:11"></span>
      <span style="--i:12"></span>
      <span style="--i:25"></span>
      <span style="--i:13"></span>
      <span style="--i:23"></span>
      <span style="--i:18"></span>
      <span style="--i:20"></span>
      <span style="--i:15"></span>
      <span style="--i:21"></span>
      <span style="--i:19"></span>
      <span style="--i:22"></span>
      <span style="--i:14"></span>
      <span style="--i:28"></span>
      <span style="--i:16"></span>
      <span style="--i:26"></span>
      <span style="--i:17"></span>
      <span style="--i:27"></span>
      <span style="--i:24"></span>
      <span style="--i:10"></span>
      <span style="--i:29"></span>
      <span style="--i:11"></span>
      <span style="--i:12"></span>
      <span style="--i:25"></span>
      <span style="--i:13"></span>
      <span style="--i:23"></span>
      <span style="--i:18"></span>
      <span style="--i:20"></span>
      <span style="--i:15"></span>
      <span style="--i:21"></span>
      <span style="--i:19"></span>
      <span style="--i:22"></span>
      <span style="--i:14"></span>
      <span style="--i:28"></span>
      <span style="--i:16"></span>
      <span style="--i:26"></span>
      <span style="--i:17"></span>
      <span style="--i:27"></span>
      <span style="--i:24"></span>
      <span style="--i:10"></span>
      <span style="--i:29"></span>
    </div>

    <div class="container" >
      <h1>Login Forms</h1>
      
      <form action="" method="POST">
        <input type="text"  name="Email"placeholder="Email Address"> <br>
        <input type="text" name="Password" placeholder="Password"> <br>
        <a href="#"> Forgot Password ?</a> <br>
        <input  class="reg" type="submit" value="Login" name="sub">
         <br>
      </form> 
      
      <p>Not a member? <a href="sign.php">signup now</a></p>
      
    </div> 
  </div>
</body>
</html>