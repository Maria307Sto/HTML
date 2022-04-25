<!DOCTYPE HTML>
<html>
<head>
	<meta charset = "UTF-8">
	<title>Лабраторная_11_Стоянова</title>
	<link rel="stylesheet" href="styles.css" type="text/css" />
	<style type="text/css">
	h1{padding-left:67px; 
		margin-top:60px; 
		font-size:27px; 
		color:#464748; 
		text-transform:none;} 
    .calculate-form{width:460px; 
    	height:100px; 
    	padding:0px 60px 40px 60px;} 
    input.numbers{height:42px; 
    	width:120px; 
    	float:left; 
    	display:inline-block; 
    	margin:20px 0px; 
    	padding:10px 20px; 
    	border:1px solid #2d598066; 
    	-moz-border-radius:3px; 
    	-webkit-border-radius:3px; 
    	border-radius:3px; 
    	font-weight:300;} 
    select.operations{width:66px; 
    	height:64px; 
    	float:left; 
    	margin:20px 5px; 
    	padding:5px 0 0 10px; 
    	background-color:#1ca7a2; 
    	border:1px solid #1ca7a2;
    	font-size:36px; 
    	color:#fff;} 
    input.submit_form{height:62px; 
    	width:400px; 
    	display:inline-block; 
    	padding-top:5px; 
    	background-color:#f7994f; 
    	border:1px solid #f6994f; 
    	border-radius:4px; 
    	font-size:17px; 
    	font-weight:600; 
    	text-transform:uppercase; 
    	color:#ffffff; 
    	box-shadow:1px 5px 10px 5px rgb(247, 136, 48) inset;} 
	div.answer-text,div.error-text{margin-top:50px; 
		padding-left:65px; 
		font-size:28px;} 
	div.answer-text{color:#2e2e2f;}
	div.error-text{color:red;}
	</style>
</head>
<body bgcolor="#DEB887">
	<div align="center"><h1>Калькулятор Марии Стояновой</h1></div>
	<form action='' method='post' class="calculate-form">
		<input type="text" name="number1" class="numbers" placeholder="Первое число">
		<select class="operations" name="operation">
			<option value='plus'>+</option>
			<option value='minus'>-</option>
			<option value="multiply">*</option>
			<option value="divide">/</option>
		</select>
		<input type="text" name="number2" class="numbers" placeholder="Второе число">
		<input class="submit_form" type="submit" name="submit" value="Получить ответ"> 
	</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	$operation = $_POST['operation'];
	// Валидация
	if(!$operation || (!$number1 && $number1 != '0') || (!$number2 && $number2 != '0')) {
		$error_result = 'Не все поля заполнены';

	}
    else {
	    
		if(!is_numeric($number1) || !is_numeric($number2)){
			$error_result = "Операнды должны быть числами";
		}
		else 
        switch($operation){
			case 'plus':
			    $result = $number1 + $number2;
			    break;
			case 'minus':
			    $result = $number1 - $number2;
			    break;
			case 'multiply':
			    $result = $number1 * $number2;
			    break;
			case 'divide':
			    if( $number2 == '0')
			    	$error_result = "На ноль делить нельзя!";
			    else
			       $result = $number1 / $number2;
			    break;    
		}
	    
	}
    if(isset($error_result)){
    	echo "<div class='error-text'>Ошибка: $error_result</div>";
    }	
    else {
	    echo "<div class='answer-text'>Ответ равен: $result</div>";
    }
}
?>
