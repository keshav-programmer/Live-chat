<?php
    include_once('../services.d/functions.php');
    $login_attempt = isset($_GET['login_attempt'])?$_GET['login_attempt']:'';
    if($login_attempt == 'LOGIN_FAILED')
        $err = 'style="display: block;"';
    else
        $err = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Chat App</title>
    <link rel="stylesheet" href="../styles/style.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>
<body>

    <div class="wrapper">
        <section class="form login">
            <header>Live Chat App</header>
            <form action="auth.php" method="POST">
                <div class="error-txt" <?php echo $err; ?>>The useremail or password is incorrect!</div>
                    <div class="field input">
                        <label>E-mail Address</label>
                        <input type="text" placeholder="Enter your email" name="email">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" placeholder="Enter your password" name="password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Sign In">
                    </div>
            </form>
            <!-- <div class="link"><a href="../forget password/forgetPass.html">Forgot Password!</a></div> -->
            <div class="link"><a href="../forget password/forgetPass.html">Forgot Password?</a></div>
            <div class="link">Not yet signed up? <a href="../signup/">Signup Now.</a></div>
        </section>
    </div>

    <script src="../javascript/pass-show-hide.js"></script>
    
</body>
</html>