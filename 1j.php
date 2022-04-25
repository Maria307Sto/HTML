 <!-- Написать программу на HTML и PHP для следующего задания:
Упорядочить 3 числа по убыванию. -->
<!DOCTYPE html>
<html>
<head>
	<title>лб10_1</title>
</head>
<body>
<form name="form1" action="5h.php" method="POST">
Введите числа:
<br>
Введите 1-е число:<input type="text" name="numbers1" class="numbers" placeholder="Первое число" ><br>
Введите 2-е число:<input type="text" name="numbers2" class="numbers" placeholder="Второе число"><br>
Введите 3-е число:<input type="text" name="numbers3" class="numbers" placeholder="Третье число"><br>
<br>
<input type="submit" name="submit" value="Посчитать">
<br><br>
<input type="reset">
</form>
</body>
</html>
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