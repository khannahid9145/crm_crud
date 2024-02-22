<?php
require "../inc/config.php";
$id=$_GET['id'];
$sql1= "SELECT * FROM addclient WHERE id=$id";
// echo $sql1;
$result=mysqli_query($conn,$sql1);
if (mysqli_num_rows($result)>0) {
    // $sn=1;
    while($rows1=mysqli_fetch_assoc($result)){
// $name=$rows1['name'];
// $uname=$rows1['username'];
// $pass=$rows1['pass'];
// $cname=$rows1['company'];
// $web=$rows1['website'];
// $addr=$rows1['address'];
$response=$rows1;
}
echo json_encode($response);
}
else{
echo "data not found";
}
?>