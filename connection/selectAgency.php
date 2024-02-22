<?php
require "../inc/config.php";
$id=$_GET['id'];
// echo $id;
$sql1= "SELECT * FROM agency WHERE id=$id";
$result=mysqli_query($conn,$sql1);
if (mysqli_num_rows($result)>0) {
    // $sn=1;
    while($rows=mysqli_fetch_array($result)){
// $name=$rows['name'];
// $uname=$rows['uname'];
// $pass=$rows['pass'];
// $agname=$rows['agname'];
$response=$rows;
}
echo json_encode($response);
}
else{
echo "data not found";
}
?>