<!DOCTYPE html>
<html>
<head>
	<title>Looping</title>
</head>
<body bgcolor="magenta">
		<h4>Bilangan Prima dari 1 sampai dengan 100</h4>
</body>
</html>

<?php
		for ($i=1;$i<=100;$i++){
			$a=0;
			for($j=1;$j<=$i;$j++){
				if($i % $j ==0){
					$a++;
				}
			}
			if($a == 2){
				echo $i. '<br>';
			}
		}
?>
