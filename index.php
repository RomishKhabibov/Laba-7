<?php
function clearData($data, $type='i'){
	switch($type){
		case 'i': return $data*1; break;
		case 's': return trim(strip_tags($data)); break;
	}
}
$output ="";
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$number1 = clearData($_POST['number1']);
	$number2 = clearData($_POST['number2']);
	$operator = clearData($_POST['operator']), 's');
	switch($operator){
		case '+': $output .= $number1 + $number2; break;
		case '-': $output .= $number1 - $number2; break;
		case '*': $output .= $number1 * $number2; break;
		case '/':
			if($number2 ==0)
				$output = "You cannot divide by zero!";
			else
				$output .= $number1 / $number2;
			break;
			default: $output = "Unknown operator '$operator'";
	}
}
?>
<form action="<?=$_SERVER ['PHP_SELF']?>" method="post">
Number 1:<br />
<input type="text" name="number1"><br />
Operator:<br />
<input type="text" name="operator"><br />
Number 2:<br />
<input type="text" name="number2"><br />
<input type="submit" value="submit">
</form>
<?php
if($output){
	echo $output;
}
?>
