<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ラグビーアンケートフォーム</title>
</head>
<body>
    <!-- タイトル -->
    <h1>ラグビー🏉アンケート</h1>

    <!-- トップメッセージ -->
    <p id="a">
        今後のラグビー活性化、更なるファンの皆様へのサービス強化を目指しています。<br>
        アンケートへのご協力お願いいたします。
    </p>

    <form action="write.php" method="post">
        お名前 <input type="text" name="name" required><br>
        E-mail <input type="email" name="email" required><br>
        好きなチーム<br>
        <input type="text" name="team"><br>
        好きな選手<br>
        <input type="text" name="sensyu"><br>
        今後チームに期待すること<br>
        <textarea name="kitai1" rows="4" cols="50"></textarea><br>
        今後選手に期待すること<br>
        <textarea name="kitai2" rows="4" cols="50"></textarea><br>
        最後に一言メッセージをお願いします<br>
        <textarea name="memo" rows="10" cols="50"></textarea><br>

        <button type="submit">送信</button>
    </form>
</body>
</html>
