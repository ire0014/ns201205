<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http;//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
		<title>GETとPOSTの違い</title>
	</head>
	
	<body>
		<p>GETとPOSTのリクエストの識別</p>
		
		<form method="GET" action="<?php print($_SERVER['SCRIPT_NAME']) ?>">
			<input type="text" name="getdata"><br>
			<input type="submit" name="button" value="GETで送信">
		</form>
		
		<form method="POST" action="<?php print($_SERVER['SCRIPT_NAME']) ?>">
			<input type="text" name="postdata"><br>
			<input type="submit" name="button" value="POSTで送信">
		</form>
		
		<?php
			if($_SERVER['REQUEST_METHOD'] != "POST"){
				echo("GETのリクエストです！");
			} else {
				echo("POSTのリクエストです！");
			}
		?>
		
	</body>
</html>