<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<head>
<title>初めてのjavascript</title>
<link rel="stylesheet" href="stylesheet.css">

<script type="text/JavaScript">
alert("こんにちは");
alert("今晩は");

</script>

</head>
<body>
<div class="contact-form">
<div class="form-title">お問い合わせフォーム</div>
<form action="sent.php" method="post">
<div class="form-item">名前</div>
<input type="text" name="name">
<div class="form-item">生年月日</div>

<select name="century">
<option value="未選択">選択してくれ</option>
<?php
for($i=2020;$i>=1900;$i--){
echo "<option value='{$i}'>{$i}</option>".'<br>'

?>

</form>
</div>


</body>
</html>