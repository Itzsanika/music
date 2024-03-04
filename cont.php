<?php
$con = mysqli_connect("localhost","root","","mydb");
if(isset($_POST['sub'])){
 $name=$_POST['Name'];
  $mail=$_POST['Email'];
  $subject=$_POST['Subject'];
  $msg=$_POST['Message'];
 

 $qr = mysqli_query($con,"insert into contact (Name,Email,Subject,Message) values ('$name','$mail','$subject','$msg')");

 if($qr){
    echo "<script>alert('submit')</script>";
}else{
     echo "<script>alert('not submit')</script>";

 }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="page.css">
    <link  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
</head>
<body bgcolor="#2c2828">

    <header>
        <h1>SOUNDCAST</h1>
        <nav>
            <a href="page.php">Home</a>
            <a href="">Podcast</a>
            <a href="">Pages</a>
            <a href="">About</a>
            <a href="">Contact</a>
            <a href="login.php">log out</a>
    
        </nav>
    </header>    
    <section class="Contact">
        <div class="form_container">
            <div class="form">
                <form action="" method="POST">
                    <div class="first">
                        <input type="text" placeholder="Name" name="Name">
                        <input type="text" placeholder="Email" name="Email">
                    </div>
                    <input type="text" placeholder="subject" name="Subject">
                    <textarea name="Message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                    <input  class="reg" type="submit" name="sub">
                    
                </form>
            </div>
            <div class="contact_container">
                <h1>INFO</h1>
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
                <h2>8 8000 854 854</h2>
                <h4>sandhya07@gmail.com</h4>
                <h5>xyz, yyzzxx, yyy,zzzzchr

                </h5>
            </div>
        </div>
    </section>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    