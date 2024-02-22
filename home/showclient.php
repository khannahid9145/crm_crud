<?php
require "../inc/config.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
$sql = " SELECT * FROM addclient ";
$client_list = mysqli_query($conn,$sql);
// $sql1= "SELECT * FROM addclient WHERE id=$id";
// $result=mysqli_query($conn,$sql1);
// if (mysqli_num_rows($result)>0) {
//     // $sn=1;
//     while($rows1=mysqli_fetch_array($result)){
// $name=$rows1['name'];
// $uname=$rows1['username'];
// $pass=$rows1['pass'];
// $cname=$rows1['company'];
// $web=$rows1['website'];
// $addr=$rows1['address'];
// }
// }
// else{
// echo "data not found";
// }
include("../inc/header.php");?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<style>
    body{
        counter-reset: Serial;
        background-color: lightgrey;
    }
table {
    margin: 0px 0px 0px 50px;
    border-collapse: collapse;
    width: 90%;
            /* margin: 0 auto; */
            font-size: large;
            /* border: 1px solid black; */
        }
 
        p {
            background-color: white;
    margin: 0px 0px 20px 50px;
    text-align: left;
    color: black;
    font-size: xx-large;
    font-family: 'Gill Sans', 'Gill Sans MT', ' Calibri', 'Trebuchet MS', 'sans-serif';
}
        
        tr:nth-child(even) {background-color: lightgrey;}
        td {
            border: 1px solid black;
        }
        tr td:first-child::before{
    counter-increment: Serial;
    content: counter(Serial);
 }
 th{
    color: white;
    background-color: lightslategray;
 }
 /* h1{
        margin: -16px 0px 0px -1px;
        text-align: left;
        width: 100%;
    background-color: white;
    font-family: 'Brush Script MT', cursive;
    height: 50px;
 }
        th, */
        td {
            padding: 8px;
            text-align: center;
            border: none;
        }
        section{
                overflow-y: auto;
    height: 700px;
    width: 93%;
    background-color: white;
    margin: -31px 0px 0px 33px;
    box-shadow: 5px 10px 55px #888888;
        }
        h1 {
            padding:  10px 10px;
            width: 100%;
            height: 20%;
            margin: 0px 0px 55px 56px;
        }

        h2 {
            padding:  10px 10px;
            width: 100%;
            height: 20%;
            text-align: center;
            margin: 0px 0px 32px -27px;
            font-size: 26px;
        }
        td a{
            margin: 0px 0px 0 58px;
        }
        .btn-danger{
            cursor: pointer;
color: red;
        }
        .btn-success{
            cursor: pointer;
color: blue;
        }
.modal{
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 30px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    /* width: 19%;
    height: 80%; */
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
 
    /* margin: 58px 0px 0 42%; */
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  
}

    .model-content{
        padding: 20px 10px;
        /* margin: auto; */
        margin: 58px auto;
        background-color: white;
        width: 511px;
    height: 622px;
    border: 2px solid black;
     text-align: left;
    }
    input[type=TEXT]{
        border: 2px solid #ccc;
        width: 80%;
        padding: 6px ;
        border-radius: 8px;
        /* font-size: 21px; */
    }
    .btn2{
        margin-top: 21px;
    margin-right: 16px;
    margin-bottom: 16px;
    margin-left: 35px;
            width: 250px;
            padding: 12px 45px;
            text-align: center;
            border-radius: 10px;
            color:white;
            background-color: black;
            font-size: 15px;
            cursor:pointer;

    }
    .close{
        margin: -88px 11px 0px 0px;
        color: black;
        float: right;
        font-size: 34px;
        font-weight: bold;
    }
    .close:hover,
    .close:focus{
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>
<h1>
    <A><i class="fa fa-briefcase"> All Client</i></A></h1><br/>
<section>
    <p> All Client</p><br/>
    <br/>
    <table>
        <tr>
            <th>Sr.No</th>
            <th>name</th>
            <th>username</th>
            <th>company</th>
            <th>website</th>
            <th>action</th>
        </tr>
        <?php
        if(mysqli_num_rows($client_list)>0){
            $sn=1;
        while($rows=mysqli_fetch_assoc($client_list))
        {
            // print_r($rows);
        ?>
        <tr>
        <td></td>
            <td><?php echo $rows['name'];?></td>
            <td><?php echo $rows['username'];?></td>
            <td><?php echo $rows['company'];?></td>
            <td><?php echo $rows['website'];?></td>
            <td> 
                <a class="btn btn-success btn-sm" title="edit" onclick="editfun1(<?= $rows['id'];?>)"><i class="fa fa-pencil"></i></a>
                <a class="btn btn-danger btn-sm" title="delete" onclick="myfun2(<?= $rows['id'];?>)"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php
        $sn++;
        }}else{
        ?>
        <tr>
            <td colspan="8">no data found</td>
        </tr>
        <?php } ?>
    </table>
</section>
<div id="mymodal"  class="modal">
    <div class="model-content">
        <div class="model-header">
        <h2><i class="fa fa-edit">Edit Client Details</i></h2>
        <span class="close">&times;</span></h1>
        </div>
    <from name="add_agency" method="post">
        <input type="hidden" id="userid" name="userid" value="">
        Name : <br/><input type="text" name="fname" id="fname" value= "" ><br/>
        <span class="error" id="name_err"> </span><br />
        USERNAME :<br/><input type="text" name="uname" id="uname" value=""><br/>
        <span class="error" id="u_err"> </span><br />
        Password :<br/><input type="text" name="pass" id="pass" value=" " ><br/>
        <span class="error" id="pass_err"> </span><br />
        company name :<br/><input type="text" name="cname" id="cname" value="" ><br/>
        <span class="error" id="c_err"> </span><br />
        Website :<br/> <input type="text" name="web" id="web" value="" ><br/>
        <span class="error" id="w_err"> </span><br />
        Address : <br/><input type="text" name="addr" id="addr" value= ""><br/>
        <span class="error" id="addr_err"> </span><br />
        <button type="button" id="submitbtn2" class="btn2" >update</button><br />
        <span class="error" id="msg"></span><br />
<span class="error" id="msg"></span><br />
</from>
    </div>
</div>
<script> 
var modal= document.getElementById("mymodal");
var span = document.getElementsByClassName("close")[0];
function editfun1(id){
    document.getElementById("userid").value= id;
    modal.style.display="block";
    $.ajax({
        url: "http://localhost/login/selects.php?id="+id,
        method: "POST",
        success: function (data) {
            var res = JSON.parse(data);
            console.log(res.name);
            $("#fname").val(res.name);
            document.getElementById("uname").value = res.username;
            document.getElementById("pass").value = res.pass;
            document.getElementById("cname").value = res.company;
            document.getElementById("web").value = res.website;
            document.getElementById("addr").value = res.address;
            // window.location.replace('showclient.php');
        
        },
    });
}
function myfun2(id){
    document.getElementById("userid").value= id;
    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
        url: "http://localhost/login/delete.php?id="+id,
        method: "POST",

        success: function (res) {
      if(res=="deleted successfully"){
        Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    ),
    setTimeout(function() {
        window.location.replace('showclient.php');
  }, 2000);
      
    
    
    }
      else{
      $("#msg").html(res);
      }
    },
    });
  }
})
}
span.onclick=function(){
    modal.style.display="none";
}
window.onclick=function(event){
    if(event.target==modal){
        modal.style.display="block";
    }
}

// </script>
<!-- <script src="uclient.js"></script> -->
<script src="/controller/js/uclient.js"></script>
<?php include "../inc/footer.php";?>