<?php
if (isset($_GET['message'])) {
	//　フォントと画像を読み込み、テキストの横幅を計算
	$font = "times";
	$size = 12;
	$image = imagecreatefrompng("button.png");
	$tsize = imagettfbbox($size, 0, $font, $_GET['message']);

	//　中央を求める
	$dx = abs($tsize[2] - $tsize[0]);
	$dy = abs($tsize[5] - $tsize[3]);
	$x = (imagesx($image) - $dx) / 2;
	$y = (imagesy($image) - $sy) / 2 + $dy;

	//　テキストを描画
	$black = imagecolorallocate($im, 0, 0, 0);
	imagettftext($image, $size, 0, $x, $y, $black, $font, $_GET['message']);

	// 画像を返す（画像が返せていない、ここが怪しい？それともPCの設定的な部分？）
	header("Content-type: image/png");
	imagepng($image);

	exit;
} ?>

<html>
	<head>
		<title>Buttom Form</title>
	</head>

	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
			Enter message to appear on buttom:
			<input type="text" name="message" /><br />
			<input type="submit" value="Create Buttom" />
		</form>
	</body>
</hyml>