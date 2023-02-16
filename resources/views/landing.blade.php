<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>G'Five Rentals</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }


        /* NAVBAR START */
        .navbar-nav {
            gap: 20px;
        }

        .nav-item .nav-link {
            color: white;
            font-size: 17px;
            font-weight: normal;
            letter-spacing: 4px;

        }

        .nav-item a:hover {
            background: #ff6d00;
            border-radius: 5px;
            transition: 0.0s;
        }

        .navbar-toggler-icon {

            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 209, 129, 1429' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-light .navbar-toggler {
            box-shadow: none;
        }

        .navbar-toggler {
            border-color: transparent;
        }

        button {
            width: 170px;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            border-radius: 10px;
            border: 1px solid #ffd181;
            background: transparent;
        }

        .btn {
            background-color: #FF6d00;
        }

        .btn1 {
            color: white;
            font-weight: normal;
            font-size: 20px;
            letter-spacing: 3px;
        }

        .btn1:hover {
            font-weight: bold;
            background-color: #dd6d00;
        }

        #header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100000;
        }

        #header.sticky {
            background: black;

        }

        @media only screen and (max-width: 991px) {
            #header {
                background: black;
            }
        }

        /* NAVBAR END */


        /* MODAL START */
        .modal-backdrop {
            opacity: 0.5 !important;
        }

        .modal-body button {
            color: white;
            font-weight: normal;
            font-size: 20px;
            background-color: #dd6d00;
            border-color: black;
            letter-spacing: 2px;
        }

        .modal-body button:hover {
            font-weight: bold;
            border-color: gray;
            background-color: rgb(70, 70, 70);
        }

        .modal-header h1,
        .modal-body a,
        .modal-footer a {
            color: black;
        }

        .modal-header,
        .modal-body,
        .modal-footer {
            background: #ffd181;
        }

        .modal .button {
            display: inline-flex;
            text-decoration: none;
            gap: 25px;
            height: 50px;
            width: 50px;
            margin-top: 30px;
            float: left;
            margin: 0 5px;
            overflow: hidden;
            background: rgb(255, 255, 255);
            background: linear-gradient(36deg,
                    rgba(255, 255, 255, 1) 0%,
                    rgba(255, 209, 129, 0.819765406162465) 58%);
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 12px 12px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-out;

        }

        .modal .button:hover {
            width: 200px;
            background-color: #ffffff;
        }

        .modal .icon {
            padding: 12px;
            font-size: 30px;
            width: 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 5px 13px;
        }
        .modal .icon .bi-facebook {
      color: #385999;
      background: #ffd181;
    }

    .modal .icon .bi-instagram {
      color: #e1306c;
      background: #ffd181;
    }

    .modal .icon .bi-twitter {
      color: #46C1F6;
      background: #ffd181;
    }

        .modal .icon .bi-youtube {
            color: red;
            background: #ffd181;
        }

        .modal .icon .bi-google {
            color: #4885ed;
            background: #ffd181;
        }



        /* MODAL END */




        .banner {
            width: 100%;
            height: 100vh;
            position: relative;
            overflow: hidden;
        }

        .slider {
            width: 100%;
            height: 100vh;
            position: absolute;
            top: 0;
            animation: zoom 3s linear infinite;
            transition: 2s;
        }

        @keyframes zoom {
            0% {
                transform: scale(1.3);
            }

            15% {
                transform: scale(1);
            }

            85% {
                transform: scale(1.3);
            }

            100% {
                transform: scale(1);
            }
        }

        #slideimg {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .overlay {
            width: 100%;
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8));
            position: absolute;
            top: 0;
        }

        .content2 {
            width: 95%;
            margin-top: 250px;
            text-align: center;
            color: #fff;
            display: flex;
            justify-content: flex-end;
            flex-wrap: wrap;
            font-family: sans-serif;
        }

        .content2 p {
            line-height: 60px;
            font-size: larger;
            font-style: italic;
            color: #ffd181;
            font-weight: bold;
        }

        .content2 h1 {
            font-size: 70px;
            line-height: 100px;
        }

        .btn-1:hover {
            background-color: #ff6d00;
            font-weight: bold;
            font-size: 15px;
        }

        .btn-2:hover {
            background-color: #ff6d00;
            font-weight: bold;
            font-size: 15px;
        }

        span {
            color: #ff6d00;
        }

        .slider2 {
            height: 100vh;
            width: 100%;
        }

        .rentnow {
            line-height: 52px;
            font-weight: bold;
            font-size: 16px;
            color: #ff6d00;


        }

        .rentnow button {
            margin-left: 20px;
            color: #fff;
            padding: 0px;
            border-radius: 12px;
            letter-spacing: 3px;

        }

        .btn-1 {
            background-color: #ff6d00;
        }

        .footer {
            position: relative;
            display: block;
            justify-content: center;
            align-content: center;
            background-position: center;
            background-repeat: no-repeat;
            bottom: 0;
            background: rgb(255, 255, 255);
            background: #ff6d00;
            color: #f1f1f1;
            width: 100%;
            padding: 20px;
            padding-left: 10px;
            padding-bottom: 100px;
            height: 500px;
            margin-bottom: 0px;
        }

        .col-md-2 {
            flex: 0 0 auto;
            width: 24.666667%;
        }

        .row {
            width: auto;
        }

        .facebook:hover span,
        .facebook:hover .tooltip,
        .facebook:hover .tooltip:before {
            background: #385999;
            left: 16%;
        }

        .instagram:hover span,
        .instagram:hover .tooltip,
        .instagram:hover .tooltip:before {
            background: #e1306c;
            left: 30%;
        }

        .twitter:hover span,
        .twitter:hover .tooltip,
        .twitter:hover .tooltip:before {
            background: #46C1F6;
            left: 47%;
        }

        .google:hover span,
        .google:hover .tooltip,
        .google:hover .tooltip:before {
            background: #4885ed;
            left: 60%;

        }

        .icon .fa.fa-facebook-f::before {
            margin-left: 13px;
        }

        .icon .fa.fa-instagram::before {
            padding-left: 8px;
        }

        .icon .fa.fa-twitter::before {
            padding-left: 8px;
        }

        .icon .fa.fa-youtube-play::before {
            padding-left: 8px;
        }

        .icon .fa.fa-google::before {
            padding-left: 8px;
        }


        .wrapper .button {
            display: inline-flex;
            text-decoration: none;
            gap: 25px;
            height: 50px;
            width: 50px;
            margin-top: 30px;
            float: left;
            margin: 0 5px;
            overflow: hidden;
            background: rgb(255, 255, 255);
            background: linear-gradient(36deg,
                    rgba(255, 255, 255, 1) 0%,
                    rgba(255, 209, 129, 0.819765406162465) 58%);
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 12px 12px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-out;
        }

        .wrapper .button:hover {
            width: 200px;
            background-color: #ffffff;
        }

        .wrapper .button .icon {
            display: inline-block;
            justify-content: center;
            height: 50px;
            width: 50px;
            text-align: center;
            border-radius: 70px;
            line-height: 60px;
            transition: all 0.3s ease-out;
        }

        .wrapper .button:nth-child(1):hover .icon {
            background: #4400ff;
            padding-right: 15px;
        }

        .wrapper .button:nth-child(2):hover .icon {
            background: rgb(64, 93, 230);
            background: linear-gradient(85deg,
                    rgba(64, 93, 230, 1) 0%,
                    rgba(131, 58, 180, 1) 20%,
                    rgba(253, 29, 29, 1) 50%,
                    rgba(252, 176, 69, 1) 90%,
                    rgba(255, 220, 128, 1) 100%);
            padding-right: 19.5px;
        }

        .wrapper .button:nth-child(3):hover .icon {
            background: #1da1f2;
            padding-right: 10px;
        }

        .wrapper .button:nth-child(4):hover .icon {
            background: #fc0303;
            padding-right: 10px;
        }

        .wrapper .button:nth-child(5):hover .icon {
            background: rgb(64, 93, 230);
            background: linear-gradient(85deg,

                    rgb(35, 189, 14) 15%,
                    rgb(29, 70, 253) 50%,
                    rgb(226, 41, 17) 70%,
                    rgb(255, 251, 0) 100%);
            padding-right: 19.5px;
        }

        .wrapper .button .icon i {
            font-size: 2px;
            line-height: 53px;

        }

        .wrapper .button span {
            font-size: 20px;
            font-weight: 500;
            line-height: 50px;
            margin-left: 5px;
        }

        .container {
            margin: auto;
            width: 100%;
        }

        @import url(//fonts.googleapis.com/css?family=Lato:300:400);

        .footheader {
            position: relative;
            text-align: center;
            background-image: linear-gradient(to right top,
                    #cc7833,
                    #c27c2d,
                    #ca7a39,
                    #cf7a18,
                    #f59f3d);
            color: white;
        }

        .flex {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        button.btn {
            border-color: #ffd181;
            border-radius: 10px;
            color: #fff;
        }

        button.btn:hover {
            border-color: #ffd181;
            border-radius: 10px;
            color: #fff;
            font-weight: bold;
            background-color: #ff6d00;
            letter-spacing: 1px;
        }

        .content {
            position: relative;
            height: 20vh;
            text-align: center;
            background-color: white;
        }

    </style>

</head>

<body onload="slider()">
    <div class="banner">
        <div class="slider">
            <img src="{{ asset('./images/10.jpg') }}" alt="" id="slideimg" >
        </div>
        <div class="overlay">
            <div class="container-fluid" id="header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('./images/G5-Logo-B-White-on-Black-Border-V1.png') }}" alt="Logo" width="200" height="100"
                                class="d-inline-block align-text-top">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="./GFive/carmodel.html">Vehicles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./GFive/termsandconditions.html">Terms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/aboutus') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./GFive/contactus.html">Contact Us</a>
                                </li>
                            </ul>
                            <form class="d-flex mx-auto">
                                <button type="button" class="btn1 btn-outline-warning btn-lg" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Login
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Members can access
                                                    discounts,
                                                    points and special features.</h1>
                                                <button type="button" class="btn-close btn-light"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body px-5">
                                                <form>
                                                    <div class="mb-3 w-100">
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="Email">
                                                    </div>
                                                    <div class="mb-3 w-100">
                                                        <input type="password" class="form-control my-3"
                                                            id="exampleInputPassword1" placeholder="Password">
                                                    </div>
                                                    <div class="mb-3 form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="exampleCheck1" checked>
                                                        <label class="form-check-label" for="exampleCheck1">Keep me
                                                            signed in</label>
                                                    </div>
                                                    <p class="w-100">Selecting this checkbox will keep you signed into
                                                        your account on this device until
                                                        you
                                                        sign out. Do not select this on shared devices.</p>
                                                    <button type="submit" class="btn btn-dark w-75 mx-5">Sign
                                                        in</button>
                                                    <div class="col-9 mx-auto">
                                                        <p class="text-center"><a href="#" class="text-decoration-none"
                                                                style="color: blue;">Forgot password?</a></p>
                                                    </div>
                                                    <p>Don't have an account? <a href="./GFive/signup.html"
                                                            class="text-decoration-none" style="color: blue;">Create
                                                            one.</a></p>
                                                    <p>or continue with</p>

                                                    <div class="row mx-5">
                                                        <div type="button" href="#" class="icon facebook col-1">
                                                            <span><i class="bi bi-facebook"></i></span>
                                                        </div>
                                                        <div type="button" href="#" class="icon instagram col-2">
                                                            <span><i class="bi bi-instagram"></i></span>
                                                        </div>
                                                        <div type="button" href="#" class="icon twitter col-3">
                                                            <span><i class="bi bi-twitter"></i></span>
                                                        </div>
                                                        <div type="button" href="#" class="icon youtube col-3">
                                                            <span><i class="bi bi-youtube"></i></span>
                                                        </div>
                                                        <div type="button" href="#" class="icon google col-4">
                                                            <span><i class="bi bi-google"></i></span>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <h5><a href="./GFive/underconstruction.html"
                                                        class="text-decoration-none justify-left">Feedback</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>
                </nav>
            </div>
            <div class="content2">
                <div>

                    <h1>PLANNING FOR</h1>
                    <h1>YOUR NEXT <span>TRIP</span>?</h1>
                    <p>Drive your dream car with affordable rates!</p>

                    <div class="rentnow">
                        <button type="button" class="btn-1" href="./GFive/signup.html">
                            RENT NOW
                        </button>
                        <button type="button" class="btn-2" href="./GFive/carmodel.html">
                            OUR VEHICLES
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- =================================================== Footer Start =============================================================== -->

    <footer class="footer" id="foorear">
        <div class="container">
            <footer class="py-5">
                <div class="row">

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Rental Car Types</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="#foorear" class="nav-link p-0 ">Luxury Car
                                    Rental</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#foorear" class="nav-link p-0 ">Pickup Truck
                                    Rental</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#foorear" class="nav-link p-0 ">Van Rental</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#foorear" class="nav-link p-0 ">SUV Rental</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#foorear" class="nav-link p-0 ">Rental Car
                                    Sizes — Sedans</a>
                            </li>
                        </ul>
                    </div>
                    


                    <div class="col-md-5 offset-md-1 mb-3" style="margin-left: 33%;">
                        <form>
                            <h5>Subscribe to our newsletter</h5>
                            <p>
                                Monthly digest of what's new and exciting
                                from us.
                            </p>
                                
                                <br />
                            <div class="wrapper">
                                <a class="button" href="#foorear">
                                    <div class="icon"><i class="fa fa-facebook-f"
                                            style=" font-size:40px;color:rgb(255, 255, 255)"></i></div>
                                    <span style="color: #4400ff">Facebook</span>
                                </a>
                                <a class="button" href="#foorear">
                                    <div class="icon"><i class="fa fa-instagram"
                                            style=" font-size:40px;color:rgb(255, 255, 255)"></i></div>
                                    <span style="color: #833AB4">Instagram</span>
                                </a>
                                <a class="button" href="#foorear">
                                    <div class="icon"><i class="fa fa-twitter"
                                            style=" font-size:40px;color:rgb(255, 255, 255)"></i></div>
                                    <span style="color: #1DA1F2">Twitter</span>
                                </a>
                                <a class="button" href="#foorer">
                                    <div class="icon"><i class="fa fa-youtube-play"
                                            style=" font-size:34px;color:rgb(255, 255, 255)"></i></div>
                                    <span style="color: #fc0303">YouTube</span>
                                </a>
                                <a class="button" href="#foorear">
                                    <div class="icon">
                                        <i class="fa fa-google" style="font-size:40px;color:rgb(255, 255, 255)"></i>
                                    </div>
                                    <span style="color: #176af0">Google</span>
                                </a>
                            </div>

                        </form>

                    </div>
                    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                        <p>© 2022 G' Five | Company, Inc. All rights reserved.</p>
                        <ul class="list-unstyled d-flex">
                            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                        <use xlink:href="#twitter"></use>
                                    </svg></a></li>
                            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                        <use xlink:href="#instagram"></use>
                                    </svg></a></li>
                            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                        <use xlink:href="#facebook"></use>
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>


            </footer>
        </div>
    </footer>
    
    <!-- =================================================== Footer End =============================================================== -->

    <script>
        var slideimg = document.getElementById("slideimg");
        var images = new Array(
            "./images/10.jpg",
            "./images/6.jpg",
            "./images/5.jpg",
            "./images/7.jpg",
            "./images/2.jpg"
        );

        var len = images.length;
        var i = 0;

        function slider() {
            if (i > len - 1) {
                i = 0;
            }
            slideimg.src = images[i];
            i++;
            setTimeout("slider()", 3000);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script>
        window.onscroll = function () {
            var header = document.getElementById("header");
            if (window.pageYOffset > 0) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        };
    </script>
</body>

</html>