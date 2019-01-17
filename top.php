<?php
  session_start();
?>
<title>トップページ</title>
<link rel="stylesheet" type="text/css" href="top.css">
<h1>Gallery</h1>
<p>
<a href="editor.php" class="square_btn">新しく画像を作る</a><br><br><br>
</p>
  <?php

  if (isset($_POST["bitmap"]) && isset($_POST["info"])) {
	$bitmap = $_POST["bitmap"];
	$info = $_POST["info"];
  }

  //DB読み込み
  $db = new PDO("sqlite:works.sqlite");
  $result=$db->query("SELECT * FROM works");
  echo '<div class="gallery">';
  for($i=0; $row=$result->fetch(); $i++){
      echo '<div class="title">';
      echo "<tr valign=center>";
      echo "<td> 題名: ". $row['info']."</td><br>";
      echo "<td> 作者: ". $row['user']."</td></br>";?>
      <img src= <?php echo "img/". $row['id'].".gif"?> width="150" height="150">
      </tr>
      </div>
      <?php
    }
  echo  '</div>';
?>
