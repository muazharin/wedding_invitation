<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wedding Invitation - Juwita & Azhar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">

    <!-- Modernizr JS -->
    <script src="<?= base_url();?>assets/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <style>
    .display-tc h3 {
        color: #F14E95;
        font-size: 30px;
        /* font-weight: bold; */
    }
    </style>

</head>

<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        <header id="fh5co-header" class="fh5co-cover" role="banner"
            style="background-image:url(<?= base_url();?>/assets/images/img_bg_1.jpg);"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                <h1>Juwita &amp; Azhar</h1>
                                <h2>Kepada Bapak/Ibu/Saudara(i):</h2>
                                <h3><?= $name;?></h3>
                                <h2>Tanpa mengurangi rasa hormat, kami mengundang Bapak/Ibu/Saudara(i) untuk menghadiri
                                    acara pernikahan kami</h2>

                                <p><a href="<?= base_url();?>open?name=<?= $name;?>" class="btn btn-default btn-sm">Buka
                                        Undangan</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>


    <!-- jQuery -->
    <script src="<?= base_url();?>assets/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="<?= base_url();?>assets/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="<?= base_url();?>assets/js/jquery.waypoints.min.js"></script>
    <!-- Carousel -->
    <script src="<?= base_url();?>assets/js/owl.carousel.min.js"></script>
    <!-- countTo -->
    <script src="<?= base_url();?>assets/js/jquery.countTo.js"></script>

    <!-- Stellar -->
    <script src="<?= base_url();?>assets/js/jquery.stellar.min.js"></script>
    <!-- Magnific Popup -->
    <script src="<?= base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url();?>assets/js/magnific-popup-options.js"></script>

    <!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
    <script src="<?= base_url();?>assets/js/simplyCountdown.js"></script>
    <!-- Main -->
    <script src="<?= base_url();?>assets/js/main.js"></script>

    <script>
    var d = new Date(new Date("Nov 13, 2022 09:00:00").getTime() + 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: true
    });
    </script>

</body>


</html>
