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
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <script src="./javascript/users-modal-controller.js"></script>
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
                <!-- <div class="setting">
                    <a href="#"><i class="fas fa-cog"></i></a>
                </div>
                <a href="./logout" class="logout">Logout</a> -->

                <div class="menulist">
                   <div class="menu-icon" onclick="menuToggle()"> <i class="fas fa-ellipsis-v" id="menu-icon" ></i></div>
                    <div class="menu-box">
                        <ul>
                            <li><i class="fas fa-user"></i><a href="#">Profile</a></li>
                            <li><i class="fas fa-cog"></i><a href="#">Setting</a></li>
                            <li><i class="fas fa-question"></i><a href="#">Help</a></li>
                            <li><i class="fas fa-bug"></i><a href="#">Report</a></li>
                            <li><i class="fas fa-sign-out-alt"></i><a href="./logout">Logout</a></li>
                        </ul>
                    </div>
                </div>

            </header>
            <div class="tab">
                <ul id="ulTab">
                    <li class="liTab tabone">Chat</li>
                    <li class="liTab tabtwo">Freinds</li>
                    <li class="liTab tabthree">Requests</li>
                </ul>
                <div class="activetab"></div>
            </div>




            <div class="users-list">
                <div class="search">
                    <span class="text">Select an user to start chat</span>
                    <input type="text" placeholder="Enter name to search...">
                    <button><i class="fas fa-search"></i></button>
                </div>
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
                            <p>This is ur status</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
            </div>










            <div class="freind">
                <div class="searchfreind">
                    <span class="text">Enter E-mail to search new friends</span>
                    <input type="text" placeholder="Enter name to search...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik(this)">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is freind status</p>

                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="./statics/car.png" alt="" onclick="modalclik(this)">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is freind status</p>

                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik(this)">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is freind status</p>

                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik(this)">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is freind status</p>

                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik(this)">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is freind status</p>

                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik(this)">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is freind status</p>

                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
            </div>





            <div class=" friend-list">
                <div class="searchlist">
                    <span class="text">Enter E-mail to search new friends</span>
                    <input type="text" placeholder="Enter name to search...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik(this)">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is xyz message</p>
                            <div class="reject">Reject</div>
                            <div class="accept">Accept</div>
                        </div>
                    </div>

                </a>
                <a href="#">
                    <div class="content">
                        <img src="./statics/car.png" alt="" onclick="modalclik(this)">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is test message</p>
                            <div class="reject">Reject</div>
                            <div class="accept">Accept</div>
                        </div>
                    </div>

                </a>
                <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik(this)">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is test message</p>
                            <div class="reject">Reject</div>
                            <div class="accept">Accept</div>
                        </div>
                    </div>

                </a>
                <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik(this)">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is test message</p>
                            <div class="reject">Reject</div>
                            <div class="accept">Accept</div>
                        </div>
                    </div>

                </a>
                <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik(this)">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is test message</p>
                            <div class="reject">Reject</div>
                            <div class="accept">Accept</div>
                        </div>
                    </div>

                </a>
                <a href="#">
                    <div class="content">
                        <img src="./statics/img.jpg" alt="" onclick="modalclik(this)">
                        <div class="details">
                            <span>Keshav Gupta</span>
                            <p>This is test message</p>
                            <div class="reject">Reject</div>
                            <div class="accept">Accept</div>
                        </div>
                    </div>

                </a>
            </div>


        </section>
    </div>

    <script src="./javascript/users.js"></script>

    <script>
    $(document).ready(function() {
        if ($(window).width() < 400) {
            $('.tabone').click(function() {
                $('.activetab').animate({
                    marginLeft: "26px"
                });
                $('.users-list').css('display', 'block');
                $('.friend-list').css('display', 'none');
                $('.freind').css('display', 'none');
            });
            $('.tabtwo').click(function() {
                $('.activetab').animate({
                    marginLeft: "135px"
                });
                $('.users-list').css('display', 'none');
                $('.friend-list').css('display', 'none');
                $('.freind').css('display', 'block');

            });
            $('.tabthree').click(function() {
                $('.activetab').animate({
                    marginLeft: "240px"
                });
                $('.friend-list').css('display', 'block');
                $('.freind').css('display', 'none');
                $('.users-list').css('display', 'none');
            });
        } else {

            $('.tabone').click(function() {
                $('.activetab').animate({
                    marginLeft: "20px"
                });
                $('.users-list').css('display', 'block');
                $('.friend-list').css('display', 'none');
                $('.freind').css('display', 'none');
            });
            $('.tabtwo').click(function() {
                $('.activetab').animate({
                    marginLeft: "150px"
                });
                $('.users-list').css('display', 'none');
                $('.friend-list').css('display', 'none');
                $('.freind').css('display', 'block');
            });
            $('.tabthree').click(function() {
                $('.activetab').animate({
                    marginLeft: "280px"
                });
                $('.friend-list').css('display', 'block');
                $('.freind').css('display', 'none');
                $('.users-list').css('display', 'none');
            });
        }

    })
    </script>
</body>

</html>