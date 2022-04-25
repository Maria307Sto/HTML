<!-- Написать программу на HTML и PHP для следующего задания:
Упорядочить 3 числа по убыванию. -->
<!DOCTYPE html>
<html>
<head>
	<title>Лабораторная_10_1_задание</title>
</head>
<body>
<?php
$Chisla = array(1,2,3);
rsort($Chisla);
foreach($Chisla as $num) {
	$place++;
	echo "{$place} место - {$num} <br />";
}
?>
</body>
</html>