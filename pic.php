<?php
  session_start();

  if (isset($_POST["bitmap"])) {
    $bitmap = $_POST["bitmap"];
	//＊＊＊認証処理＊＊＊
	/*
    $pdo = new PDO("sqlite:myblog.sqlite");
    $st = $pdo->prepare("select * from user where username = ?;");
    $st->execute(array($username));
	$user_on_db = $st->fetch();
	*/
  }
	/*
  	echo "<pre>";
	var_dump($bitmap); //var_dump 配列の中身を出力する
	echo "</pre>";
	*/

  //画像読み込み
  $createimage = imagecreatetruecolor(480, 480);
  $bit = array();

  for($i=0; $i<16; $i++){
	$bit[$i] =imagecreatefromgif("pixel/".$i.".gif");
  }

  //bitmapを配列bitmap_arrayにいれる
	$bitmap_array = explode(",", $bitmap); 
	echo (count($bitmap_array)); //配列の数
	//print_r(gd_info()); PHP GD
	echo'<br>';
	for($i=0; $i<count($bitmap_array); $i++){ //1024
		echo $bitmap_array[$i]; //ID 15とか0とか

		imagecopy($createimage, $bit[$bitmap_array[$i]],($i%32)*15,intval($i/32)*15,0,0,15,15);
	}
		imagegif($createimage, "pixel/merged.gif");
		imagedestroy($createimage);
?>

<html><head><link rel="stylesheet" id="coToolbarStyle" href="chrome-extension://cjabmdjcfcfdmffimndhafhblfmpjdpe/toolbar/styles/placeholder.css" type="text/css">
<script type="text/javascript" id="cosymantecbfw_removeToolbar">
(function () {				var toolbarElement = {},					parent = {},					interval = 0,					retryCount = 0,					isRemoved = false;				if (window.location.protocol === 'file:') {					interval = window.setInterval(function () {						toolbarElement = document.getElementById('coFrameDiv');						if (toolbarElement) {							parent = toolbarElement.parentNode;							if (parent) {								parent.removeChild(toolbarElement);								isRemoved = true;								if (document.body && document.body.style) {									document.body.style.setProperty('margin-top', '0px', 'important');								}							}						}						retryCount += 1;						if (retryCount > 10 || isRemoved) {							window.clearInterval(interval);						}					}, 10);				}			})();
</script></head><body><center>

<title>ドット絵完成</title>
 	<link rel="stylesheet" type="text/css" href="style.css">

<h2>完成！</h2>
<!--ここでMini画像データを取得し、名前を付けて表示したい-->



<img src="pixel/merged.gif">
<script>console.log("コンソールできたよ！");
</script>

<br><br>
<a href="galerie.php">gallery</a>に保存されました. 
<br> また来てね！
<br><br>
<a href="sample6.php">新しく他の画像を作る</a>
<br><br>
</center>
</body></html>