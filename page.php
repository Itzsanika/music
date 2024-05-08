<?php
    $con = mysqli_connect('localhost','root','','mydb');
    $query = mysqli_query($con, "select * from songs");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="page.css">
    <link href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
</head>

<body bgcolor="#2c2828">
    <header>
        <h1>SOUNDCAST</h1>

        </b>
        <nav>
            <a href="#" class="hm">Home</a>
            <a href="">Podcast</a>
            <a href="">Pages</a>
            <a href="about.php">About</a>
            <a href="cont.php">Contact</a>
            <a href="login.php">log out</a>

        </nav>
    </header>
    <main>
        <section id="home">
            <div class="container">
                <img src="C:/Users/sandh/Downloads/png-transparent-vinyl-platinum-disk-music-dj-drive-former-concert-red-black-thumbnail.png" id="img" alt="">
                

                <h1 class="H1">TO BE PLAY</h1>
                <div class="content">
                    
                    <h3 id="full_time">00:00</h3>
                
                    
                </div>
            </div>
            
            
            <div class="player">

                <label for="" id="timeline_duration">00:00</label>
                <div class="play">
                    <button class="pb"><i class='bx bx-play-circle' id="player_btn"></i></button>
                    <input type="range" name="" id="play" min="0" max="100" value="0">
                </div>
                <label for="" id="main_duration">00:00</label>
                <i class='bx bx-volume-full'></i>
                <input type="range" name="" id="volume" min="0" max="100">
            </div>
        </section>
        <section>
            <!-- <h1>ANOTHER EPISODES</h1>
<div class="epiisode">
    <div class="box">
      <img src="IM.jpg" alt="">
        <div class="box_content">
            <div class="box_item">
                <h3>December 21, 2015</h3>
                <h1>EPISODE #07 - PODCAST EMBED FROM SOUNDCLOUD</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ab animi sint veniam. Quibusdam provident, esse minima perspiciatis tenetur voluptas dicta iste, soluta, hic cupiditate modi expedita dolore similique libero.</p>
            </div> -->
            <!-- <div class="content">
                <h3>LIFESTYLE //</h3>
                <h3> 45 MIN //</h3>
                <i class ='bx bxs-download'></i>
                <h3>DOWNLOAD</h3>
            </div>
        </div>
    </div> -->
            <div class="cards">
                <?php
            while($r = mysqli_fetch_array($query)){
        ?>
                <div class="card-item">
                    <img src="uplode/<?php echo $r["Image_filename"]?>" alt="">
                    <div class="card_content">

                    
                        <h1>
                            <?php echo $r['Music_name'];?>
                        </h1>
                        <p>
                            <?php echo $r['Lyrics'];?>
                        </p>
                        <div class="content">
                            <h3>
                                <?php echo $r['Singer_name'];?> //
                            </h3>
                            
                            <!-- <i class='bx bx-play-circle'></i> -->
                            <h3>PLAY</h3>
                            <button class="pb1" value="<?php echo $exe[" Music_name"]?>">
                                <i class='bx bx-play-circle' id="<?php echo $exe[" id"]?>"></i></button>
                        </div>
                    </div>
                </div>
                <?php
            }
    ?>
            </div>
        </section>
        <section>
            <div class="about">
                <h1>NEVER MISS AN EPISODE</h1>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis qui ad unde quis, architecto
                    quae perspiciatis similique odio, earum sit in commodi nostrum quasi. Illum provident eaque
                    similique velit aperiam.</P>
                <div class="mail">
                    <form action="">
                        <input type="email" placeholder="Your Email" />
                        <button><i class="bx bxl-telegram"></i></button>

                    </form>
                </div>

            </div>
        </section>
    </main>
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
                <h6 class="for">
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
    <button id="music_player">Music</button>
    <div class="mini_player">
        
        <input type="range" name="" id="music" min="0" max="100" value="0">
        <div class="control">
            <i class='bx bx-skip-previous'></i>
            <!-- <i class='bx bx-play-circle' ></i> -->
            <button class="mb"><i class='bx bx-play-circle' id="music_btn"></i></button>
            
            
            <button class="mb2"><i class='bx bx-skip-next' id = "nxt"></i></button>
        </div>
    </div>
    <script src="main.js"></script>



</body>

</html>
























































































[<b>