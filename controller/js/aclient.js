$(document).ready(function () {
    $("#fname").on("input", function () {
      checkname();
    });
    $("#uname").on("input", function () {
      checkuname();
    });
    $("#pass").on("input", function () {
        checkpass();
      });
      $("#cname").on("input", function () {
        checkcname();
      });
      $("#web").on("input", function () {
        checkweb();
      });
      $("#addr").on("input", function () {
        checkaddr();
      });
  $("#submitbtn1").click(function () {
    if (!checkname() && !checkuname()&& !checkpass() && !checkcname() && !checkweb() && !checkaddr()) {
      console.log("all error");
      $("#msg").html("Please fill all required field");
      $("#msg").css("color", "red");
    } else if ( !checkname()  || !checkuname()|| !checkpass() || !checkcname() || !checkweb() || !checkaddr()) {
      $("#msg").html(
        "Please fill all required field");
        $("#msg").css("color", "red");
      }else {
        console.log("ok");
        $("#msg").html("");
        var fname = document.getElementById("fname").value;
        var uname = document.getElementById("uname").value;
        var npass = document.getElementById("pass").value;
        var cname = document.getElementById("cname").value;
        var web = document.getElementById("web").value;
        var addr = document.getElementById("addr").value;
  var data = {
    fname,
    uname,
    npass,
    cname,
    web,
    addr,
  };
  //   console.log(data);
  //   var data = new FormData(form);
  $.ajax({
    url: "http://localhost/login/connection/fclient.php",
    method: "POST",
    timeout: 0,
    headers: {
      "Content-Type": "application/json",
    },
    data: JSON.stringify(data),
    success: function (res) {
      if(res=="inserted successfully"){
        window.location.replace('showclient.php');
      }
      else{
      $("#msg").html(res);
      }
    },
  });
      }
  });
  });
  function checkname() {
    var user = $("#fname").val();
    if(user=="") {
      $("#name_err").html("required field ");
      $("#name_err").css("color", "red");
      return false;
    } else {
      $("#name_err").html("");
      return true;
    }
  }
  function checkpass() {
    // console.log("password");
    var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    var pass = $('#pass').val();
    var validpass = pattern2.test(pass);
    if (pass == "") {
        $('#pass_err').html('password can not be empty');
        $("#pass_err").css("color", "red");
        return false;
    } else if (!validpass) {
        $('#pass_err').html('Minimum 5 and upto 15 characters, at least one uppercase letter, one lowercase letter, one number and one special character:');
        $("#pass_err").css("color", "red");
        return false;

    } else {
        $('#pass_err').html("");
        return true;
    }
}
function checkweb(){
  var pattern= /[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g;
  var web = $('#web').val();
  var validweb=pattern.test(web)
  if (web == "") {
      $('#w_err').html('Enter website');
      $("#w_err").css("color", "red");
      return false;
  }
  else if(!validweb){
    $('#w_err').html('invalid url : ex- https://tickleright.com/');
      $("#w_err").css("color", "red");
  } 
  else {
      $('#w_err').html("");
      return true;
  }
}
  function checkuname(){
    var pass = $('#uname').val();
    if (pass == "") {
        $('#u_err').html('Enter username');
        $("#u_err").css("color", "red");
        return false;
    } else {
        $('#u_err').html("");
        return true;
    }
  }
  function checkcname(){
    var pass = $('#cname').val();
    if (pass == "") {
        $('#c_err').html('Enter company');
        $("#c_err").css("color", "red");
        return false;
    } else {
        $('#c_err').html("");
        return true;
    }
  }
  function checkaddr(){
    var addr = $('#addr').val();
    if (addr == "") {
        $('#addr_err').html('Enter address');
        $("#addr_err").css("color", "red");
        return false;
    } else {
        $('#addr_err').html("");
        return true;
    }
  }
 