<?php

// php和html嵌套
// $name='tom';
// echo $name;

$age=25;
if($age>=18){
?>
<h3>您已成年</h3>
<h3>您今年：<?=$age?>岁</h3>
<?php	
}else{
?>
<h2>您未成年</h2>
<h2>您今年：<?=$age?>岁</h2>
<?php
}
?>

<?php
for($i=10;$i<=100;$i+=10){
?>
<h5 style="text-align:center;">水平线为<?=$i?>%</h5>
<hr color="red" size="10px" width="<?=$i?>">
<?php
}
?>