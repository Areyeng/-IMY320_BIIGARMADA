<!DOCTYPE html>
<html>

<head>
</head>

<body>

    <style>
        body {
            line-height: 1.5;
            font-family: 'Poppins', sans-serif;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        .container {
            max-width: 1170px;
            margin: auto;
        }
        
        .row {
            display: flex;
            flex-wrap: wrap;
        }
        
        ul {
            list-style: none;
        }
        
        .footer {
            background-color: #022534;
            padding: 10px 0;
            bottom: 0;
            position: absolute;
        }
        
        .footer-col {
            width: 33%;
            padding: 0 15px;
        }
        
        .footer-col h4 {
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }
        
        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            /* background-color: #e91e63; */
            height: 2px;
            box-sizing: border-box;
            width: 60px;
        }
        
        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }
        
        .footer-col ul li a {
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }
        
        .footer-col ul li a:hover {
            color: #ffffff;
            padding-left: 8px;
        }
        
        .footer-col .social-links a {
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }
        
        .footer-col .social-links a:hover {
            color: #24262b;
            background-color: #ffffff;
        }
        /*responsive*/
        
        @media(max-width: 767px) {
            .footer-col {
                width: 50%;
                margin-bottom: 30px;
            }
        }
        
        @media(max-width: 574px) {
            .footer-col {
                width: 100%;
            }
        }
    </style>

    <!-- //** FallBack Methods  **// -->


    <!-- Footer -->
    <!-- <footer class="page-footer font-small"> -->

    <!-- Footer Links -->

    <!-- Footer Links -->

    <!-- Copyright -->
    <!-- <div class="footer-copyright text-left py-3">
    © 2021 Copyright:
    <a href="#"> #</a>
</div> -->
    <!-- Copyright -->
    <!-- footer -->

    <footer class="footer">
        <!-- <div class="container"> -->
        <div class="row">
            <div class="footer-col">
                <h4>DYNAMIC CREATORS</h4>
                <ul>
                    <li>
                        <a href="#"></a>
                    </li>

                </ul>
            </div>
            <div class="footer-col">
                <h4>Location</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-map-marker" style="font-size:20px; color:#08546C"></i>     180 William Street Pretoria ,South Africa</a></li>
                    <li>
                        <a href="#"></a>
                    </li>
                    <a href="#"><i  style="color: black;"></i></a>
                    <li><a href="#"><i class = "fab fa-whatsapp" style="font-size:20px; color:#08546C"></i>    +1 2672  45673</a></li>
                    <li><a href="#"><i class="fa fa-envelope" style="font-size:20px; color:#08546C"></i>    support@dynamiccreators.com</a></li>

                </ul>
            </div>
            <div class="footer-col">
                <h4>About the company</h4>
                <ul>
                    <li><a href="#">A company, abbreviated as co.,
                         is a legal entity representing an association of people,
                          whether natural, legal or a mixture of both,
                           with a specific objective. Company members share
                            a common purpose and unite to achieve specific,
                             declared goals.</a></li>
                    <a href="#"><i class = "fab fa-facebook-f" style="font-size:35px; margin:10px; color:#08546C "></i></a>
                    <a href="#"><i class = "fab fa-twitter" style="font-size:35px; margin:10px;color:#08546C"></i></a>
                    <a href="#"><i class = "fab fa-whatsapp" style="font-size:35px; margin:10px; color:#08546C "></i></a>
                </ul>
                <div class="social-links">

                </div>
            </div>
        </div>
        <!-- </div> -->
    </footer>



    <!-- <div class="footer" >
    </div>
</footer>
</div> -->
    <!-- Footer -->
    <!-- Jquery CDN-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
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
        if (typeof($.fn.modal) === 'undefined')
            document.write('<script src="script/js_fallback/bootstrap.min.js"><\/script>');
    </script>
    <script>
        // Bootstrap CSS Fallback
        $(() => {
            if ($('#bootstrapTest').is(':visible')) {
                $('head')
                    .prepend(
                        $('<link/>')
                        .attr({
                            'rel': 'stylesheet',
                            'href': 'css/css_fallback/bootstrap.min.css'
                        })
                    );
            }
        });
    </script>
    <script id="cookieinfo" src="//cookieinfoscript.com/js/cookieinfo.min.js" data-bg="#241E4E" data-fg="#FFFFFF" data-link="#800000" data-cookie="CookieInfoScript" data-text-align="left" data-close-text="Got it!">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="script/script.js" type="module"></script>
</body>

</html>