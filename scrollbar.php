<?php
$title = "Show Scrollbar";
$tags = "CSS, scrollbar";
$root = "";
setcookie("scrollbar", "true", time() + (86400 * 30), "/"); // 86400 = one day
require $root."includes/start-meta.php";
?>
    <link rel="stylesheet" href="styles/splash.css" />
    <link rel="stylesheet" href="styles/fonts.css" />
    <link rel="stylesheet" href="styles/cursor.css" />
    <style>
        html, body {margin: 0; height: 100%; overflow: hidden}
    </style>
</head>
<body>
    <h1>Display Scrollbar on iwakura Site</h1>

    <div style="width: 80%; text-align: center; margin-left: auto; margin-right: auto;">
    <p>iwakura site hides the scrollbar on purpose for style.</p>

    <p>Because of this, browser Pale Moon can not render iwakura site because of the scrollbar hiding. I try to fix this by detecting a Pale Moon user agent and writing specific CSS, but some users spoof their user agents, which is ok, but if you are one of these users, or you use a browser I do not know of with the same problem, or you just like sites with scrollbars better, using this lets you view iwakura site with a scrollbar.</p>

    <p><b>Warning</b> this uses cookies. Your browser should be able to use first-party cookies. This cookie is anonymous, it says only you have been to iwakura site. It has no logged place.</p>

    <p>You can turn off this by entering 'document.cookies="scrollbar=false"' into your browser's console for JavaScript or clearing the cookies yourself or automatic. It will auto delete 30 days after your visit of this page.</p>

    <a style="font-size: 1.8em;" href="home.php">Continue to Homepage</a>
    </div>
</body>
</html>
