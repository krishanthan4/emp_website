<?php require_once "function.php";?>

<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
   
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <title>Tropical Elixar - Discover the Refreshing Taste</title>
		<link rel="shortcut icon" type="image/icon" href="/public/images/logo-removebg-preview.png"/>
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/linearicons.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/slick.css">
		<link rel="stylesheet" href="assets/css/slick-theme.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <script src="https://cdn.tailwindcss.com"></script>
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">


        <script>
    tailwind.config = {
      prefix: "tw-",
      corePlugins: {
         preflight: false,
      }
    }
  </script>
    </head>
	
	<body class="tw-min-h-screen">

	<!-- top-area Start -->
    <section class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <a class="navbar-brand" href="/">Tropical Elixar</a>
                            

			            </div>
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                    <li class="<?= navRoute("")?>"><a href="/">home</a>
			                    <li class="<?= navRoute("about-us")?>"><a href="/about-us">About Us</a></li>
			                    <li class="<?= navRoute("business-model")?>"><a href="/business-model">Business Model</a></li>
                                <li class="<?= navRoute("our-approach")?>"><a href="/our-approach">Our Approach</a></li>
			                    <li class="<?= navRoute("products")?>"><a href="/products">Products</a></li>
			                    <li class="<?= navRoute("board-of-directors")?>"><a href="/board-of-directors">Board Of Directors</a></li>
                                <li class="<?= navRoute("contact")?>"><a href="/contact">Contact Us</a></li>
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->
		    <div class="clearfix"></div>

		</section><!-- /.top-area-->
		<!-- top-area End -->