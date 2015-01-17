<?php
	$num = 12; //パスワードの文字数(12文字に設定)
	$ar1 = range('a','z'); //小文字のアルファベットを配列に入れる
	$ar2 = range('A','Z'); //大文字のアルファベットを配列に入れる
	$ar3 = range('0','9'); //数字を配列に入れる
	$ar_all = array_merge($ar1,$ar2,$ar3); //全て統合する
	shuffle($ar_all); //まぜまぜする
	echo substr(implode($ar_all),0,$num); //先頭の12文字を表示,substrは文字列の一部分を返す
?>