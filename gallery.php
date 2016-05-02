<?php
    if (isset($_POST["submit"])) {
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'trustyoutrustme'; 
        $to = 'balafafa@gmail.com'; 
        $subject = 'Message from trustmetrustyou';
        
        $body = "From: $email\n Message:\n $message";
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }
 
// If there are no errors, send the email
if (!$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gallery</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Intro Section -->
    <a href="index.html">
        <span class="glyphicon glyphicon-home backbutton"></span>
    </a>
    <section id="myCarousel" class="carousel slide">
        <!-- Full Page Image Background Carousel Header -->
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url(img/ace_email_screenshot.jpg);"></div>
                <!--
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
                -->
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url(img/ace_response1.jpg);"></div>
                <!--
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
                -->
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url(img/ace_response2.jpg);"></div>
                <!--
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
                -->
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url(img/ace_response3.jpg);"></div>
                <!--
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
                -->
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url(img/ace_response4.jpg);"></div>
                <!--
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
                -->
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url(img/ace_response5.jpg);"></div>
                <!--
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
                -->
            </div>
            <div class="carousel-caption">
                <a class="btn btn-secondary-outline page-scroll" href="#contact" style="font-size: 25px; border:1px solid black; color:black;">Share a Story</a>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
    <a class="toTop page-scroll" href="#page-top">
    <span class="glyphicon glyphicon-menu-up" style="color: gray;"></span>
    </a>
        <div class="container" style="background-color: rgba(128,128,128,0.4);">
            <div class="row">
                <h1 style="padding-bottom: 25px"> Share a Story </h1>
                <div class="col-md-12" style="left:-95px">
                    <form class="form-horizontal" role="form" method="post" action="gallery.php">
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="4" name="message"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <a class="btn btn-primary-outline" style="border:1px solid black; color:black;">Send</a>
                                <!--<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">-->
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <!-- Will be used to display an alert to the user-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

    <!-- Script to Deactivate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: false //changes the speed
    })
    </script>

}); 

</body>

</html>
