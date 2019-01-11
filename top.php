<?php
  session_start();

  if (isset($_POST["bitmap"]) && isset($_POST["info"])) {
	$bitmap = $_POST["bitmap"];
	$info = $_POST["info"];
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
/*
  $db = new PDO("sqlite:works.sqlite");
  $result=$db->query("SELECT * FROM works");
  for($i=0; $row=$result->fetch(); $i++){
      echo "<tr valign=center>";
      echo "<td>". $row['id']."</td>";
      echo "<td>". $row['info']."</td>";
      echo "<td>". $row['user']."</td>";
      echo "</tr>";
  }*/

  $db = new PDO("sqlite:works.sqlite");
  $result=$db->query("SELECT * FROM works");
  for($i=0; $row=$result->fetch(); $i++){
      echo "<tr valign=center>";?>
      <img src= <?php echo "img/". $row['id'].".gif"?> width="150" height="150"><?php
      echo "<br><td>". $row['info']."</td>";
      echo "<br><td>". $row['user']."</td>";
      echo "</tr>";
  }

  //画像読み込み
  $createimage = imagecreatetruecolor(480, 480);
  $bit = array();

  for($i=0; $i<16; $i++){
	$bit[$i] =imagecreatefromgif("pixel/".$i.".gif");
  }
	echo'<br>';
?>

<html><head><link rel="stylesheet" id="coToolbarStyle" href="chrome-extension://cjabmdjcfcfdmffimndhafhblfmpjdpe/toolbar/styles/placeholder.css" type="text/css">
<script type="text/javascript" id="cosymantecbfw_removeToolbar">
(function () {				var toolbarElement = {},					parent = {},					interval = 0,					retryCount = 0,					isRemoved = false;				if (window.location.protocol === 'file:') {					interval = window.setInterval(function () {						toolbarElement = document.getElementById('coFrameDiv');						if (toolbarElement) {							parent = toolbarElement.parentNode;							if (parent) {								parent.removeChild(toolbarElement);								isRemoved = true;								if (document.body && document.body.style) {									document.body.style.setProperty('margin-top', '0px', 'important');								}							}						}						retryCount += 1;						if (retryCount > 10 || isRemoved) {							window.clearInterval(interval);						}					}, 10);				}			})();
</script></head><body><center>

<title>ドット絵完成</title>
 	<link rel="stylesheet" type="text/css" href="style.css">

<h1>ギャラリー</h1>
<!--$infoは$idに-->

<script>console.log("コンソールできたよ！");
</script>
<br><br>
<a href="sample6.php">新しく画像を作る</a>
<br><br>
</center>
</body></html>