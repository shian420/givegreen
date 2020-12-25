<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<head>
<title>フィッシングでーーす</title>
<link rel="stylesheet" href="stylesheet.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>
<body>
<header id="header">
<div class="container">
<div class="header-left">
<div class="header-logo"><img src="hhh.png" alt="ヘッダーロゴ"></div>

<div id="list" class="header-list">
<ul>
  <li>★ マリオンとは</li>
  <li>● シアン</li>
  <li>&#x26a0 黒歴史</li>
  <li>&#x25b6 ムービー</li>
  <li>&#x1f51e おまけ</li>
</ul>
</div>
<div class="header-right">
<div id="login-show" class="login">ログイン</div>
</div>
</div>
</header>


<div class="login-modal-wrapper" id="modal-wrapper">
<div class="modal">
<div id="login-form">
<h2>ログイン・・・しよ？</h2>
<form action="sent2.php" method="post">
<input class="email" type="email" name="email" placeholder="メールアドレス" maxlength="40">
<input class="password" type="password" name="password" placeholder="パスワード" maxlength="10">
<input class="submit" type="submit" value="個人情報を流出する">

</form>
</div>
</div>
</div>

<div class="contener">
<img src="コンテンツヘッダ.png" alt="実況ヘッダー">
</div>

<div id="form-area">
<div class="content">

<div class="thanks-message">ご入会ありがとうございました！</div>
<p class="mamama">３日以内に指定の口座へ現金<span>20万円</span>をお振り込みください。<br>
支払われない場合、法的措置をとらせていただきます。<br>
だから押すなって言ったやん。まあYouTuberなったらすぐ稼げるし頑張れや。３日じゃ無理か！うける～</p>
<br>
<div id="sanple" class="btn">→グリーン登場ボタン←</div>
<div id="sanple1" class="btn">すべてが消えるボタン</div>
</div>

<div class="form-center">
<div class="form-item">■名前</div>
<?php
echo $_POST["name"];
?>
<div class="form-item">■生年月日</div>
<?php
echo $_POST["century"].'<br>';
?>
<div class="form-item">■月</div>
<?php
echo $_POST["manth"].'<br>';
?>
<div class="form-item">■日</div>
<?php
echo $_POST["wether"].'<br>';
?>

<div class="form-item">■メールアドレス</div>
<?php
echo $_POST["email"].'<br>';
?>
<div class="form-item">■パスワード</div>
<?php
echo $_POST["password"].'<br>';
?>

<div class="form-item">■電話番号</div>
<?php
echo $_POST["tel"].'<br>';
?>

<div class="form-item">■選択肢にない？なんか選べ</div>
<?php
echo $_POST["category"].'<br>';
?>
<div class="form-item">■こんなこと書くなよ</div>
<?php
echo $_POST["ziyuu"];
?>
</div>
</div>

<script src="javascript.js"></script>

</body>
</html>