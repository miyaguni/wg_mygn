<html lang="ja">
<head>
<meta charset="utf-8">
<title>PHP TEST</title>
</head>

<body>


<?php
$input_data = (int)$_POST['text1'];

if ($input_data == 40){
	print('正解だよ！おめ！');
}else{
	print('残念！もう一回！');

	print('<p>');
	print('問題：10×4=');
	print('</p>');
	print('<form method="POST" action="./A2.php">');
	print('<input type="text" name="text1">');
	print('<input type="submit" name="btn1" value="回答">');
	print('</form>')
}
?>

</body>
</html>