<head>

    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/webflow.css" rel="stylesheet" type="text/css">
    <link href="css/book-project-css.webflow.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
    WebFont.load({
        google: {
            families: ["PT Sans:400,400italic,700,700italic"]
        }
    });
    </script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">
    ! function(o, c) {
        var n = c.documentElement,
            t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
            .className += t + "touch")
    }(window, document);
    </script>
    <link href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
</head>
<?php
$currentPage = 'user';
require_once('header.php');
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    if ($token == 'logout') { ?>
<script>
cart = [];
localStorage.setItem('cart', JSON.stringify(cart));
</script>
<?php
    }
}
?>



<body>

    <div class="container-fluid my-5">
        <div class="row">
            <div class="card col-md-2 d-flex justify-content-center bg-dark text-white"
                style="transform: rotate(20deg); ; box-shadow: -25px -25px 500px goldenrod; z-index:0;font-family:impact;">
                <div class="col py-5 border border-1 px-1 my-2">
                    <img class="img-fluid" src="images/logo1.png" alt="">
                </div>
                <button type="button" class="btn btn-warning position-relative my-1">
                    Rated
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        1+
                    </span>
                </button>
                <p class="card text-dark p-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                    eligendi?
                    consectetur adipisicing elit. Expedita, eligendi? consectetur adipisicing
                </p>
            </div>
            <div class="col-md-1"> </div>
            <div class="col-md-7 book-wrap mt-1">
                <div class="left-side">
                    <div class="book-cover-left"></div>
                    <div class="layer1">
                        <div class="page-left"></div>
                    </div>
                    <div class="layer2">
                        <div class="page-left"></div>
                    </div>
                    <div class="layer3">
                        <div class="page-left"></div>
                    </div>
                    <div class="layer4">
                        <div class="page-left"></div>
                    </div>
                    <div class="layer-text">
                        <div class="page-left-2">
                            <div class="corner"></div>
                            <div class="corner2"></div>
                            <div class="corner-fold"></div>
                            <div class="page-text w-richtext">
                                <?php include('register.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="center"></div>
                <div class="right-side">
                    <div class="book-cover-right"></div>
                    <div class="layer1">
                        <div class="page-right"></div>
                    </div>
                    <div class="layer2 right">
                        <div class="page-right"></div>
                    </div>
                    <div class="layer3 right">
                        <div class="page-right"></div>
                    </div>
                    <div class="layer4 right">
                        <div class="page-right"></div>
                    </div>
                    <div class="layer-text right">
                        <div class="page-right-2">
                            <div class="page-text w-richtext">
                                <?php include('login.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"
        intergrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
    <script src="js/webflow.js" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
<?php
require_once('footer.php');
?>