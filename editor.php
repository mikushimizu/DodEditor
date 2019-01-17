<html><head>
<title>エディター</title>
<link rel="stylesheet" type="text/css" href="style.css">
<a>Editor</a>
<?php
//DB書き込み
$db = new PDO("sqlite:works.sqlite");
if(isset($info) && isset($user))	{
		$db->query("INSERT INTO works VALUES(null, '$info','$user')" );
}
?>

<script type="text/javascript">
//JavaScript
//ボタン読み込み
let Normal1 = new Image();
Normal1.src = "save-before.png";
let Highlight1 = new Image();
Highlight1.src = "save-after.png";

function Bildwechsel (BildId, Bildobjekt) {
  window.document.getElementById(BildId).src = Bildobjekt.src;
}

button = false;
color = 15;

//ビットマップ
bitmap = new Array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

function down() {button = true; return false;}
function up() {button = false;}

function paint(n) {
	if(button) {
		document.getElementById("p"+n).src = "pixel/" + color + ".gif";
		document.getElementById("mp"+n).src = "minipixel/" + color + ".gif";
		bitmap[n] = color;
	}
}

function selectColor(newColor) {
	document.getElementById('palette'+color).src = "pixel/nixdrin.png"
	document.getElementById('palette'+newColor).src = "pixel/select.png"
	color = newColor;
}

function convert() {
	document.forms[0].bitmap.value = bitmap.join(",");
	//スペースを半角ずつ空けながらbitmapの値を連結して、左に入れてる
}
</script>
</head>

<body onmouseup="up()">

<!--色々のせるテーブル-->
<table><tbody><tr><td>

<!--大きいドット絵を描画するテーブル-->
<div class = "big">
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<?php
for($i=0; $i<1024; $i++){
   if($i%32===0){echo '<tr>';}?>
    <td><img src='pixel/0.gif' width="15" height="15"  id="<?php echo 'p'.$i ?>" onmousedown="down();  paint(<?php echo $i ?> );  return false;" onmouseover=" paint(<?php echo $i ?>)" onmouseup=" paint(<?php echo $i ?>)"></td>
<?php
   if($i%32===31){ echo "</tr>";}
   } ?>
</tbody></table></div><br> <!--パレットのための改行-->

<!--パレット色-->
<?php
for ($i=0; $i<=15; $i++) { ?>
	<img src=<?php echo 'pixel/' .$i. '.gif' ?> onclick=<?php echo 'selectColor(' .$i. ')' ?> width="30" height="30">
<?php
	}?>
	<br>
<!--矢印が入る透明の枠-->
<?php
for ($i=0; $i<=15; $i++) { ?>
	<img src="pixel/nixdrin.png" width="30" height="30" id=<?php echo 'palette'.$i  ?>>
<?php
	}?>
</td>

<!--小さいドット絵を描画するテーブル-->
<td valign="top">
<table border="0" cellspacing="0" cellpadding="0" class="Mini">
<tbody>
<?php
for($i=0; $i<1024; $i++){
   if($i%32===0){echo '<tr>';}?>
    <td><img src='minipixel/0.gif' width="1" height="1" id="mp<?php echo $i ?>"></td>
<?php
   if($i%32===31){echo "</tr>";}
	}?>
</tbody></table>

<!--送信-->
<form action="pic.php" method="post" onsubmit="convert()">
<input type="hidden" name="bitmap">
<!--コメント入力-->
ID<br><input type="integer" name="id" class="info" maxlength="80" title="Comment (optional, 80 characters max.)"><br>
題名<br><input type="text" name="info" class="info" maxlength="80" title="Comment (optional, 80 characters max.)"><br>
作者<br><input type="text" name="user" class="info" maxlength="80" title="Comment (optional, 80 characters max.)"><br>
<!--SAVEボタン-->
<button type="submit" onmouseover="Bildwechsel('button', Highlight1)" onmouseout="Bildwechsel('button', Normal1)">
<img id="button" src="save-before.png">
</button>
</form>
</tbody></table><!--色々のせるテーブルの閉じ-->
</body></html>
