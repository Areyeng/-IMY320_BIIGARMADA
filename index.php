		<?php require_once('pages/header.php'); ?>
			<div id = "title">
				<h1>DYNAMIC CREATORS</h1>
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
			<footer class="page-footer">
				<div class="social">
			        <a href = "#" target = "_blank">
			        	F
			        </a>
			                
			        <a href = "#" target = "_blank">
			        	T
			        </a>

			        <a href = "#" target = "_blank">
			        	W
			        </a>
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
		<script id="cookieinfo"
		    src="//cookieinfoscript.com/js/cookieinfo.min.js"
		    data-bg="#241E4E"
		    data-fg="#FFFFFF"
		    data-link="#800000"
		    data-cookie="CookieInfoScript"
		    data-text-align="left"
		   data-close-text="Got it!">
		</script>
		<script src="script/script.js" type = "module"></script>
	</body>
</html>
