<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stepcone 2023</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
	/*------------------------------------------------------------------
    HEADER
-------------------------------------------------------------------*/
.top-navbar{
	position: relative;
	z-index: 10;
}

.top-navbar .navbar{
	padding: 10px 0px;
	position: fixed;
	width: 100%;
	transition: height .3s ease-out, background .3s ease-out, box-shadow .3s ease-out;
	-webkit-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
	-webkit-box-shadow: 0 8px 6px -6px rgba(0, 0, 0, 0.4);
	box-shadow: 0 8px 6px -6px rgba(0, 0, 0, 0.4);
	z-index: 100;
}

.top-navbar .navbar-light .navbar-nav .nav-link{
	color: #010101;
	font-size: 16px;
	padding: 05px 20px;
	border-radius: 4px;
	text-transform: uppercase;
}
.navbar-brand h2{
    font-family: 'Courier New', monospace;
    display: inline;
    font-size: 2 rem;
    font-weight:900;
}
.top-navbar .navbar-light .navbar-nav .nav-item .nav-link:hover{
	background: #d65106;
	color: #ffffff;
}
.top-navbar .navbar-light .navbar-nav .nav-item.active .nav-link{
	background: #d65106;
	color: #ffffff;
	border-radius: 4px;
}

.navbar-expand-lg .navbar-nav .dropdown-menu{
	border: none;
	border-radius: 0px;
	padding: 10px;
	box-shadow: 2px 5px 6px rgba(0,0,0,0.5);
}
.navbar-expand-lg .navbar-nav .dropdown-menu a{
	padding: 10px 10px;
	text-transform: uppercase;
}

.navbar-expand-lg .navbar-nav .dropdown-menu a.dropdown-item:hover{
	background: #d65106;
	color: #ffffff;
}
.navbar-light .navbar-toggler:hover{
	background: #d65106;
}

@media (min-width: 768px) and (max-width: 991px) {
	.navbar-light .navbar-brand{
		margin-left: 15px;
	}
	.navbar-light .navbar-toggler{
		margin-right: 15px;
		border-radius: 0px;
	}
	.navbar-expand-lg .navbar-nav .dropdown-menu{
		box-shadow: none;
	}
}

/* mobile or only mobile */
@media (max-width: 767px) {
	.navbar-light .navbar-brand{
		margin-left: 15px;
	}
	.navbar-light .navbar-toggler{
		margin-right: 15px;
		border-radius: 0px;
	}
	.navbar-expand-lg .navbar-nav .dropdown-menu{
		box-shadow: none;
	}
	.top-navbar .navbar{
		border-radius: 0px 0px 50px 50px;
	}
	
}


	</style>	
</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt="" style="height:3rem"/><h2>treet fire</h2>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.html">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blogs</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.html">Reservation</a>
								<a class="dropdown-item" href="stuff.html">Stuff</a>
								<a class="dropdown-item" href="gallery.html">Gallery</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	<section style="background-color: #000;height:100vh;">

	</section>
	<section style="background-color: #234;height:100vh;">

	</section>
	<section style="background-color: #567;height:100vh;">

	</section>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
   
    
    </body>
</html>