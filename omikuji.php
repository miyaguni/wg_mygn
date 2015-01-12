<?php

	// array は 配列
	$lucky = array("大吉", "中吉", "小吉", "凶");

	// shuffle で配列の順番をシャッフルしている
	shuffle($lucky);

	// 配列luckyの[0]番目(自然数1)を表示
	echo $lucky[0];
	
?>