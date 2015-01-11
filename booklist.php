<?php 

$db = new mysqli("アクセス先のサーバ", "ユーザ名", "パスワード", "アクセス先のDB");

// 上で設定した接続情報が正しいことを確認する
if ($db->connect_error) {
	die("Connect Error ({$db->connect_errno}) {$db->connect_error} ");
}

$sql = "SELECT * FROM books WHERE available = 1 ORDER BY title";
$result = $db->query($sql);

?>

<html>
<body>

<table cellSpacing="2" cellPadding="6" align="center" border="1">
	<tr>
		<td colspan="4">
			<h3 align="center">These Books are currently avairable</h3>
		</td>
	</tr>

	<tr>
		<td align="center">Title</td>
		<td align="center">Year Published</td>
		<td align="center">ISBN</td>
	</tr>

	<?php while ($show = $result->fetch_assoc()) { ?>
		<tr>
			<td><?php echo stripslashes($row['title']); ?></td>
			<td align="center"><?php echo $row['pub_year']; ?></td>
			<td><?php echo $row['ISBN']; ?></td>
		</tr>
	<?php } ?>
</table>

</body>
</html>
