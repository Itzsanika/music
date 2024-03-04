<?php
$con = mysqli_connect("localhost","root","","mydb");
 if(isset($_POST['sub'])){
  $name=$_POST['Fname'];
  $number=$_POST['Pnumber'];
  $mail=$_POST['Email'];
  $Uname=$_POST['Username'];
  $pass=$_POST['Password'];
  $Cpass=$_POST['Confirm_Password'];

  mysqli_query($con, "insert into users (Name,Number,Email,User_name,PASSWORD,Confirm_Password) values ('$name','$number','$mail','$Uname','$pass','$Cpass')");
 
 }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sign.css">
    

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
        <h1>Registration</h1>
        
        <form action="" method="POST">
          <div class="b1">
            <input type="text" name="Fname" placeholder="Enter Your Name">
            <input type="number" name="Pnumber" placeholder="Enter Your Number"> <br>
          </div>
          <div class="b2">
            <input type="mail" name="Email" placeholder="Enter Your Email"> 
            <input type="text" name="Username" placeholder="Enter Your Username"> 
          </div>
          <div class="b3">
            <input type="password" name="Password" placeholder="Enter Your Password"> 
            <input type="confirm password" name="Confirm_Password" placeholder=" Confirm your Password"> <br>
            
          </div>
          
          <h3>Gender</h3>
            <div class="box">
              <div class="g1"> 
                <label for="Male">Male</label>
                 <input type="radio" name="ab">
              </div>
            
              <div class="g2">
                <label for="Female">Female</label>
                <input type="radio" name="ab">
              </div>
            
              <div class="g3">
                <label for="Prefer Not To Say">Prefer Not To Say</label>
                <input type="radio" name="ab">
              </div>
            </div>
            <input  class="reg" type="submit" value="Register" name="sub">
        </form> 
          
        
        
        
        
        
      
      
      
    </div> 
  </div>
    
  </body>
  </html>