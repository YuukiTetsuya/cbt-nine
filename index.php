<?php
// composer 読み込む
require_once './vendor/autoload.php';

    SassCompiler::run("assets/scss/", "assets/css/");

// Twig 初期化
$loader = new \Twig\Loader\FilesystemLoader('./view');

$twig = new \Twig\Environment($loader, [
    'cache' => 'cache/compilation_cache',
]);

$top = array(
    'title' => 'cbt-nine',
    'contentsname'  => '令和3年度 春期 基本情報技術者試験 模擬試験',
    'test_question'  => '問題数：',
    'test_timelimit'  => '試験時間：',
    'test_number'  => '問題番号：',
    'test_type'  => '出題形式：',
);

$template = $twig->load('index.html.twig');
// render 出力
echo $template->render(
    ['top' => $top],
);

?>
<a href="/view/question.html">クイズ</a>