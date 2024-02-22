<?php
require 'config.php';
?>
<!DOCTYPE html>
<head>
    <title>welcome page</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            background-color: aliceblue;
        }
        ul{
            list-style-type: none;
            margin-top: 71px;
    margin-right: 0%;
    margin-bottom: 0px;
    margin-left: 1%;
            padding: 0%;
            width: 260px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 130%;
            background-color: #f1f1f1;
            position: fixed;
        }
        li a{
            display: block;
            color:#000;
            display: block;
            transition: 0.3s;
            padding: 16px 17px;
            text-decoration: none;
        }
        li a:hover{
            background-color: #555;
            color:white;
        }
        .img{
            width: 260px;
            margin-top: 7%;
    margin-right: 16px;
    margin-bottom: 16px;
    margin-left: 7%;
    overflow-x:hidden;
}
        .dropdown{
            position: relative;
            display: inline;
        }
        .dropdown-c{
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-c a{
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-c a:hover{
            background-color: #ddd;
        }
        .dropdown:hover .dropdown-c{
            display: block;
        }
        .dropdown:hover .btn{
            background-color: #555;
        }
        .img1{
            margin-left: 134%;
    margin-top: 4%;
    margin-right: 36px;
    margin-bottom: -36px;
        }
         .icon-bar{
    height: 49%;
    width: 102%;
    background-color: #555;
    overflow: auto;
    margin-top: -9px;
    margin-right: 0%;
    margin-bottom: 0px;
    margin-left: -1%;
    padding: 0%;

         }
         .icon-bar a{
            float: left;
  width: 20%;
  text-align: center;
  padding: 12px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 36px;
         }
         .icon-bar a:hover {
  background-color: #000;
}

.active {
  background-color: grey;
}
@media screen and (max-height: 450px) {
  .img {padding-top: 15px;}
  .img a {font-size: 18px;}
}
    </style>
</head>
<body>
<ul>
<div class="img" class="myimg">
    <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a> -->
<!-- <li><a href="first.php">Home</a></li> -->
<img src="/img/meraki.png">
    <li><a href="login1.php" >Dashboard</a></li>
    <div class="dropdown">
    <li><A class="btn">Manage client</A></li>
    <div class="dropdown-c">
    <a href="a">All Client</a>
    <a>Add Client</a>
    </div>
    </div>
    <div class="dropdown">
    <li><a>Manage Ad Agency</a></li>
    <div class="dropdown-c">
    <a href="all.php">All Agency</a>
    <a href="add.php">Add Agency</a>
    </div>
    </div>
</div>
</ul>
    <div class="icon-bar">
  <a class="active" href="first.php"><i class="fa fa-home">Home</i></a> 
  <a><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></a>
  <a><span style="font-size:30px;cursor:pointer" onclick="cNav()">&#9776;</span></a>

  <!-- <a href="#"><i class="fa fa-search"></i></a>  -->
  <a>Hi :<?php echo $_SESSION["username"];
  ?></a>
    </div>
  <script>
function openNav() {
  document.getElementById("img").style.width = "0px";
}

function cNav() {
  document.getElementById("img").style.width = "250px";
}
</script>

</body>
</html>