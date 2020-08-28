<?php
if (isset($_GET)){
    $mess=$_GET['message'];
    $error=$_GET['error'];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--    <link rel="stylesheet" type="text/css" href="css/util.css">-->
    <link rel="stylesheet" href="assets/style/main.css">
    <title>Contact</title>
</head>
<body>
<!--Header-->
<nav class="navbar bg-dark navbar-dark mb-4" id="navbar">
    <div>
        <h1><a class="navbar-brand amar" href="index.html" style="">AMAR SYLL</a></h1>
    </div>
    <div class="collapse navbar-collapse d-flex justify-content-end mr-3" id="navbarNav">
        <h3 class=""><a class="nav-link" href="index.html">Home</a></h3>
        <h3 class=""><a class="nav-link" href="work.html">Work</a></h3>
        <h3 class=""><a class="nav-link" href="about.html">About</a></h3>
        <h3 class="menu"><a class="nav-link" href="">Contact</a></h3>
    </div>
</nav>
<!--end Header-->
<!--Body-->

<div class="container-contact100 mb-3">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Contact Me
				</span>

            <div class="wrap-input100 validate-input" data-validate="Please enter your name">
                <input class="input100" name="name" placeholder="Full Name" type="text">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Please enter your email: e@a.x">
                <input class="input100" name="email" placeholder="E-mail" type="text">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Please enter your phone">
                <input class="input100" name="phone" placeholder="Phone" type="text">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Please enter your message">
                <textarea class="input100" name="message" placeholder="Your Message"></textarea>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn mt-2">
                <button class="contact100-form-btn">
                            <span>
                                <i aria-hidden="true" class="fa fa-paper-plane-o m-r-6"></i>
                                Send
                            </span>
                </button>
            </div>
        </form>
    </div>
</div>
<!--end Body-->
<!--Footer-->
<div id="footer" style="margin-top: 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h4>My Bunker</h4>
                <p>
                    Desio via per Cesano Maderno,29<br/>
                    +39 3884035746, <br/>
                    Monza, Lombardia. <br/>
                    Copyright&copy; <span id="date"></span>
                </p>
            </div><!-- /col-lg-4 -->

            <div class="col-lg-4">
                <h4>My Links</h4>
                <ul class="social">
                    <li><a style="color: white" href="https://www.facebook.com/Amar.syll/" target="_blank"><i
                                    class="icon-facebook fa fa-facebook icon-social"></i>Facebook</a></li>
                    <li><a style="color: white" href="https://github.com/Amar1921" target="_blank"><i
                                    class="icon-github fa fa-github icon-social"></i>Github</a>
                    </li>
                    <li><a style="color: white" href="https://www.linkedin.com/in/amar-syll-20b595198/" target="_blank"><i
                                    class="icon-linkedin fa fa-linkedin icon-social"></i>Linkedin</a></li>
                </ul>
            </div><!-- /col-lg-4 -->
            <div class="col-lg-4">
                <h4>Note</h4>
                <p>Questo porofolio è stato realizzato con HTML/CSS anche con un po' di PHP e di JavScript. C'è anche
                    una parte di bootstrap come base per il CSS. .</p>
                    <hr style="border: 1px solid white">
                <ul class=>
                    <li>Link di questo progetto fatto con :<a href="https://codeload.github.com/Amar1921/upgraded-octo-train/zip/master"> React</a></li>
                    <li>Link di questo progetto fatto con :<a href="https://codeload.github.com/Amar1921/portofolio_php/zip/master"> PHP</a></li>
                </ul>
            </div><!-- /col-lg-4 -->
        </div>

    </div>
</div>
<!--end Footer-->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="script/index.js"></script>

</body>
</html>

