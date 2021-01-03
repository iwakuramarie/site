<?php
$title = "connect";
$tags = "connect";
$root = "";
require $root."includes/start-meta.php";
?>
    <link rel="stylesheet" href="styles/splash.css" />
    <link rel="stylesheet" href="styles/fonts.css" />
    <link rel="stylesheet" href="styles/cursor.css" />
    <style type="text/css">
        html, body {margin: 0; height: 100%; overflow: hidden}
    </style>
</head>
<body>
    <h1><span><a href="home.php">~$>ssh marie@iwakura.rf.gd</a></span></h1>

    <?php
    $usragent=$_SERVER['HTTP_USER_AGENT'];
    if (!strpos($usragent, 'PaleMoon') !== false) {
        echo '<p style="position: absolute; right: 10px; bottom: 10px;"><a href="scrollbar.php">Display Scrollbar on this Site</a></p>';
    }
    ?>
</body>
</html>
