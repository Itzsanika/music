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
            <a href="about.php">About</a>
            <a href="">Contact</a>
            <a href="login.php">log out</a>
    
        </nav>
    </header> 
    <!-- <main>
<section id="home" style="background: radial-gradient(blue, rgba(0,0,0,0.2)),url('red_music_pulse_with_black_background_hd_red_aesthetic-1920x1080.jpg');">
</section>
</main>    -->
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
    <footer>
<div class="main">
    <div class="ab">
        <h1>SITEMAP</h1>
        <ul>
            <a href="">HOME</a>
            <a href="">PODCAST</a>
            <a href="">PAGES</a>
            <a href="">ABOUT US</a>
            <a href="">CONTACTS</a>
        </ul>
    </div>
    <div class="div1">
        <h1 class="col1">
            LATEST EPISODE
        </h1>
        <br> <br>
        <h5>
            #08-OUR VACATION HAVE <BR>BEEN SO AMAZING</BR>
        </h5>
        <h6>
            DECEMBER 22,2015
        </h6> <br>

        <h5>
            #07- PODCAST EMBED FROM <BR>SOUNDCLOUD</BR>
        </h5>
        <h6>
            DECEMBER 21,2015
        </h6>

    </div>
    <div class="div2">
        <h1 class="col2">
            WHO IS HELPING
        </h1>
        <br> <br>
        <h5>
            @REIDARKING</BR>

        </h5>
        <h6 class="for">
            Donation-U$ 10
        </h6> <br>

        <h5>
            @REIDARKING</BR>


        
        </h5>
        <h6 class="for"> Donation-U$ 5

        </h6> <br>

        <h5>
            @REIDARKING</BR>

        </h5>
        <h6  class="for">
            Donation-U$ 50
        </h6>
        
    </div>
    <div class="div3">
        <h1 class="col4">
            WE ARE SOCIAL
        </h1> <br>
        <a href="http://www.facebook.com/yourprofile" target="_blank">
            <i class='bx bxl-facebook go'></i>
        </a>
        <a href="http://www.twitter.com/yourprofile" target="_blank">
            <i class='bx bxl-twitter go'></i>
        </a>
        <a href="http://www.instagram.com/account/login/">
            <i class='bx bxl-instagram-alt go'></i>
        </a>
        <a href="http://account.google.com" target="_blank">
            <i class='bx bxl-google-plus go'></i> <br>
        </a>
        <a href="#">
            <i class='bx bxs-cloud go'></i>
        </a>

        <a href="#">
            <i class='bx bxl-pinterest go'></i>
        </a>
        <a href="#">
            <i class='bx bxl-youtube go '></i>
        </a>
        <a href="http://account.spotify.com/authorize">

            <i class='bx bxl-spotify go '></i>
        </a>
    </div>
</div>
        

</footer>

    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    