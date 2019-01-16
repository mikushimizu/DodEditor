<?php
  session_start();
	if(isset($_POST['id'])&&isset($_POST['info'])&&isset($_POST['user'])){
		$id=$_POST['id'];
		$info=$_POST['info'];
		$user=$_POST['user'];
		$pdo=new PDO("sqlite:works.sqlite");
		$st=$pdo->prepare("INSERT INTO works(id, info, user) VALUES(?, ?, ?)");
		$st->execute(array($id, $info, $user));
		$_SESSION["id"]=$id;
		$_SESSION["info"]=$info;
		$_SESSION["user"]=$user;
	}

  if (isset($_POST["bitmap"]) && isset($_POST["info"])) {
	$bitmap = $_POST["bitmap"];
  }

  //画像読み込み
  $createimage = imagecreatetruecolor(480, 480);
  $bit = array();

  for($i=0; $i<16; $i++){
	$bit[$i] =imagecreatefromgif("pixel/".$i.".gif");
  }

  //bitmapを配列bitmap_arrayにいれる
	$bitmap_array = explode(",", $bitmap);
	//echo (count($bitmap_array)); //配列の数
	//print_r(gd_info()); PHP GD
	echo'<br>';
	for($i=0; $i<count($bitmap_array); $i++){ //1024
		//echo $bitmap_array[$i]; //デバッグ用 ID 15とか0とか
		imagecopy($createimage, $bit[$bitmap_array[$i]],($i%32)*15,intval($i/32)*15,0,0,15,15);
	}
		imagegif($createimage, "img/".$id.".gif");
		imagedestroy($createimage);
?>

<html><body><center>

<title>ドット絵完成</title>
 	<link rel="stylesheet" type="text/css" href="style.css">

<h2>完成！</h2>
<img src=<?php echo "img/".$id.".gif"?>>
<br><br>
<br><br>
<a href="editor.php">新しく他の画像を作る</a>
<a href="top.php">トップページに戻る</a>
<br><br>
</center>
</body></html>
