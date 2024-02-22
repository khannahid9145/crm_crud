<?php
require "../inc/config.php";
$sql = " SELECT * FROM agency";
$agency_list = mysqli_query($conn, $sql);

// print_r($result);

// if (!$result) {
//     trigger_error(mysqli_error($conn), E_USER_ERROR);
// }
// $conn->close();
?>
<?php include("../inc/header.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<style>
    body {
        background-color: lightgrey;
        counter-reset: Serial;
    }

    table {
        border-collapse: collapse;
        width: 90%;
        margin: 0 auto;
        font-size: large;
        margin: 0px 0px 0px 50px;
        /* border: 1px solid black; */
    }

    p {
        margin: 0px 0px 0px 50px;
        text-align: left;
        color: black;
        font-size: xx-large;
        font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    td {
        border-bottom: #006600;
        /* border: 1px solid black; */
    }

    tr td:first-child::before {
        counter-increment: Serial;
        content: counter(Serial);
    }

    th {
        color: white;
        background-color: lightslategray;
    }

    th,
    td {
        padding: 8px;
        border-bottom: 1px solid #ddd;
        text-align: center;
    }

    section {
        overflow-y: auto;
        height: 700px;
        width: 93%;
        background-color: white;
        margin: -31px 0px 0px 33px;
        box-shadow: 5px 10px 55px #888888;
    }

    td a {
        /* color: black; */
        /* background-color: white; */
        width: 100%;
        height: 20%;
        margin: 42px 0px 55px 33px;
    }

     h1 {
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
    /* h1 {
        margin: -16px 0px 0px -1px;
        text-align: left;
        width: 100%;
        background-color: white;
        font-family: 'Brush Script MT', cursive;
        height: 50px;
    }  */

    .btn-danger {
        color: red;
        cursor: pointer;
    }

    .btn-success {
        color: blue;
        cursor: pointer;
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
    width: 454px;
    height: 490px;
    border: 2px solid black;
    text-align: left;
    }
    input[type=TEXT]{
        border: 2px solid #ccc;
    width: 87%;
    padding: 8px;
    border-radius: 8px;
    align-items: center;
    /* font-size: 21px;
        /* font-size: 21px; */
    }
    .btn2{
        margin-top: 21px;
    margin-right: 16px;
    margin-bottom: 16px;
    margin-left: 106px;
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
        /* margin:  -93px 106px 0px ; */
        margin: -95px 0px 0px 0px;
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
<h1><a><i class="fa fa-users">
            All Agency</i></a></h1><br />
<section>
    <p>All Agency</p><br />
    <br />
    <table>
        <tr>
            <th>id</th>

            <th>name</th>
            <th>username</th>
            <th>Agency company</th>
            <th>action</th>
        </tr>
        <?php
        if (mysqli_num_rows($agency_list) > 0) {
            $sn = 1;
            while ($rows = mysqli_fetch_assoc($agency_list)) {
        ?>
                <tr>
                    <td></td>
                    <td><?php echo $rows['name']; ?></td>
                    <td><?php echo $rows['uname']; ?></td>
                    <td><?php echo $rows['agname']; ?></td>
                    <td>
                        <a class="btn btn-success btn-sm" title="edit" onclick="editfun2(<?= $rows['id']; ?>)"><i class=" fa fa-pencil "></i></a>
                        <a class="btn btn-danger btn-sm" title="delete" onclick="myfun2(<?= $rows['id']; ?>)"><i class=" fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php
                $sn++;
            }
        } else {
            ?>
            <tr>
                <td colspan="8">no data found</td>
            </tr>
        <?php } ?>
    </table>
</section>
<div id="mymodal" class="modal">
    <div class="model-content">
        <div class="modal-header">
            <h2><i class="fa fa-edit">Update Agency Details</i></h2>
            <span class="close">&times;</span></h1>
        </div>
        <from name="add_agency" method="post">
            <input type="hidden" id="userid" name="userid" value=<?php echo $_GET['id']; ?>>
            Full Name : <br/><input type="text" name="fname" id="fname" value=""><br />
            <span class="error" id="name_err"> </span><br />

            Username :<br/><input type="text" name="uname" id="uname" value=""><br />
            <span class="error" id="u_err"> </span><br />

            Password :<br/><input type="text" name="pass" id="pass" value=""><br />
            <span class="error" id="pass_err"> </span><br />

            Agency Name :<br/><input type="text" name="aname" id="aname" value=""><br />
            <span class="error" id="aname_err"> </span><br />

            <button type="button" id="submitbtn2" class="btn2">update</button><br />
            <!-- <span class="error" id="msg1"></span><br /><br/> -->
            <span class="error" id="msg"></span><br /><br />
        </from>
    </div>
</div>
<script>
var modal = document.getElementById("mymodal");
var span= document.getElementsByClassName("close")[0];

function editfun2(id){
document.getElementById("userid").value=id;
modal.style.display="block";

$.ajax({
        url: "http://localhost/login/selectAgency.php?id="+id,
        method: "POST",
        success: function (data) {
            var res = JSON.parse(data);
            // console.log(res.name);
            $("#fname").val(res.name);
            document.getElementById("uname").value = res.uname;
            document.getElementById("pass").value = res.pass;
            document.getElementById("aname").value = res.agname;
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
        url: "http://localhost/login/controller/adelete.php?id="+id,
        method: "POST",
        success: function (res) {
      if(res=="deleted successfully"){
        Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    ),
    setTimeout(function() {
        window.location.replace('showagency.php');
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
</script>

<!-- <script src="editagency.js"></script> -->
<script src="../controller/js/editagency.js"></script>
<?php include("../inc/footer.php"); ?>