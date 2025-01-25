<?php
    $var_Get_high = "140";
    $var_Get_low = "100";
    $var_Get_bpm = "70";
    $var_Get_temp = "35.5";
    $var_Bool_DataGet = "false";

    //$dsn = 'mysql:host=localhost;dbname=';
    //$dbUser = "";
    //$dbPW = "";
    
    if(isset($var_Get_high, $var_Get_low, $var_Get_bpm, $var_Get_temp)){
        $var_Bool_DataGet = "true";
    } else {
        $var_Bool_DataGet = "false";
    }
    
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>書き込み中... / イェソド</title>
    </head>
    <body>
        書き込み中です...
        <br/>
        --------------
        <br/>
        DATA: <?php echo $var_Bool_DataGet; ?>
        <br/>
        HIGH: <?php echo $var_Get_high; ?>
        <br/>
        LOW: <?php echo $var_Get_low; ?>
        <br/>
        BPM: <?php echo $var_Get_bpm; ?>
        <br/>
        TEMP: <?php echo $var_Get_temp; ?>
    </body>
</html>

<?php
    if($var_Bool_DataGet == "true"){

        $date = date("Y/m/d");
        $time = date("H:i:s");
        $hour = date("H");
        print_r($date.$time);
        
        switch($hour){
            case 0:
            case 1:
            case 2:
            case 3:
                $timing = "深夜";
                break;
            case 4:
                $timing = "早朝";
                break;
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
            case 10:
            case 11:
                $timing = "朝";
                break;
            case 12:
            case 13:
            case 14:
            case 15:
                $timing = "昼";
                break;
            case 16:
            case 17:
            case 18:
            case 19:
            case 20:
                $timing = "夕";
                break;
            case 21:
            case 22:
            case 23:
                $timing = "夜";
                break;
        }


        
    try{
        $dbh = new PDO($dsn, $dbUser, $dbPW);
        /*
        foreach($dbh->query('SELECT * from main') as $row){
            print_r($row);
        }
        */

        $dbh->query("INSERT INTO main (date, time, timing, high, low, bpm, temp) VALUES ('$date', '$time', '$timing', '$var_Get_high', '$var_Get_low', '$var_Get_bpm', '$var_Get_temp')");


        $dbh = null;
    } catch (PDOException $e){
        echo "PDO FAILED!!".$e->getMessage()."<br/>";
        die();
    }

    }
?>