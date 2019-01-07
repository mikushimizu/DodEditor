<html><head><link rel="stylesheet" id="coToolbarStyle" href="chrome-extension://cjabmdjcfcfdmffimndhafhblfmpjdpe/toolbar/styles/placeholder.css" type="text/css">
<script type="text/javascript" id="cosymantecbfw_removeToolbar">
(function () {				var toolbarElement = {},					parent = {},					interval = 0,					retryCount = 0,					isRemoved = false;				if (window.location.protocol === 'file:') {					interval = window.setInterval(function () {						toolbarElement = document.getElementById('coFrameDiv');						if (toolbarElement) {							parent = toolbarElement.parentNode;							if (parent) {								parent.removeChild(toolbarElement);								isRemoved = true;								if (document.body && document.body.style) {									document.body.style.setProperty('margin-top', '0px', 'important');								}							}						}						retryCount += 1;						if (retryCount > 10 || isRemoved) {							window.clearInterval(interval);						}					}, 10);				}			})();
</script></head><body><center>

<title>ドット絵完成</title>
 	<link rel="stylesheet" type="text/css" href="style.css">

<h2>完成！</h2>
<!--ここでMini画像データを取得し、名前を付けて表示したい-->
<img src="bilder/0000027877.png">

<br><br>
<a href="galerie.php">gallery</a>に保存されました. 
<br> また来てね！
<br><br>
<a href="sample6.php">新しく他の画像を作る</a>
<br><br>
</center>
</body></html>