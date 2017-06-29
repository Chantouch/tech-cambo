<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="materialize is a material design based mutipurpose responsive template">
    <meta name="keywords"
          content="material design, card style, material template, portfolio, corporate, business, creative, agency">
    <meta name="author" content="trendytheme.net">

    <title>Homepage 2</title>

    <!--  favicon -->
    <link rel="shortcut icon" href="assets/img/ico/favicon.png">
    <!--  apple-touch-icon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/img/ico/apple-touch-icon-57-precomposed.png">


    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <!-- Material Icons CSS -->
    <link href="assets/fonts/iconfont/material-icons.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- magnific-popup -->
    <link href="assets/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- owl.carousel -->
    <link href="assets/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="assets/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <!-- flexslider -->
    <link href="assets/flexSlider/flexslider.css" rel="stylesheet">
    <!-- materialize -->
    <link href="assets/materialize/css/materialize.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- shortcodes -->
    <link href="assets/css/shortcodes/shortcodes.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="style.css" rel="stylesheet">


    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="top" class="has-header-search">
<?php include 'page/header.php'; ?>
<!-- start revolution slider 5.0 -->

<?php
        if(isset($_GET["page"])){
            $page = $_GET["page"];
            include ("page/".$page.".php");
        }else{
            include ("page/home.php");
        }
?>


<?php include 'page/footer.php'; ?>


<script src="assets/js/jquery-2.1.3.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/materialize/js/materialize.min.js"></script>
<script src="assets/js/menuzord.js"></script>
<script src="assets/js/bootstrap-tabcollapse.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/jquery.sticky.min.js"></script>
<script src="assets/js/smoothscroll.min.js"></script>
<script src="assets/js/imagesloaded.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/jquery.inview.min.js"></script>
<script src="assets/js/jquery.shuffle.min.js"></script>
<script src="assets/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/flexSlider/jquery.flexslider-min.js"></script>
<script src="assets/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/js/scripts.js"></script>

<!-- RS5.0 Core JS Files -->
<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- RS5.0 Init  -->
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery(".materialize-slider").revolution({
            sliderType: "standard",
            sliderLayout: "fullwidth",
            delay: 9000,
            navigation: {
                keyboardNavigation: "on",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    style: "gyges",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: true,
                    tmp: '',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 10,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 10,
                        v_offset: 0
                    }
                }
            },
            responsiveLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [700, 600, 500, 500],
            disableProgressBar: "on",
            parallax: {
                type: "mouse",
                origo: "slidercenter",
                speed: 2000,
                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
            }
        });
    });
</script>


<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->

<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript"
        src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

</body>

</html>