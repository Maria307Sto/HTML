<?php
if(isset($_POST['submit'])){
$number1 = $_POST['numbers1'];
$number2 = $_POST['numbers2'];
$number3=  $_POST['numbers3'];
$Chisla = array($number1, $number2, $number3);
rsort($Chisla);
$place=0;
foreach($Chisla as $num) {
	$place++; 
	echo "{$place} место - {$num} <br />";
}
}
?>