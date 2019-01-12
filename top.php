<title>トップページ</title>
<h1>ギャラリー</h1>
<a href="editor.php">新しく画像を作る</a><br><br><br>
<?php
  session_start();

  if (isset($_POST["bitmap"]) && isset($_POST["info"])) {
	$bitmap = $_POST["bitmap"];
	$info = $_POST["info"];	
  }

  $db = new PDO("sqlite:works.sqlite");
  $result=$db->query("SELECT * FROM works");
  for($i=0; $row=$result->fetch(); $i++){
      echo "<tr valign=center>";
      echo "<td>タイトル". $row['info']."</td>";
      echo "<td>作者". $row['user']."</td>";?>
      <img src= <?php echo "img/". $row['id'].".gif"?> width="150" height="150">
      </tr>
      <?php
  }

  //画像読み込み
  $createimage = imagecreatetruecolor(480, 480);
  $bit = array();

  for($i=0; $i<16; $i++){
	$bit[$i] =imagecreatefromgif("pixel/".$i.".gif");
  }
	echo'<br>';
?>
