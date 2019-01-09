<html><head>
<title>ドット絵</title>
<link rel="stylesheet" type="text/css" href="style.css"> 
<script type="text/javascript">

//ボタン読み込み
let Normal1 = new Image();
Normal1.src = "button-speichern-s.png";
let Highlight1 = new Image();
Highlight1.src = "button-speichern-w.png";

function Bildwechsel (BildId, Bildobjekt) {
  window.document.getElementById(BildId).src = Bildobjekt.src;
}

button = false;
color = 15;

//ビットマップ
bitmap = new Array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
//var bitmap = new Array();
//for(counter=0; counter<bitmap.length; counter++) { bitmap['counter']=0 }

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
	document.getElementById('palette'+color).src = "pixel/nixdrin.gif"
	document.getElementById('palette'+newColor).src = "pixel/pfeil.gif"
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
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<?php
for($i=0; $i<1024; $i++){
   if($i%32===0){echo '<tr>';}?>
    <td><img src='pixel/0.gif' width="15" height="15"  id="<?php echo 'p'.$i ?>" onmousedown="down();  paint(<?php echo $i ?> );  return false;" onmouseover=" paint(<?php echo $i ?>)" onmouseup=" paint(<?php echo $i ?>)"></td>
<?php
   if($i%32===31){ echo "</tr>";}
   } ?>
</tbody></table><br> <!--パレットのための改行-->

<!--パレット色・矢印-->
<?php
for ($i=0; $i<=15; $i++) { ?>
	<img src=<?php echo 'pixel/' .$i. '.gif' ?> onclick=<?php echo 'selectColor(' .$i. ')' ?> width="30" height="30">
<?php
	} 
for ($i=0; $i<=15; $i++) { ?><br>
	<img src="pixel/nixdrin.gif" width="30" height="30" id=<?php echo 'palette'.$i  ?>>
<?php
	}?>

<script>
selectColor(15);
</script>
</td>

<!--小さいドット絵を描画するテーブル-->
<td valign="top">
<table border="0" cellspacing="0" cellpadding="0" class="Mini">
<tbody>
<?php
for($i=0; $i<1024; $i++){
   if($i%32===0){echo '<tr>';}?>
    <td><img src="a" width="1" height="1" id="mp<?php echo $i ?>"></td>
<?php
   if($i%32===31){echo "</tr>";}
	}?>
</tbody></table>

<!--送信-->
<form action="pic.php" method="post" onsubmit="convert()">
<input type="hidden" name="bitmap"> <!--[]いるかわかんねｗｗ-->
<!--コメント入力-->
<input type="text" name="info" value="" class="info" maxlength="80" title="Comment (optional, 80 characters max.)"><br>
<!--SAVEボタン-->
<button type="submit" title="guess what this button does..." onmouseover="Bildwechsel('button', Highlight1)" onmouseout="Bildwechsel('button', Normal1)"> 
<img id="button" src="button-speichern-s.png">
</button>
</form>

</td>
</tr>
</tbody></table><!--色々のせるテーブルの閉じ-->

</body></html>