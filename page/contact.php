<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="materialize is a material design based mutipurpose responsive template">
        <meta name="keywords" content="material design, card style, material template, portfolio, corporate, business, creative, agency">
        <meta name="author" content="trendytheme.net">

        <title>Contact Us</title>

        <!--  favicon -->
        <link rel="shortcut icon" href="../assets/img/ico/favicon.png">
        <!--  apple-touch-icon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/img/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/img/ico/apple-touch-icon-57-precomposed.png">


        
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
        <!-- FontAwesome CSS -->
        <link href="../assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Material Icons CSS -->
        <link href="../assets/fonts/iconfont/material-icons.css" rel="stylesheet">
        <!-- owl.carousel -->
        <link href="../assets/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
        <link href="../assets/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">
        <!-- flexslider -->
        <link href="../assets/flexSlider/flexslider.css" rel="stylesheet">
        <!-- materialize -->
        <link href="../assets/materialize/css/materialize.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- shortcodes -->
        <link href="../assets/css/shortcodes/shortcodes.css" rel="stylesheet">
        <!-- Style CSS -->
        <link href="../style.css" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body id="top" class="has-header-search">

        <!-- Top bar start-->
        <?php include 'page/header.php'; ?>
        <!--header end-->


        <!--page title start-->
        <section class="page-title ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Contact Us</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->
        <!-- contact-form-section -->
        <section class="section-padding">
          <div class="container">
              <div class="text-center mb-80">
                  <h2 class="section-title text-uppercase">Drop us a line</h2>
                  <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
              </div>
            <div class="row">
                <div class="col-md-8">
                    <form name="contact-form" id="contactForm" action="../sendemail.php" method="POST">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-field">
                            <input type="text" name="name" class="validate" id="name">
                            <label for="name">Name</label>
                          </div>

                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <div class="input-field">
                            <label class="sr-only" for="email">Email</label>
                            <input id="email" type="email" name="email" class="validate" >
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                          </div>
                        </div><!-- /.col-md-6 -->
                      </div><!-- /.row -->

                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-field">
                            <input id="phone" type="tel" name="phone" class="validate" >
                            <label for="phone">Phone Number</label>
                          </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <div class="input-field">
                            <input id="website" type="text" name="website" class="validate" >
                            <label for="website">Your Website</label>
                          </div>
                        </div><!-- /.col-md-6 -->
                      </div><!-- /.row -->

                      <div class="input-field">
                        <textarea name="message" id="message" class="materialize-textarea" ></textarea>
                        <label for="message">Message</label>
                      </div>

                      <button type="submit" name="submit" class="waves-effect waves-light btn submit-button pink mt-30">Send Message</button>
                    </form>
                </div><!-- /.col-md-8 -->

                <div class="col-md-4 contact-info">

                    <address>
                      <i class="material-icons brand-color">&#xE55F;</i>
                      <div class="address">
                        1355 Market Street, Suite 900<br>
                        San Francisco, CA 94103

                        <hr>

                        <p>Hoffman Parkway, P.O Box 154 Mountain View.<br>
                        United States of America.</p>
                      </div>

                      <i class="material-icons brand-color">&#xE61C;</i>
                      <div class="phone">
                        <p>Fax: (123) 456-7890<br>
                        Phone: (123) 456-7890</p>
                      </div>

                      <i class="material-icons brand-color">&#xE0E1;</i>
                      <div class="mail">
                        <p><a href="mailto:#">first.last@example.com</a><br>
                        <a href="#">www.yourdomain.com</a></p>
                      </div>
                    </address>

                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
          </div>
        </section>
        <!-- contact-form-section End -->


        <!-- map-section -->
        <div id="myMap" class="height-350"></div>
        <!-- /.map-section -->

        <?php include 'page/footer.php'; ?>

        <!-- jQuery -->
        <script src="../assets/js/jquery-2.1.3.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/materialize/js/materialize.min.js"></script>
        <script src="../assets/js/menuzord.js"></script>
        <script src="../assets/js/bootstrap-tabcollapse.min.js"></script>
        <script src="../assets/js/jquery.easing.min.js"></script>
        <script src="../assets/js/jquery.sticky.min.js"></script>
        <script src="../assets/js/smoothscroll.min.js"></script>
        <script src="../assets/js/jquery.stellar.min.js"></script>
        <script src="../assets/js/jquery.inview.min.js"></script>
        <script src="../assets/owl.carousel/owl.carousel.min.js"></script>
        <script src="../assets/flexSlider/jquery.flexslider-min.js"></script>
        <script src="../assets/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script src="../assets/js/scripts.js"></script>

        <!-- Google Map Customization  -->
        <script type="text/javascript">
            jQuery(document).ready(function() {

                //set your google maps parameters
                var $latitude = 40.716304, //Visit http://www.latlong.net/convert-address-to-lat-long.html for generate your Lat. Long.
                    $longitude = -73.995763,
                    $map_zoom = 16 /* ZOOM SETTING */

                //google map custom marker icon 
                var $marker_url = 'assets/img/pin.png';

                //we define here the style of the map
                var style = [{
                    "stylers": [{
                        "hue": "#03a9f4"
                    }, {
                        "saturation": 10
                    }, {
                        "gamma": 2.15
                    }, {
                        "lightness": 12
                    }]
                }];

                //set google map options
                var map_options = {
                    center: new google.maps.LatLng($latitude, $longitude),
                    zoom: $map_zoom,
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    streetViewControl: true,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    styles: style
                }
                //inizialize the map
                var map = new google.maps.Map(document.getElementById('myMap'), map_options);
                //add a custom marker to the map                
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng($latitude, $longitude),
                    map: map,
                    visible: true,
                    icon: $marker_url
                });

                var contentString = '<div id="mapcontent">' + '<p>materialize, 1355 Market Street, San Francisco.</p></div>';
                var infowindow = new google.maps.InfoWindow({
                    maxWidth: 320,
                    content: contentString
                });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });
            });
        </script>

    </body>
  
</html>