<?php
    // session_start();
    // if(!isset($_SESSION['user']))
    //     header("location: ./login/");
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
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>
<body>

    <!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2>Modal Header</h2>
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
                   <img src="./statics/img.jpg" alt="" id="myBtn" onclick="modalclik()">
                
                   <div class="details">
                       <span>Keshav Gupta</span>
                       <p>Active now</p>
                   </div>
                </div>
                <div class="setting">
                <a href="#"><i class="fas fa-cog"></i></a></div>
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
                        <img src="./statics/img.jpg" alt="" onclick="modalclik()">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                 <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik()">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik()">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik()">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik()">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik()">
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
    
    <script src="javascript\users.js"></script>
</body>
</html>