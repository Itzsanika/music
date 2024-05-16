<?php
  $con = mysqli_connect('sql312.infinityfree.com','if0_36552763','PJJMxBUIJsa','if0_36552763_mydb');
  if(isset($_POST['del'])){
    $dele = $_POST['del'];
    $del_que = mysqli_query($con,"delete from songs where id='$dele'");
  }

  if(isset($_POST['sub'])){
    $musicname = $_POST['Musicname'];
    $lyrics = $_POST['Lyrics'];
    $singername = $_POST['Singername'];
  
  if(isset($_FILES['file'])){
    $imgname = $_FILES['file']['name'];
    $imgtype = $_FILES['file']['type'];
    $tname = $_FILES['file']['tmp_name'];

    move_uploaded_file($tname, 'uplode/' .$imgname);
  }
  if(isset($_FILES['folfer'])){
    $songname = $_FILES['folfer']['name'];
    $songtype = $_FILES['folfer']['type'];
    $stname = $_FILES['folfer']['tmp_name'];

    move_uploaded_file($stname, 'uplode/' .$songname);

  }
  $query = mysqli_query($con, "insert into songs(Music_name,Lyrics,Singer_name,Image_filename,Audio_filename,Audio_filetype) values ('$musicname','$lyrics','$singername','$imgname','$songname','$songtype')");

  if($query){
    echo "<script>alert('Success')</script>";
  }else{
    echo "<script>alert('worng')</script>";
  }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">

</head>
<body>
<h1>MUSIC</h1>
<header>
    <nav>
      <a href="admin.php">home</a>
      <a href="user.php">user data</a>
      <a href="muz.php">music data</a>
      <a href="">log out</a>
    </nav>
  </header>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="text" name="Musicname" placeholder="Music_name" required>
    <input type="text" name="Lyrics" placeholder="Lyrics" required>
    <input type="text" name="Singername" placeholder="Singer_name" required>
    <input type="file" name="file" accept="image/jpeg, image/png" required>
    <input type="file" name="folfer" accept=".mp3, audio/*" required>

    <input type="submit" value="login" class="ab" name="sub"/>

  </form>
  <table  width="100%" border="1">
<tr>
    <th>Id</th>
    <th>Musicname</th>
    <th>Lyrics</th>
    <th>Singername</th>
    <th>Imagefilename</th>
    <th>Imagefiletype</th>
    <th>Audiofilename</th>
    <th>Audiofiletype</th>
    <th>Access</th>
</tr>
<?php
    $query = mysqli_query($con,"select * from songs");
    while($var = mysqli_fetch_array($query)){

      ?>
    <tr>
      <td><?php echo $var["ID"];?></td>
      <td><?php echo $var["Music_name"];?></td>
      <td><?php echo $var["Lyrics"];?></td>
      <td><?php echo $var["Singer_name"];?></td>
      <td><?php echo $var["Image_filename"];?></td>
      <td><?php echo $var["Audio_filename"];?></td>
      <td><?php echo $var["Audio_filetype"];?></td>
      <td>
        <form action="" method="POST">
  
          <button value="<?php echo $var["ID"];?>" name="del" style="color:#000">Delete</button>
        </form>
      </td>
    </tr>
<?php
    }
?>
</table>
</body>
</html>