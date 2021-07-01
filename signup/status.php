<?php
    $activation = isset($_GET['ACTIVATION_SUCCESS']) ? true : false;

    if($activation){
        $symbol = "check";
        $symbol_color = "black";
        $next_link = "../";
    }
    else{
        $symbol = "times";
        $symbol_color = "red";
        $next_link = "./";
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Chat App</title>
    <link rel="stylesheet" href="../styles/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
</head>

<body>

    <div class="wrapper">
        <center> <i class="fas fa-<?php echo $symbol; ?>-circle" style="color: <?php echo $symbol_color; ?>" id="check"></i> </center>
        <h1 id="AccCre">Account Created Succesfully!!</h1>
        <a href="<?php echo $next_link; ?>">
            <div class="continueBtn">Continue</div>
        </a>
    </div>


</body>

</html>