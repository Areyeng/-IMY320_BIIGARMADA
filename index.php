<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>DYNAMIC CREATORS</title>

        <!-- Metadata -->
        <meta charset="utf-8" >
        <meta name="author" content="BIIG Armada" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Font Awesome -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
            rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
             crossorigin="anonymous" >
        <link rel="stylesheet" 
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc="
            crossorigin="anonymous" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

        <!-- Local CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css" >

        <!-- Favicon -->
        <link rel="icon" type="image/png" size="16x16" href="img/logo_square.png"/>
        <!-- <script src="https://js.yoco.com/sdk/v1/yoco-sdk-web.js"></script> -->
	</head>
	<body>
		<!-- <div class = "loading"></div> -->
		<div class = "container-fluid">
			<header class = "row fixed">
				<a href = "/" class = "col-4 col-sm-4 col-md-3 col-lg-2">
					<img class = "logo-img" src = "img/logo.png" alt = "logo"/>
				</a>
				<?php // require('navbar.php'); ?>
                <span class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
			</header>

			<div id = "title">
				<h1>DYNAMIC CREATORS</h1>
			</div>

			<div id="sections">
			    <div class="section">
				    <div id="ill">
				    	<span></span>
				    	<span></span>
				    	<span></span>
				    	<span></span>
				    </div>
			    </div>
				<div class="section">
				    <h1>WEBSITES</h1>
			    </div>
				<div  class="section">
				    <h1>FILMS</h1>
			    </div>
			    <div  class="section">
				    <h1>INFOGRAPHICS</h1>
			    </div>
			    <div  class="section">
				    <h1>GAMES</h1>
			    </div>
			</div>
			<div class="hover-menu">
		 		 <div class="box overlay">
				    <div class="row">
					    <div class="col-md-6 offset-md-3 text-center">
					    	<ul  class="navbar-nav">
					    	   <li class="nav-item">
			       				 <a class="nav-link" href="#">HOME</a>
			     			   </li>
			     			   <li class="nav-item">
			       				 <a class="nav-link" href="pages/projects">PROJECTS</a>
			     			   </li>
			     			   <li class="nav-item">
			       				 <a class="nav-link" href="pages/merchandise">MERCHANDISE</a>
			     			   </li>
			     			   <li class="nav-item">
			       				 <a class="nav-link" href="pages/services">SERVICES</a>
			     			   </li>
			     			   <li class="nav-item">
			       				 <a class="nav-link" href="pages/about">ABOUT</a>
			     			   </li>
							</ul>
					   </div>
					</div>
				</div>
			</div>

			<!-- Footer -->
			<footer class="home-page-footer font-small">

				<!-- Footer Links -->

				<!-- Footer Links -->

				<!-- Copyright -->
				<!-- <div class="footer-copyright text-left py-3">
				    © 2021 Copyright:
				    <a href="#"> #</a>
				</div> -->
				<!-- Copyright -->
				<!-- footer -->
				<div class="footer" >
				        <div class="social-links" style="position:relative; font-size:160%;">
				            <a href="#"><i class="fab fa-facebook-f" style="color: black; margin: 7px"></i></a>
				            <a href="#"><i class="fab fa-twitter" style="color: black; margin: 7px"></i></a>
				            <a href="#"><i class="fab fa-whatsapp" style="color: black; margin: 7px"></i></a>
				        </div>
				    </div>
			</footer>

		</div>
		<!-- Jquery CDN-->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"
				integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
				crossorigin="anonymous">
		</script>
		<!-- Bootstrap JS -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>		

		<!-- Bootstrap Element -->
		<div id="bootstrapTest" class="hidden"></div>

		<script>
		    // jQuery Fallback
		    window.jQuery || document.write('<script src="script/js_fallback/jquery-3.4.1.min.js"><\/script>');
		</script>
		<script>
		    // Bootstrap JS Local Fallback
		    if(typeof($.fn.modal) === 'undefined')
		        document.write('<script src="script/js_fallback/bootstrap.min.js"><\/script>');
		</script>
		<script>
		    // Bootstrap CSS Fallback
		    $(()=> {
		        if($('#bootstrapTest').is(':visible')){
		            $('head')
		            .prepend(
		                $('<link/>')
		                .attr({'rel':'stylesheet', 'href':'css/css_fallback/bootstrap.min.css'})
		            );
		        }
		    });
		</script>
		<!-- <script id="cookieinfo"
		    src="//cookieinfoscript.com/js/cookieinfo.min.js"
		    data-bg="#241E4E"
		    data-fg="#FFFFFF"
		    data-link="#800000"
		    data-cookie="CookieInfoScript"
		    data-text-align="left"
		   data-close-text="Got it!">
		</script> -->
		<script src="script/script.js" type = "module"></script>
	</body>
</html>
