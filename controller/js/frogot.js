$(document).ready(function () {
  $("#pass").on("input", function () {
    checkpass();
  });
  $("#cpass").on("input", function () {
    checkpass1();
  });
  $("#submitbtn1").click(function () {
    if (!checkpass() || !checkpass1()) {
      console.log("all error");
      $("#msg1").html("Please fill all required field");
      $("#msg1").css("color", "red");
    } else if (!checkpass() && !checkpass1()) {
      console.log("all error");
      $("#msg1").html(
        `<div class="alert alert-warning">Please fill all required field</div>`
      );
    } else {
      console.log("ok");
      $("#msg1").html("");
      var pass = document.getElementById("pass").value;
      var cpass = document.getElementById("cpass").value;
      var data = {
        pass,
        cpass
      };
      $.ajax({
        url: "http://localhost/login/connection/update.php",
        method: "POST",
        timeout: 0,
        headers: {
          "Content-Type": "application/json"
        },
        data: JSON.stringify(data),
        beforeSend: function () {},
        success: function (res) {
          if (res == "successfully updated") {
            Swal.fire({
              dispaly :"block",
              position: 'top-center',
              icon: 'success',
              title: 'Data Has Been Updated',
              showConfirmButton: false,
              timer: 1500
            }), 
            setTimeout(function() {
              window.location.replace("profile.php");
    }, 2000);
          } else {
            $("#msg").html(res);
          }
        }
      });
    }
  });
});
function checkpass() {
  // console.log("password");
  // var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
  var pass = $("#pass").val();
  // var validpass = pattern2.test(pass);
  if (pass == "") {
    $("#pass_err").html("password can not be empty");
    $("#pass_err").css("color", "red");
    return false;
  // } else if (!validpass) {
  //   $("#pass_err").html(
  //     "Minimum 5 and upto 15 characters, at least one uppercase letter, one lowercase letter, one number and one special character:"
  //   );
    $("#pass_err").css("color", "red");
    return false;
  } else {
    $("#pass_err").html("");
    return true;
  }
}
function checkpass1() {
  var pass = $("#pass").val();
  var cpass = $("#cpass").val();
  if (cpass == "") {
    $("#pass1_err").html("confirm password cannot be empty");
    $("#pass1_err").css("color", "red");
    return false;
  } else if (pass !== cpass) {
    $("#pass1_err").html("confirm password did not match");
    $("#pass1_err").css("color", "red");
    return false;
  } else {
    $("#pass1_err").html("");
    return true;
  }
}
