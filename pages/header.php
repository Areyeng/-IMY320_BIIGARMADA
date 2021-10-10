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
        <link rel="icon" type="image/png" size="16x16" href="../img/logo_square.png"/>
        <!-- <script src="https://js.yoco.com/sdk/v1/yoco-sdk-web.js"></script> -->
	</head>
	<body>
		<!-- <div class = "loading"></div> -->
		<div class = "container-fluid">
			<header class = "row fixed">
				<a href = "/" class = "col-4 col-sm-4 col-md-3 col-lg-2">
					<img class = "img-fluid logo-img" src = "img/logo2.png" alt = "logo"/>
				</a>
				<?php // require('navbar.php'); ?>
                <span class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
			</header>
