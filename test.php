<?php
require 'vendor/autoload.php';

    SassCompiler::run("assets/scss/", "assets/css/");
?>
<html>
<head>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>
<body>
    <div class="main">
        <p class="rotate">hello php-sass</p>
    </div>
</body>
</html>