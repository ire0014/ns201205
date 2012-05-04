<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	<body>
<?php
	// ---デバッグ用表示
	echo "<h1>GETで受け取ったデータ配列の一覧</h1>";
	// フォームからGETできたデータの配列一覧
	print_r($_GET);
	
	echo "<h1>POSTで受け取ったデータ配列の一覧</h1>";
	// フォームからPOSTで来たデータの配列一覧
	print_r($_POST);
	echo "<hr />";
	
	// ---デバッグ表示用ここまで
	
	// POSTで送信された場合は$_GETを$_POSTに書き換える
	// name=txt_aの欄から受け取ったデータ
	//echo "名前は".$_GET[txt_a]."です<hr />";
	echo "名前は".$_POST[txt_a]."です<hr />";
	
	// name=txt_bの欄から受け取ったデータ
	//echo "住所は".$_GET[txt_b]."です<hr />";
	echo "住所は".$_POST[txt_b]."です<hr />";
	
	// ラジオボタンから受け取ったデータ
	//echo "性別は".$_GET[rd_a]."です<hr />";
	echo "性別は".$_POST[rd_a]."です<hr />";
?>
	</body>
	
</html>