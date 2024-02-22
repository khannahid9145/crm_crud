<?php
require "config.php";
if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM admin WHERE id=$id");
    $rows = mysqli_fetch_assoc($result);
} else {
    header("Location: first.php");
}
?>
<!DOCTYPE html>
<head>
    <!-- <title>welcome page</title> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background-color: lightgrey;
        }
        .sidenav {
            position: fixed;
            margin-top: 57px;
            margin-right: 0%;
            margin-bottom: 0px;
            margin-left: 0%;
            height: 100%;
            width: 250px;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: black;
            overflow-x: hidden;
            /* transition: width 0.3s ease; */
            transition: 0.5s;
            padding-top: -10px;
            /* display: block; */
        }
        .sidenav a {
            padding: 20px 14px 12px 38px;
    text-decoration: none;
    font-size: 21px;
    color: white;
    display: block;
    transition: 0.3s;
        }

        .sidenav a:hover {
            color: black;
            background-color: grey;
        }

        .dropdown {
            position: relative;
            display: inline;
            cursor: pointer;
        }
.dropdown a {
    font-size: 20px;
}
        .dropdown-c {
            display: none;
            position: static;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-c a {
            color: black;
            padding: 6px 40px;
            text-decoration: none;
            display: block;
            font-size: 20px;
            /* text-align: center; */
        }

        .dropdown-c a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-c {
            display: block;
        }

        .dropdown:hover .btn {
            background-color: #555;
        }

        .sidenav1 {
            margin-left: 134%;
            margin-top: 4%;
            margin-right: 36px;
            margin-bottom: -36px;
        }

        .icon-bar {
            height: 67px;
            width: 101%;
            background-color: #555;
            overflow: hidden;
            margin-top: -23px;
            margin-right: 0%;
            margin-bottom: 0px;
            margin-left: -1%;
            padding: 0%;
            position: fixed;
        }

        .icon-bar a {
            float: left;
            width: 12%;
            text-align: center;
            padding: 12px 15px;
            transition: all 0.3s ease;
            color: white;
            font-size: 24px;
        }

        .icon-bar a:hover {
            background-color: #000;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 34px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
        .dropbtn:hover,
        .dropbtn:focus {
            background-color: #ccc;
            /* width: 20%; */
        }

        .dropdown-co {
            display: none;
    position: absolute;
    background-color: white;
    width: 183px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    /* padding: 0px 0px; */
    z-index: 1;
    margin-top: 44px;
    margin-right: 27px;
    margin-bottom: 6px;
    margin-left: 1704px;
        }
        .dropdown-co a {
            font-size: 14px;
    text-align: left;
    text-decoration: none;
    display: block;
    color: black;
    padding: 8px 19px;
    text-decoration: none;
    display: block;
    overflow: hidden;
    margin-top: 0;
    width: 154px;
        }
        .dropdown-co a:hover {
            background-color: #ccc;
        }      
        .dropbtn {
            width: 100%;
            /* background-color: grey; */
            font-size: 150%;
            margin-top: -57px;
            margin-right: -1%;
            margin-bottom: 6px;
            margin-left: 90%;
            cursor: pointer;
        }

        .dropdowns {
            margin-top: -16px;
            margin-right: 3%;
            margin-bottom: 0px;
            margin-left: -1%;
            padding: 0%;
            width: 20;
            /* position: static; */
        }

        .show {
    display: flex;
    width: 10%;
    flex-direction: column;
}
        .hide{
            display: none;
            /* width: 4%; */
        }
        #main{
            transition: margin-Left .3s;
            /* background-color: lightgrey; */
            padding: 70px;
            margin-left: 12%;
            overflow: hidden;
            /* margin: 10px; */
        }
        
    </style>
</head>

<body>
    <ul>
        <div class="sidenav" id="sidenav">
            <a><img src="../img/logo.png"></a>
            <a href="profile.php" style="color :#f1f1f1"><i class="app-menu__icon fa fa-dashboard"> Dashboard</i></a>
            <div class="dropdown">
                <A class="btn"><i class='fa fa-angle-down'> Manage client</i></A>
                <div class="dropdown-c">
                    <a href="showclient.php">All Client</a>
                    <a href="add_client.php">Add Client</a>
                </div>
            </div>
            <div class="dropdown">
                <a class="btn"><i class='fa fa-user'> Manage Ad Agency</i></a>
                <div class="dropdown-c">
                    <a href="showagency.php">All Agency</a>
                    <a href="add_agency.php">Add Agency</a>
                </div>
            </div>

    </ul>
    <div class="icon-bar">
        <a class="active" href="first.php"><i class="fa fa-home"> Home</i></a>
        <a><span style="font-size:30px;cursor:pointer" class="dropbtn2" onclick="openNav()">&#9776;</span></a>
        <!-- <a><span style="font-size:30px;cursor:pointer" onclick="cNav()">&#9776;</span></a> -->
        <div class="dropdowns">
            <a onclick="myfun()" class="dropbtn" ><i class="fa fa-user fa-1g"> Hi : <?php echo $_SESSION["username"];
                                                                                    ?></i></a>
</div>
</div>
            <!-- <a class="btn"></a> -->
            <div id="mydd" class="dropdown-co">
                <a class="dropdowni" href="logout.php">
                    <i class="fa fa-sign-out fa-lg"> logout</i>
                </a>
                <a class="dropdowni" id="forgot" href="forgot.php">
                    <i class="fa fa-key fa-lg"> change-password</i>
                </a>
            </div>
        

<script>
    function openNav(){
        var sidenav = document.getElementById("sidenav");
        sidenav.classList.toggle("hide");
       
        if (sidenav.classList.contains('hide')) {
            document.getElementById("main").style.marginLeft="0";
        }else{
            document.getElementById("main").style.marginLeft="12%";
        }
    }
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn2')) {
            var dropdowns = document.getElementsByClassName("sidenav");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('hide')) {
                    openDropdown.classList.remove('hide');
                    // document.getElementById("main").style.marginLeft="21%";
                }
            }
        }
    }
    function myfun() {
        document.getElementById("mydd").classList.toggle("show");
    }
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-co");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>
<div id="main">
