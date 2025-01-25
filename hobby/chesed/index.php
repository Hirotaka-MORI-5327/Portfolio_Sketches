<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>メイン / イェソド</title>
    <link rel="stylesheet" href="css/main.css"/>
</head>
<body>
    <h1>メインメニュー</h1>
    <div id="btn_Input">
        <button id="btn_MAIN_Input" onclick="location.href='input_high.html'">入力</button>
    </div>
    <div id="btn_Hystory">
        <button id="btn_MAIN_History" onclick="location.href='history.php'">履歴</button>
    </div>

    <br/>

    
    <div id="text_LastInput">
        最後の入力
        <br/>
        <?php
        //$dsn = 'mysql:host=localhost;dbname=';
        //$dbUser = "";
        //$dbPW = "";


        $dbh = new PDO($dsn, $dbUser, $dbPW);

        $n = $dbh -> query("SELECT * FROM main ORDER BY id DESC LIMIT 1");
        
        while($row = $n->fetch()){
            print "$row[date] <br/> $row[time] <br/> \n";
        }
        
        $dbh = null;
        ?>
    </div>
    

</body>
</html>