<?php
    //$dsn = 'mysql:host=localhost;dbname=';
    //$dbUser = "root";
    //$dbPW = "";

    $dbh = new PDO($dsn, $dbUser, $dbPW);

    $sql = "SELECT date, time, timing, high, low, bpm, temp FROM main ORDER BY id DESC";
    $stmt = $dbh->query($sql);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>履歴 / イェソド</title>
    <link rel="stylesheet" href="css/history.css"/>
    <!-- <script src="js/input_high.js"></script> -->
</head>
    <header>
        <h1>
            <a id="title">履歴</a>
        </h1>
        <nav class="pc-nav">
        <a id="Rew" href="index.php">戻る</a>
        </nav>
    </header>

<body>
    <?php
        echo "<table class=\"design12\">\n";
        echo "\t<tr><th>日付</th><th>時刻</th><th>タイミング</th><th>最高血圧</th><th>最低血圧</th><th>心拍数</th><th>体温</th></tr>\n";
        while( $result = $stmt->fetch( PDO::FETCH_ASSOC ) ){
            echo "\t<tr>\n";
            echo "\t\t<td>{$result['date']}</td>\n";
            echo "\t\t<td>{$result['time']}</td>\n";
            echo "\t\t<td>{$result['timing']}</td>\n";
            echo "\t\t<td>{$result['high']}</td>\n";
            echo "\t\t<td>{$result['low']}</td>\n";
            echo "\t\t<td>{$result['bpm']}</td>\n";
            echo "\t\t<td>{$result['temp']}</td>\n";
            echo "\t</tr>\n";
        }
        echo "</table>\n";
    ?>

    
    <script src="js/input_high.js"></script>
</body>
</html>