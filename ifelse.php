<!DOCTYPE html>
<html><head><title>HO HO HO</title>

<style>

.r1 { background-color: #00ff00;
		color: #ff0000;
	}
	
.r2 { background-color:#ff0000;
		color: #00ff00;
	}
</style>
</head>
<body>
	<center>
<h1>
MERRY CHRISTMAS
</h1>
<h1><?php
echo "<h1>";
	for ($i = 0; $i < 100; $i++){
		if($i % 2 == 0 ){
				echo"<div class=\"r1\" >";
			}else{
			echo"<div class=\"r2\" >";
		}
	
		echo "* * * * * * * * * * * * * * * * *<br />";
		echo "</div>";

	}
?>
</h1>
</center>
</body>
</html>
