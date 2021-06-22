// validate input fields entry
function validateTextInput(inputID) {
    if(($(inputID).val()).length==0)
        return false;
    return true
}

// validate email
function validateEmail(inputID) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String($(inputID).val()).toLowerCase());
}

// validate checkboxes
function validateCheckBox(inputID){
    return document.querySelector(inputID).checked;
}

// check if both the values are same or not
function sameValue(inputID1, inputID2){
    if($(inputID1).val() == $(inputID2).val())
        return true;
    return false;
}

// start timer
function startTimer(duration, display, activateID, message) {
    var timer = duration, minutes, seconds;
    var interval = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = seconds;

        if (--timer < 0) {
            clearInterval(interval);
            $(activateID).removeAttr("disabled");
            $(activateID).removeClass("button-resend-inactive");
            $(activateID).text(message);
        }
    }, 1000);
}

// check if email exists
function checkEmailExistence(emailID) {
    // let email_exists;
    $.ajax({
        // async: false,
        url: "../services.d/check-email-existence.php",
        method: "post",
        data: {
            email: emailID,
        },
        dataType: "text",
        success: function (strMessage) {
            $('#email-exist-result').text(strMessage);
        },
    });
}