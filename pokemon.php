<html>
<head>
<title> pokemon</title> <meta charset="UTF-8">
</head>
<body>

<h1> ポケットモンスター図鑑 </h1>

<table border=0 cellpadding=0 cellspacing=0>
<tr bgcolor=#f87820>
<td width=50><br>No</td>
<td width=120><br><b>なまえ </b></td>
<td width=80><br><b>HP</b></td>
<td width=80><br><b>こうげき</b></td>
<td width=80><br><b>ぼうぎょ</b></td>
<td width=80><br><b>すばやさ</b></td>
<td width=80><br><b>タイプ</b></td>

<?php


if(isset($_GET['No'])) 	      $No=$_GET['No']; 

if(isset($_GET['name'])) $name=$_GET['name']; 
if(isset($_GET['HP']))  $HP=$_GET['HP']; 
if(isset($_GET['offense']))     $offense=$_GET['offense']; 
if(isset($_GET['defense']))     $defense=$_GET['defense']; 
if(isset($_GET['speed']))     $speed=$_GET['speed']; 
if(isset($_GET['type']))     $type=$_GET['type']; 

$db = new PDO("sqlite:pokemon.sqlite");
if(isset($name))	{
		$db->query("INSERT INTO monsters VALUES('$No', '$name','$HP','$offense','$defense','$speed','$type')");
}

$result=$db->query("SELECT * FROM monsters");
	for($i = 0; $row=$result->fetch(); ++$i ){
		echo "<tr valign=center>";
		echo "<td >". $row['No']. "</td>";
		echo "<td >". $row['name']. "</td>";
		echo "<td >". $row['HP']. "</td>";
		echo "<td >". $row['offense']. "</td>";
		echo "<td >". $row['defense']. "</td>";
		echo "<td >". $row['speed']. "</td>";
		echo "<td >". $row['type']. "</td>";
		echo "</tr>";
	}
?>
<tr> <td bgcolor=#fb7922 colspan=7>&nbsp</td> </tr>
</table>

<h2>モンスター追加</h2>
<form action=pokemon.php method=get>
<table border=0 cellpadding=0 cellspacing=0>
 <tr><td>No:</td><td> <input type=text size=20 name=No></td></tr>
 <tr><td>HP:</td><td> <input type=text size=20 name=HP></td></tr>
 <tr><td>なまえ:</td><td><input type=text size=20 name=name></td></tr>
 <tr><td>こうげき:</td><td> <input type=text size=20 name=offense></td></tr>
 <tr><td>ぼうぎょ:</td><td> <input type=text size=20 name=defense></td></tr>
 <tr><td>すばやさ:</td><td> <input type=text size=20 name=speed></td></tr>
 <tr><td>タイプ:</td><td> <input type=text size=20 name=type></td></tr>
 <tr><td> </td><td><input type=submit border=0 value="追加"></td></tr>
</table>
</form>
</body>
</html>


