<!--
<img src="pixel/0.gif" onclick="selectColor(0)" width="30" height="30">
<img src="pixel/1.gif" onclick="selectColor(1)" width="30" height="30">
<img src="pixel/2.gif" onclick="selectColor(2)" width="30" height="30">

-->

<table border="0" cellspacing="0" cellpadding="0" class="Mini">
<tbody>
<?php
for($j=0; $j<32; $j++){
    echo '<tr>';
    for($i=0; $i<32; $i++){?>
        <td><img src="a" width="1" height="1" id="mp<?php echo $i ?>"></td>
<?php
    }
    echo "</tr>";
    } ?>