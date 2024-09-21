<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ラグビーアンケートフォーム</title>
</head>
<body>
<!-- タイトル -->
<h1>ラグビーアンケート</h1>

<?php
// データ読み込み
$file = fopen("data1.csv", "r");
if ($file) {
    echo '<table border="1">';
    echo '<tr><th>お名前</th><th>E-mail</th><th>好きなチーム</th><th>好きな選手</th><th>チームに期待すること</th><th>選手に期待すること</th><th>一言メッセージ</th></tr>';
    
    // データを1行ずつ読み込んで表示
    while (($line = fgetcsv($file)) !== false) {
        echo '<tr>';
        
        // 行のデータが7列より少ない場合、空セルを追加
        for ($i = 0; $i < 7; $i++) {
            if (isset($line[$i])) {
                echo '<td>' . htmlspecialchars($line[$i]) . '</td>';
            } else {
                echo '<td></td>'; // 足りない部分は空セル
            }
        }
        
        echo '</tr>';
    }
    
    echo '</table>';
    fclose($file);
} else {
    echo "<p>Error: ファイルを読み取ることができません</p>";
}
?>

</body>
</html>


