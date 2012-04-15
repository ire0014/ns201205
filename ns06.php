<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http;//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<?php
	function title($name = "Webプログラミング"){
		return("4月は". $name. "を学習しよう<br>");
	}
	
	echo title();
	echo title("オブジェクト指向");
?>
</html>
