<?php

$name = $_POST['name'];
$mail = $_POST['mail'];
$age = $_POST['age'];
$comments = $_POST['comments'];

?>

<!DOCTYPE html>
<html lamg="ja">

<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <h1>お問い合わせ内容確認</h1>
        
    <div class="confirm">
        <p>お問い合わせ内容はこちらでよろしいでしょうか？
            <br>よろしければ「送信する」ボタンを押してください。
        </p>
        <p>名前
            <br>
            <?php echo $name; ?>
        </p>
        
        <p>メールアドレス
            <br>
            <?php echo $mail; ?>
        </p>
        <p>年齢
            <br>
            <?php echo $age; ?>歳
        </p>
        <p>コメント
            <br>
            <?php echo $comments; ?>
        </p>
        
        <form action="index.php" method="post">
            <input type="submit" class="button1" value="戻って修正する">
            <input type="hidden" name="name" value=<?php echo $name; ?>>
            <input type="hidden" name="mail" value=<?php echo $mail; ?>>
            <input type="hidden" name="age" value=<?php echo $age; ?>>
            <input type="hidden" name="comments" value=<?php echo $comments; ?>>
        </form>
                                                                  
        <form action="insert.php" method="post">
            <input type="submit" class="button2" value="登録する">
            <input type="hidden" name="name" value=<?php echo $name; ?>>
            <input type="hidden" name="mail" value=<?php echo $mail; ?>>
            <input type="hidden" name="age" value=<?php echo $age; ?>>
            <input type="hidden" name="comments" value=<?php echo $comments; ?>>
        </form>
                                                                            
    </div>    
</body>
</html>