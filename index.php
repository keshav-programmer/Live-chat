<?php
session_start();
if (!isset($_SESSION['user']))
    header("location: ./login/");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Chat App</title>
    <link rel="stylesheet" href="styles\style.css">
    <link rel="stylesheet" href="styles\modal.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <script src="./javascript/users-modal-controller.js"></script>
    <link rel="shortcut icon" href="./statics/logo.png" type="image/x-icon">
</head>

<body>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" id="modal-close">&times;</span>
                <h2 id="image-name">Modal Header</h2>
            </div>
            <div class="modal-body">
                <img src="./statics/img.jpg" id="img01">
            </div>
            <div class="modal-footer">
                <h3>Modal Footer</h3>
            </div>
        </div>

    </div>
    <div class="wrapper">
        <section class="users">
            <header>
                <div class="content">
                    <img src="./statics/img.jpg" alt="" id="myBtn" onclick="modalclik(this)" style="cursor:pointer;">

                    <div class="details">
                        <span>Keshav Gupta</span>
                        <p>Active now</p>
                    </div>
                </div>
                <div class="setting">
                    <a href="#"><i class="fas fa-cog"></i></a>
                </div>
                <a href="./logout" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select an user to start chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik(this)">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="./statics/car.png" alt="" onclick="modalclik(this)">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik(this)">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik(this)">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik(this)">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik(this)">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
            </div>
        </section>
    </div>

    <script src="./javascript/users.js"></script>
</body>

</html>