<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo( 'name' ); ?></title>

	<!-- favicon -->
	<link rel="icon" href="assets/images/favicon.jpg">

	<!-- Bootstrap css -->
	<!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <link href="assets/css/owl.carousel.min.css" rel="stylesheet"> -->
	<!-- <link rel="stylesheet" href="assets/css/owl.theme.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Helvetica:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" rel="stylesheet">



	<!-- Custom CSS -->
	<!-- <link href="assets/css/style.css" rel="stylesheet"> -->
	<?php wp_head(); ?>
</head>
<body>

	<header id="header">
    
    <nav class="navbar navbar-expand-lg navbar-dark  pl-0 pr-0" >
				<div class="container ">
			  <!-- Brand -->
			  <a class="navbar-brand p-0 m-0" href="#"><img src="<?php echo get_template_directory_uri().'/assets/images/logo.png'; ?>" alt=""></a>

			  <!-- Toggler/collapsibe Button -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <!-- Navbar links -->
			  <div class="collapse navbar-collapse" id="collapsibleNavbar">
			    <!-- <ul class="navbar-nav ml-auto">
			      <li class="nav-item">
			        <a class="nav-link" href="#">Publishers</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Brands & Advertisers</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Technology</a>
			      </li> 
				  <li class="nav-item">
			        <a class="nav-link" href="#">Resources</a>
			      </li> 
			       <li class="nav-item">
			        <a class="nav-link" href="#">About</a>
			      </li> 
			       <li class="nav-item">
			        <a class="nav-link" href="#"><span>Login</span></a>
			      </li> 
			    
			    </ul> -->
			    <?php wp_nav_menu( array( 'menu_class' => 'navbar-nav mx-lg-auto', 'container' => 'ul', )); ?>

			  </div>
				</div>
	</nav>	
	</header>

	<div class="slider">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="<?php echo get_template_directory_uri().'/assets/images/slider-1.jpg'; ?>" alt="First slide">
		     <div class="carousel-caption position-absolute d-flex align-items-center "> 	
		      	<div class="container"><div class="row"><div class="col-md-5">
    		  		<h2 class="m-0">We help brands and agencies in reaching niche and multicultural audience.</h2></div>
                    </div>
    		    </div>
    		  </div>
		    </div> 
		    <div class="carousel-item">
		      <img class="d-block w-100" src="<?php echo get_template_directory_uri().'/assets/images/slider-1.jpg'; ?>" alt="First slide">
		     <div class="carousel-caption position-absolute d-flex align-items-center "> 	
		      	<div class="container"><div class="row"><div class="col-md-5">
    		  		<h2 class="m-0">We help brands and agencies in reaching niche and multicultural audience.</h2></div>
                    </div>
    		    </div>
    		  </div>
		    </div>   
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>