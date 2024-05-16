<?php 
$name = "";
if (isset($_POST['name'])){
    $name = $_POST['name'];
}
$mail = "";
if (isset($_POST['mail'])){
    $mail = $_POST['mail'];
}
$name = "";
if (isset($_POST['age'])){
    $age = $_POST['age'];
}
$name = "";
if (isset($_POST['comments'])){
    $comments = $_POST['comments'];
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>contactform</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>お問い合わせフォーム</h1>
    <form method="post" action="mail_confirm.php">
        <div>
            <label>名前</label><br>
            <input type="text" class=text size="35" name="name"
                   value="<?= $name; ?>">
        </div>
        
        <div>
            <label>メールアドレス</label><br>
            <input type="text" class="text" size="35" name="mail" 
                   value="<?= $mail; ?>">
        </div>
        
        <div>
            <label>年齢</label><br>
            <select class="dorpdown" name="age">
                <option>
                    <?php
                    if (isset ($age)){
                        echo $age;
                    } else {
                        echo '選択してください';
                    }?>
                </option>
                <script>
                    let age = <?= $age ?>;
                    for (var i = 18; i <= 65; i++){
                        if (age == i) {
                            document.write("<option value=" + i+ " selected>" + i+ "歳</option>");
                        } else {
                            document.write("<option value=" + i+ ">" + i+ "歳</option>");
                        }
                    }                
                </script>
                <?php
                

                    // JS じゃなくて PHP で書いてみる
                ?>
            </select>        
        </div>
            
        <div>
            <label>コメント</label><br>
            <textarea cols="35" rows="7" name="comments" align="left"><? echo $comments; ?></textarea>
        </div>
        
        <div>
            <input type="submit" class="submit" value="送信する">
        </div>
    </form>
   
    
</body>

</html>