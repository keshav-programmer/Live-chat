<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Chat App</title>
    <link rel="stylesheet" href="../styles/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <script src="../javascript/validation.js"></script>
    <style>
        .partitioned {
            border: none !important;
            padding-left: 15px !important;
            letter-spacing: 42px;
            background-image: linear-gradient(to left, black 70%, rgba(255, 255, 255, 0) 0%);
            background-position: bottom;
            background-size: 50px 1px;
            background-repeat: repeat-x;
            background-position-x: 35px;
        }

        .divInner {
            left: 0;
            position: sticky;
        }

        .divOuter {
            width: 78% !important;
            overflow: hidden;
        }

        .button-resend {
            margin-top: 13px;
            height: 45px;
            border: none;
            font-size: 17px;
            font-weight: 400;
            background: #333;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        .button-resend-inactive {
            background-color: #33333350;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <section class="form signup">
            <header>Live Chat App</header>
            <form id="signup-form" action="./auth.php" method="post">
                <div id="step1">
                    <div class="error-txt" id="error1">You need to enter all the fields!</div>
                    <div class="name-details">
                        <div class="field input">
                            <label for="fname">First Name</label>
                            <input type="text" placeholder="First Name" id="fname">
                        </div>
                        <div class="field input">
                            <label for="lname">Last Name</label>
                            <input type="text" placeholder="Last Name" id="lname">
                        </div>
                    </div>
                    <div class="field input">
                        <label for="email">E-mail Address</label>
                        <input type="email" placeholder="Enter your email" id="email">
                        <span id="email-exist-result" style="display: block;"></span>
                    </div>
                    <div class="field button">
                        <input type="button" value="Send OTP" id="send-otp">
                    </div>
                </div>


                <div id="step2">
                    <div class="error-txt" id="error2">You need to enter all the fields!</div>
                    <span id="goback1" class="goback">
                        <-- Go Back</span>
                            <br>
                            <br>An OTP has been sent to <span id="entered-email"></span>
                            <div class="field input">
                                <label>Enter OTP</label>
                                <div class="divOuter">
                                    <div class="divInner">
                                        <input type="text" class="partitioned" id="partitioned" placeholder="" maxlength="6">
                                    </div>
                                </div>
                            </div>
                            <div class="field button">
                                <button id="resend-otp" class="button-resend button-resend-inactive" disabled>Resend OTP in <span id="resend-active-duration">45</span> seconds</button>
                            </div>
                            <div class="field button">
                                <input type="button" value="Continue" id="Btn2">
                            </div>
                </div>


                <div id="step3">
                    <div class="error-txt" id="error3">You need to enter all the fields!</div>
                    <span id="goback2" class="goback">
                        <-- Go Back</span>
                            <div class="field input">
                                <label>Password</label>
                                <input type="password" placeholder="Enter new password" id="pass">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="field input">
                                <label> ConfirmPassword</label>
                                <input type="password" placeholder="Confirm password" id="cpass">
                                <i class="fas fa-eye"></i>
                            </div>
                            <input type="checkbox" id="terms-conditions"> Yes, I agree to the Terms and Conditions

                            <div class="field button">
                                <input type="submit" value="Sign Up" id="submit-signup">
                            </div>
                </div>

            </form>

            <!--      <div class="field input">
                        <label>Password</label>
                        <input type="password" placeholder="Enter new password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div> -->

            <div class="link">Already signed up? <a href="../login/">Login Now.</a></div>
        </section>

    </div>

    <script src="../javascript/pass-show-hide.js"></script>
</body>

</html>