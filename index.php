<!DOCTYPE html>

<head>
    <script>
        (function (H) {
            H.className = H.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement)
    </script>
    <meta charset="utf-8">
    <style>
        .js #features {
            margin-left: -12000px;
            width: 100%;
        }
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>DOST-IX</title>
    <meta name="description" content="Science for the People: Stories of Resilience in the Face of the COVID Pandemic (in the Countryside)">
    <meta name="author" content="DOST-IX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="https://sftp-epub.dost9.ph/images/dotcom.jpg">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:url" content="https://sftp-epub.dost9.ph"/>
    <meta property="og:title" content="Science for the People" />
    <meta property="og:description" content="Stories of Resilience in the Face of the COVID Pandemic (in the Countryside)" />

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/wow_book.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/preview.css">
    <link rel="stylesheet" href="css/slides.css">
    <link href='//fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/icon.ico">
    <script src="js/modernizr-1.6.min.js"></script>

</head>

<body>
    <div id="container">

        <div id="main">
            <img id='click_to_open' src="images/click_to_open.png" alt='click to open' />

            <div id='features'>
                <div id='cover'></div>
                <?php 
                    for($x=1; $x<=62; $x++){
                        echo '<div id="a'.$x.'"></div>';
                    }
                ?>
                <div id="end"></div>
            </div>
        </div>  

        <a href=""><img id='backe' src="images/icons/b.png" alt='click to open' /></a>
        <a href=""><img id='nexte' src="images/icons/n.png" alt='click to open' /></a>

        <nav>
            <ul>
                <li><a id='download' href="pdf/sftp.pdf" download title='Download'>Download</a></li>
                <li><a id='zoomin' href="#" title='Zoom in'>Zoom In</a></li>
                <li><a id='zoomout' href="#" title='Zoom out'>Zoom Out</a></li>
                <li><a id='flipsound' href="#" title='flip sound on/off'>Flip sound</a></li>
                <li><a id='fullscreen' href="#" title='fullscreen on/off'>Fullscreen</a></li>
            </ul>
        </nav>
    </div>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="wow_book.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#features').wowBook({
                    height: '100vh',
                    width: '100%',
                    centeredWhenClosed: true,
                    hardcovers: true,
                    turnPageDuration: 1000,
                    numberedPages: [1, -2],
                    mouseWheel : "zoom",
                    pageNumbers : false,
                    controls: {
                        zoomIn: '#zoomin',
                        zoomOut: '#zoomout',
                        next: '#nexte',
                        back: '#backe',
                        first: '#first',
                        last: '#last',
                        slideShow: '#slideshow',
                        flipSound: '#flipsound',
                        thumbnails: '#thumbs',
                        fullscreen: '#fullscreen'
                    },
                    scaleToFit: "#container",
                    thumbnailsPosition: 'bottom',
                    onFullscreenError: function () {
                        var msg = "Fullscreen failed.";
                        if (self != top) msg =
                            "The frame is blocking full screen mode. Click on 'remove frame' button above and try to go full screen again."
                        alert(msg);
                    }
                }).css({
                    'display': 'none',
                    'margin': 'auto'
                }).fadeIn(1000);

                $("#cover").click(function () {
                    $.wowBook("#features").advance();
                });

                var book = $.wowBook("#features");

            });
        </script>

        <script src="js/plugins.js"></script>
        <script src="js/script.js"></script>
     

</body>

</html>