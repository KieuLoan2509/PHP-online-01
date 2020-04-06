<!DOCTYPE html>
<html>
<head>
	<title>Bảng cửu chương</title>
</head>
<body>
	<p><b>Bảng cửu chương</b></p>
	<table width="800px">  
		<?php  
			for($i = 1; $i <= 10; $i++){ 
			echo "<tr>";  
				for ($j = 2; $j <= 9; $j++){ 
				   echo "<td>$j * $i = ".$i*$j."</td>";  
				}  
			echo "</tr>"; 
			}  
		?>  
	</table>
	</div>
</body>
</html>
