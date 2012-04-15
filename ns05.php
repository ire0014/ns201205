<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http;//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>PHPの変数や配列</title>
	</head>
	<body>
		<p>PHPのコードはHTML文書の中に<?php echo("埋め込む"); ?> ことができます</p>
		
		<?php
			$a = "ソフトウェア";
			echo("$a<br>\n");
			
			$var1 = array("web", "プログラミング", "入門");
			
			for($i = 0; $i < count($var1); $i++){
				echo($var1[$i]);
			}
			
			echo("<br>\n");]
			
			$var2 = array("key1" => "HTML", "key2" => "PHP", "key3" => "CSS3.0");
			
			foreach($var2 as $key => $value){
				echo("$key : $value<br>\n");
			}
		?>
	</body>
</html>