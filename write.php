<?php

// エラーレポートの設定
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// POSTデータを取得
$name   = $_POST["name"];
$email  = $_POST["email"];
$team   = $_POST["team"];
$sensyu = $_POST["sensyu"];
$kitai1 = $_POST["kitai1"];
$kitai2 = $_POST["kitai2"];
$memo   = $_POST["memo"];

// カンマをエスケープするためにダブルクォートで囲む処理
$data = [
    $name,
    $email,
    $team,
    $sensyu,
    $kitai1,
    $kitai2,
    $memo
];

// CSV行として書き込み
$file = fopen("data1.csv", "a");
if ($file) {
    // 配列をCSV形式で書き込む
    fputcsv($file, $data);
    fclose($file);
} else {
    echo "ファイルが開けませんでした";
    exit;
}

// 保存後、index.phpにリダイレクト
header("Location: index.php");
exit;

?>


