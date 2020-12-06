<?php
// composer 読み込む
require_once './vendor/autoload.php';

    SassCompiler::run("assets/scss/", "assets/css/");

// Twig 初期化
$loader = new \Twig\Loader\FilesystemLoader('./view');

$twig = new \Twig\Environment($loader, [
    'cache' => 'cache/compilation_cache',
]);

$data = array(
    'title' => 'cbt-nine',
    'message'  => '演習',
);

// render 出力
echo $twig->render('index.html.twig', ['data' => $data]);

?>
<a href="/view/question.html">クイズ</a>