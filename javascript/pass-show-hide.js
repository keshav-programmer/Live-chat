const pswrdField = document.querySelector(".form input[type='password']"),
  toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = () => {
  if (pswrdField.type == "password") {
    pswrdField.type = "text";
    toggleBtn.classList.add("active");
  } else {
    pswrdField.type = "password";
    toggleBtn.classList.remove("active");
  }
};

var step1 = document.getElementById("step1");
var step2 = document.getElementById("step2");
var step3 = document.getElementById("step3");

var sendOTPbtn = $("#send-otp");
var btn2 = $("#Btn2");
var submitSignup = $("#submit-signup");
var resendOTP = $("#resend-otp");
var goback1 = document.getElementById("goback1");
var goback2 = document.getElementById("goback2");

var validation_code = "";

sendOTPbtn.click(function (e) {
  e.preventDefault();
  if (validateTextInput("#fname") && validateTextInput("#lname")) {
    if (validateEmail("#email")) {
        // console.log(emailCheckResult);
        // var res = checkEmailExistence($('#email').val());
        
        // if ( res || alert(res) ) {
          // $("#error1").hide();
          step1.style.display = "none";
          step2.style.display = "block";
          $("#entered-email").text($("#email").val());
          $.ajax({
            url: "../services.d/otp-sender.php",
            method: "post",
            data: {
              email: $("#email").val(),
              fname: $("#fname").val(),
            },
            dataType: "text",
            success: function (strMessage) {
              validation_code = strMessage;
              // console.log(strMessage);
            },
          });
          resetDurationStart();
        // } else {
        //   $("#error1").html(
        //     'The email address already exists! Try new or <a href="../login/">Login instead</a>'
        //   );
        //   $("#error1").show();
        // }

    } else {
      $("#error1").text("Please enter a valid email ID");
      $("#error1").show();
    }
  } else {
    $("#error1").text("You need to enter all the fields!");
    $("#error1").show();
  }
});

goback1.onclick = () => {
  step1.style.display = "block";
  step2.style.display = "none";
};

function resetResend(callback) {
  $("#resend-otp").html(
    'Resend OTP in <span id="resend-active-duration">45</span> seconds'
  );
  $("#resend-otp").attr("disabled");
  $("#resend-otp").addClass("button-resend-inactive");

  if ($("#resend-active-duration").length > 0) callback();
}

function resetDurationStart() {
  var duration = 45;
  var display = document.querySelector("#resend-active-duration");
  startTimer(duration, display, "#resend-otp", "Resend OTP");
}

resendOTP.click(function (e) {
  e.preventDefault();
  $.ajax({
    url: "../services.d/otp-sender.php",
    method: "post",
    data: {
      email: $("#email").val(),
      fname: $("#fname").val(),
    },
    dataType: "text",
    success: function (strMessage) {
      validation_code = strMessage;
      console.log(strMessage);
    },
  });

  resetResend(resetDurationStart);
});

btn2.click(function (e) {
  e.preventDefault();
  if (validateTextInput("#partitioned")) {
    if (validation_code == $("#partitioned").val()) {
      step2.style.display = "none";
      step3.style.display = "block";
    } else {
      $("#error2").text("Invalid OTP!");
      $("#partitioned").val("");
      $("#error2").show();
    }
  } else {
    $("#error2").text("You need to enter all the fields!");
    $("#error2").show();
  }
});

goback2.onclick = () => {
  step2.style.display = "block";
  step3.style.display = "none";
};

submitSignup.click(function (e) {
  e.preventDefault();
  if (validateTextInput("#pass") && validateTextInput("#cpass")) {
    if (sameValue("#pass", "#cpass")) {
      if (validateCheckBox("#terms-conditions")) {
        $("#signup-form").submit();
      } else {
        $("#error3").text("You need to agree to the terms and conditions!");
        $("#error3").show();
      }
    } else {
      $("#error3").text("Your passwords do not match!");
      $("#cpass").val("");
      $("#error3").show();
    }
  } else {
    $("#error3").text("You need to enter all the fields!");
    $("#error3").show();
  }
});

var obj = document.getElementById("partitioned");
obj.addEventListener("keydown", stopCarret);
obj.addEventListener("keyup", stopCarret);

function stopCarret() {
  if (obj.value.length > 5) {
    setCaretPosition(obj, 5);
  }
}

function setCaretPosition(elem, caretPos) {
  if (elem != null) {
    if (elem.createTextRange) {
      var range = elem.createTextRange();
      range.move("character", caretPos);
      range.select();
    } else {
      if (elem.selectionStart) {
        elem.focus();
        elem.setSelectionRange(caretPos, caretPos);
      } else elem.focus();
    }
  }
}
