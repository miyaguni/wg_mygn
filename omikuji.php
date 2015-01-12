<?php

	// array は 配列
	$lucky = array("大吉", "中吉", "小吉");
	$LUCKY = array("大吉", "中吉", "凶", "大凶");

	// shuffle で配列の順番をシャッフルしている
	shuffle($lucky);

	// 配列から適当にひとつ取ってくる
	$idx = array_rand($LUCKY);

	// 配列luckyの[0]番目(自然数1)を表示, /, 配列LUCKYあkらランダムで撮ってきた配列番号の中身を表示
	echo $lucky[0], "/", $LUCKY[$idx];

?>
