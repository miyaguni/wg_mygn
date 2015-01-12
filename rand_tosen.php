<?php

	$hm = array("生田斗真", "溝端淳平", "小栗旬", "阿部寛");
	// array_rand — 配列から一つ以上の要素(int型)をランダムに取得する
	$idx = array_rand($hm, 2);

	$temp = "当選は以下の２人です！<br />";

	// foreachはループ、$idxと$keyは同じ（という意味になる）
	foreach ($idx as $key) {

		// .= は連結代入演算子（左オペランドと右オペランドを合わせて左オペランドに代入）
		// 当選は•••！に 一人目が加わり、次に二人目が加わって、最後にechoでどん。
		$temp .= $hm[$key] ."<br />";
	}

	echo $temp;

?>
