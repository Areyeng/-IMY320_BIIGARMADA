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
        <link rel="stylesheet" type="text/css" href="../css/style.css" >

        <!-- Favicon -->
        <link rel="icon" type="image/png" size="16x16" href="../img/logo_square.png"/>
        <!-- <script src="https://js.yoco.com/sdk/v1/yoco-sdk-web.js"></script> -->
	</head>
	<body>
		<!-- <div class = "loading"></div> -->
		<div class = "container-fluid">
			<header>
                <a href = "../">
                    <img class = "logo-img" src = "../img/logo.png" alt = "logo"/>
                </a>
				<?php // require('navbar.php'); ?>
                <span id="hamburger">
                    <span id="bar1" class="bar"></span>
                    <span id="bar2" class="bar"></span>
                    <span id="bar3" class="bar"></span>
                </span>
			</header>
            
            <div class="hover-menu">
                 <div class="box overlay">
                    <div class="row">
                        <div class="">
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
