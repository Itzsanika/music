<?php
include_once('cors.php');
$con = mysqli_connect('sql312.infinityfree.com','if0_36552763','PJJMxBUIJsa','if0_36552763_mydb');
$query = mysqli_query($con, "select*from songs");
$json_arry = array();
while($r = mysqli_fetch_assoc($query)){
    $json_arry[] = $r;
}
echo json_encode($json_arry);

?>