<?php
mb_internal_encoding("utf8");

session_start();

if (!isset($_SESSION['handlename'])) {
    $_SESSION['handlename'] = 1;
} else {
    $_SESSION['handlename'] = $_POST['handlename'];
}

if (!isset($_SESSION['title'])) {
    $_SESSION['title'] = 1;
} else {
    $_SESSION['title'] = $_POST['title'];
}

if (!isset($_SESSION['comments'])) {
    $_SESSION['comments'] = 1;
} else {
    $_SESSION['comments'] = $_POST['comments'];
}

$alert = "<script type='text/javascript'>alert('未入力の項目があります');</script>";

if (($_SESSION['handlename'] === '')||($_SESSION['title'] === '')||($_SESSION['comments'] === '')) {
    echo $alert;
}

$pdo = new PDO("mysql:dbname=lesson01; host=localhost;" ,"root" , "mysql");
$stmt = $pdo->query("select * from diworks_keijiban");

?>

<!DOCTYPE html>
<html lang="ja">
    
<head>
    <meta charset="UTF-8">
    <title>diworksblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>
    
<body>
    <header>
        <div class="logo">
        <img src="diblog_logo.jpg">
        </div>
        <div class="menu">
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>D.I.Blog について</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </div>
    </header>
    <main>
        <div class="main-container">
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>

                <form method="post" action="insert.php">
                    <p>入力フォーム</p>
                    <div>
                        <label>ハンドルネーム</label><br>
                        <input type="text" class="text" size="35" name="handlename">
                    </div>
                    <div>
                        <label>タイトル</label><br>
                        <input type="text" class="text" size="35" name="title">
                    </div>
                    <div>
                        <label>コメント</label><br>
                        <textarea cols="50" rows="7" name="comments"></textarea>                    
                    </div>
                    <div>
                        <input type="submit" class="submit" value="送信する">
                    </div>
                </form>
                <?php
                
                if (isset($_POST['post_btn'])) {
                    if (isset($_POST['title']) && $_POST['title'] != '') {
                        $_SESSION['title'] = $_POST['title'];
                    } else {
                        unset($_SESSION['title']);
                    }
                    if (isset($_POST['comments']) && $_POST['comments'] != '') {
                        $_SESSION['comments'] = $_POST['comments'];
                    } else {
                        unset($_SESSION['comments']);
                    }
                    if (isset($_POST['handlename']) && $_POST['handlename'] != '') {
                        $_SESSION['handlename'] = $_POST['handlename'];
                    } else {
                        unset($_SESSION['handlename']);
                    }
                }
                                
                while ($row = $stmt->fetch()){
                    echo '<div class="kiji">';
                    echo '<h3>'.$row["title"].'</h3>';
                    echo '<div class="contents">';
                    echo $row["comments"];
                    echo '<div class="handlename">posted by '.$row["handlename"].'</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>

            <div class="right">
                <h2>人気の記事</h2>
                <div class="box3">
                    PHPオススメ本<br>
                    PHP　MyAdminの使い方<br>
                    いま人気のエディタTops<br>
                    HTMLの基礎
                </div>
                <h2>オススメリンク</h2>
                <div class="box3">
                    ﾃﾞｨｰｱｲﾜｰｸｽ株式会社<br>
                    XAMPPのダウンロード<br>
                    Eclipseのダウンロード<br>
                    Braketsのダウンロード<br>
                </div>
                <h2>カテゴリ</h2>
                <div class="box3">
                    HTML<br>
                    PHP<br>
                    MySQL<br>
                    JavaScript                    
                </div>
            </div>
        </div>
    </main>
    <fotter>
        <div class="fot">
            Copyright D.I.works| D.I. blog is the one which provides A to Z about programming
        </div>
    </fotter>    
</body>
</html>