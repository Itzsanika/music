<?php
$con = mysqli_connect('sql312.infinityfree.com','if0_36552763','PJJMxBUIJsa','if0_36552763_mydb');
if(isset($_POST['del'])){
  $dele = $_POST['del'];
  $del_que = mysqli_query($con,"delete from users where id='$dele'");
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

  <h1>USER</h1>
<header>
    <nav>
      <a href="admin.php">home</a>
      <a href="usre.php">user data</a>
      <a href="muz.php">music data</a>
      <a href="">log out</a>
    </nav>
  </header>

  </form>
  <table  width="100%" border="1">
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>PASS</th>
      <th>USERNAME</th>
      <th>PHONE</th>
      <th>CONFIRM PASSWORD</th>
      <th>ACCESS</th>
    </tr>
    <?php
    $query = mysqli_query($con,"select * from users");
    while($var = mysqli_fetch_array($query)){

      ?>
    <tr>
      <td><?php echo $var["ID"];?></td>
      <td><?php echo $var["Name"];?></td>
      <td><?php echo $var["Email"];?></td>
      <td><?php echo $var["PASSWORD"];?></td>
      <td><?php echo $var["User_name"];?></td>
      <td><?php echo $var["Number"];?></td>
      <td><?php echo $var["Confirm_Password"];?></td>
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