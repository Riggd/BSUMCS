<!DOCTYPE html>
<!-- Microdata markup added by Google Structured Data Markup Helper. -->
<html><head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Ball State Men's Soccer Club</title>
    <link rel="stylesheet" href="css/foundation.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/index.css"/>
    <!-- <link rel="stylesheet" href="css/animate.css" /> -->

    <!--  Google Tracking Code  -->
    <script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })
    
    (window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-51412211-1', 'ballstatesoccerclub.com');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');

    </script>
    
    <style>
        .header, .header-list-items, .header-link {
            color: #aa1100 !important;
        }
    </style>
    
    
    
</head>
<body>
    <div class="wrapper">
        <header id="header" class="header">
            <!--  Nav Here  -->
            <div class="row">
            <img class="header-img right" src="images/logo.png"/>
                <a href="" class="header-logo">
                    <!--  LOGO HERE  -->
                    <img class="header-img" src="images/cardinal.png"/>
                </a>
                <nav>
                    <ul class="header-list">
                        <li class="header-list-items">
                            <a href="http://www.ballstatesoccerclub.com/#about" class="header-link">About Us</a>
                        </li>
                        <li class="header-list-items">
                            <a href="http://www.ballstatesoccerclub.com/#team" class="header-link">Team</a>
                        </li>
                        <li class="header-list-items">
                            <a href="http://www.ballstatesoccerclub.com/#venues" class="header-link">Venues</a>
                        </li>
                        <li class="header-list-items">
                            <a href="http://www.ballstatesoccerclub.com/#contact" class="header-link">Get Involved</a>
                        </li>
                        <li class="header-list-items">
                            <a href="http://www.ballstatesoccerclub.com/gallery.php" class="header-link">Gallery</a>
                        </li>                        
                    </ul>
                </nav>
                
            </div>
        </header>
        
        <section class="upload">
            <div class="row top-upload">
                
                <p class="top-title gal-push">We need your help!</p>
                
                <div id="zone10">
                    <p class="legend">
                        Drop a file or click here to upload your photos.
                    </p>

                    <!-- You can also use <progress> tag of HTML5: -->
                    <p class="progress">
                        <span id="bar_zone10"></span>
                    </p>
                </div>
                
                <h3 class="center-text">Upload your photos and create history, 2014... 1985... we want it all!</h3>
            </div>
        </section>
        
        <section class="gallery">
            <div class="row">
                <div class="gal-img medium-8 large-8 columns">
                    <img src="images/venue.jpg" alt="gallery1"/>
                </div>
                <div class="gal-img medium-4 large-4 columns">
                    <img src="images/venue.jpg" alt="gallery2"/>
                    <img src="images/venue.jpg" alt="gallery3"/>
                </div>
            </div>
            <div class="row">    
                <div class="gal-img medium-4 large-4 columns">
                    <img src="images/venue.jpg" alt="gallery2"/>
                    <img src="images/venue.jpg" alt="gallery2"/>
                </div>
                <div class="gal-img medium-8 large-8 columns">
                    <img src="images/venue.jpg" alt="gallery1"/>
                </div>
            </div>
            <div class="row">     
                <div class="gal-img medium-8 large-8 columns">
                    <img src="images/venue.jpg" alt="gallery1"/>
                </div>
                <div class="gal-img medium-4 large-4 columns">
                    <img src="images/venue.jpg" alt="gallery2"/>
                    <img src="images/venue.jpg" alt="gallery2"/>
                </div>
            </div>
            <div class="row">     
                 <div class="gal-img medium-4 large-4 columns">
                    <img src="images/venue.jpg" alt="gallery2"/>
                    <img src="images/venue.jpg" alt="gallery2"/>
                </div>
                <div class="gal-img medium-8 large-8 columns">
                    <img src="images/venue.jpg" alt="gallery1"/>
                </div>
            </div>
        </section>
        
        <section class="gallery-test">
            <?php include('dynamicgrid.php'); ?>
        </section>
        
        <footer id="footer" class="footer">
            © Ball State Men's Club Soccer 2014 | All rights Reserved.
            <br/>
            design by: Derek Onay | photography: Lauren (insert link to both webpages)
        </footer>
    </div>
    
    <!--  JS Imports  -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/vendor/modernizr.js"></script>
    <script type="text/javascript" src="js/vendor/jquery.js"></script>
    <script type="text/javascript" src="js/foundation/foundation.js"></script>
    <script type="text/javascript" src="js/foundation/foundation.equalizer.js"></script>
    <script type="text/javascript" src="js/foundation/foundation.reveal.js"></script>
    <script type="text/javascript" src="js/jquery.simplemodal-1.4.4.js"></script>
    
    
    <script type="text/javascript" src="js/navscroll.js"></script>
    <script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/content.js"></script>
    <script type="text/javascript" src="js/divpeek.js"></script>
    <script type="text/javascript" src="js/filedrop-min.js"></script>
   <!--
        UPLOAD SCRIPT MUST REFACTOR-->
   <script type="text/javascript">
        var zone = new FileDrop('zone10');

        zone.event('send', function (files) {
          files.each(function (file) {
            // Reset the progress when a new upload starts:
            file.event('sendXHR', function () {
              fd.byID('bar_zone10').style.width = 0;
            });

            // Update progress when browser reports it:
            file.event('progress', function (current, total) {
              var width = current / total * 100 + '%';
              fd.byID('bar_zone10').style.width = width;
            });

            file.sendTo('upload.php');
          });
        });
    </script>
    
    <script type="text/javascript">
    var images = document.getElementsByTagName('img'); 

        $('img').click(function(e){
            $.modal(this,{
                autoResize: true,
                overlayClose:true,
                containerCss:{
                    backgroundColor:"#a10", 
                    borderColor:"#2D2D2D",
                    padding:0
                },
                onOpen: function (dialog) {
                    dialog.overlay.fadeIn('slow', function () {
                        dialog.data.hide();
                        dialog.container.fadeIn('slow', function () {
                            dialog.data.fadeIn('slow');	 
                        });
                    });
                },
                
                onClose: function (dialog) {
                    dialog.data.fadeOut('slow', function () {
                        dialog.container.fadeOut('slow', function () {
                            dialog.overlay.fadeOut('slow', function () {
                                $.modal.close();
                            });
                        });
                    });
                }    
            });
        });
    
    </script>
    
    <script src="js/jquery.validate.min.js"></script>

</body>
</html>