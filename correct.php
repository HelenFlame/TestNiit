<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Correct</title>
</head>
<body>
<?php
	function isCorrect($string){
			$a = '';
			$b = '()';
			$string1 = trim($string); // удаляю пробелы
			$strLength = strlen($string1); //считаю длинну строки
			if (strcasecmp($string1, $a) == 0 || strcasecmp($string1, $b) == 0) { //сравниваю входящуюю строку с содержимым переменных $a, $b 
				return  true;	//возвращаю истину если какое либо из выражений = 0
			}
			 elseif(($strLength % 2)==0){ //если нет то смотрю деоится ли длина пополам, если да то
				 //считаю колличество скобок
				$c = substr_count($string1, '(');
				$d = substr_count($string1, ')');
                $q = substr_count($string1, '{');
				$g = substr_count($string1, '}');
				 if($c == $d || $q == $g){//если на каждую открывающуюся скобку есть закрывающая то истина
					 
					 return true;
				 }
				 else{
					 
				return false;	 //если нет то ложь
			  } 
			 }
		}
		
		?>
		<div class="iscor">
			<?php assert(isCorrect('(()}') === false); ?>
		</div>
</body>
</html>