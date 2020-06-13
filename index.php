<?php
	if ($_POST['разместить'])
	{
		$a = (int)$_POST['первое'];
		$b = (int)$_POST['второе'];
		$p = $_POST ['операция'];
		$c;
			if($p=='+'
				$c = $a + $b;
			else if($p=='-'
				$c = $a - $b;
			else if($p=='*'
				$c = $a * $b;
			else if($p=='/'
			{
				if ($b==0)
					echo "Вы не можете делить на ноль"
				else $c = $a / $b;
			}
			else $c = pow($a, $b);
			
		}
?>
<form action="" method="post">
	<input type="Текстовое поле" name="первое" required>
	
	<select name="операция" required>
	<option value="+">+</option>
	<option value="-">-</option>
	<option value="*">*</option>
	<option value="/">/</option>
	<option value="^">^</option>
	</select>
	
	<input type="Текстовое поле" name="второе" required>
	
	<input type="разместить" name="разместить">
</form>
<?php
		echo $c;
?>
 