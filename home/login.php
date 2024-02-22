<?php
require 'inc/config.php';

?>
<!DOCTYPE html>
<head>
    <title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
.container{
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-style: oblique;
    font-size: 150%;
    /* background-color: wheat; */
    /* border: 3px solid #ccc; */
}
.img{
    margin-top: 4%;
    margin-right: 16px;
    margin-bottom: 16px;
    /* margin-left: 90%; */
}
.icn{
height: 30px;
margin-top: -4%;
    margin-right: 16px;
    margin-bottom: 9px;
    margin-left: 13%;
}
.con2{
    cursor: pointer;
    margin-top: -2%;
    margin-right: 16px;
    margin-bottom: 16px;
    margin-left: 90%;
}
.session{
    margin-top: -3%;
    margin-right: 16px;
    margin-bottom: 16px;
    margin-left: 94%;
}
.dash{
    margin-top: -2%;
    margin-right: 16px;
    margin-bottom: 16px;
    margin-left: 7%;
}
.imgg{
    height: 30px;
margin-top: 4%;
    margin-right: 4px;
    margin-bottom: -7px;
    margin-left: -7%;
}
.manage{
    margin-top: 3%;
    margin-right: 16px;
    margin-bottom: 16px;
    margin-left: 1%;
}
.manage-agency{
    margin-top: 3%;
    margin-right: 16px;
    margin-bottom: 16px;
    margin-left: 1%;
}
    </style>
</head>
<body>
    <form name="mform">
<div class="container">
    <div class="con-1">
        
<a style="text-decoration: none" href="login.php">Home</a>
</div>
<img src="/img/icn.png" class="icn menuicon" id="menuicon" alt="menu-icon">
<div class="con2">
<img src="/img/client.png"class="icn menuicon" id="cicon" alt="c-icon">
</div>
<div class="session">
Hi :<?php
    echo $_SESSION["username"];  
    ?>
</div>
</div>
<div class="img">
<img src="/img/meraki.png">
</div>
<div class="dash">
<img src="mobile.jpg" alt="menu-icon" class='imgg'>
<a style="text-decoration: none" href="first.php">Dashboard</a>
</div>
<div class="manage">
<p>Manage Client</a>
</div>
<div class="manage-agency">
<p >Manage agency</p>
</div>
<div class="box-container">
    
</div>
    </form>
</body>
</html>