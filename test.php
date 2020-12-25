<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<head>
<title>初めてのフォーム</title>
<link rel="stylesheet" href="stylesheet.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="javascript.js"></script>

</head>
<body>
<div class="contact-form">
<div class="form-title">お問い合わせフォーム
</div>

<form action="sent.php" method="post">
<div class="form-item">名前</div>
<input type="text" name="name">
<div class="form-item">生年月日</div>

<select name="century">
<option value="未選択">選択してくれ</option>
<?php
for($i=2020;$i>=1900;$i--){
echo "<option value='{$i}'>{$i}</option>";
}
?>
</select>年
<div class="form-item">月</div>

<select name="manth">
<option value="未選択">いつ生まれてん</option>
<?php
for($j=1;$j<=12;$j++){
echo "<option value='{$j}'>{$j}</option>";
}
?>
</select>月
<div class="form-item">日</div>

<select name="wether">
<option value="未選択">選択しとっとよ</option>
<?php
for($k=1;$k<=31;$k++){

echo "<option value='{$k}'>{$k}</option>";
}
?>
</select>日
<div class="form-item">メールアドレス</div>
<input type="email" name="email" size="30" maxlength="40" 
placeholder="haakasetarou@gmail.com" required tabindex>
<div class="form-item">パスワード</div>
<input type="password" name="password" maxlength="10" placeholder="半角英数8ケタ以上" required size="30" tabindex>
<div class="form-item">電話番号</div>
<input type="tel" name="tel" maxlength="12" placeholder="ハイフンあり:00-0000-0000"required tabindex size="30">


<div class="form-item">好きなアニメ</div>
<?php
$types=array('やはり俺の青春ラブコメはまちがっている','五等分の花嫁','ToLOVEる','この素晴らしい世界に祝福を！','かぐや様は告らせたい','俺の妹がこんなにかわいいわけがない');
?>

<select name="category">
<option value="未選択">選んでね！</option>
<?php
foreach($types as $type){
echo "<option value='{$type}'>{$type}</option>";
}
?>
</select><br>

<input type="file" name="file"><br>

<input type="color">

<div class="form-item">まあなんか書けよ</div>
<textarea name="ziyuu"></textarea>
<br>

<input type="submit" value="絶対押すなよ？">



</form>
</div>
<script src="javascript.js"></script>

</body>
</html>