<html lang="ja">
<head>
<meta charset="utf-8">
<title>PHP TEST</title>
</head>
<body>

<?php

$input_data = $_GET['text1'];
print('入力した値：'.$input_data.'<br>');
print('帰ってきた値の型：'.gettype($input_data));
?>

<!--正解の判定とかできそう-->

</body>
</html>