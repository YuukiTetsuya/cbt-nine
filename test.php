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
    <?php 
    function hoge($foo = 'foo', $bar= false, $baz=0, $qux = ''){
        echo $foo."<br/>";
        echo $qux;
    }
    
    hoge(qux: 'qux');
    hoge(foo: 'foo2', qux: 'qux2');
    ?>
</body>
</html>