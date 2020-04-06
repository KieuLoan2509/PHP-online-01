<?php 
$arr = array(2, 5, 12, 7, 4, 13, 20, 3);
$max = $arr[0];
for ($i = 0; $i < count($arr) ; $i++){ 
	if($arr[$i] > $max){
		$max = $arr[$i];
	}
}
echo "Mảng đầu vào: ";
for($i = 0; $i < count($arr); $i++){
	echo $arr[$i]."&nbsp;&nbsp;&nbsp;";
}
echo "<br>Số nguyên lớn nhất trong mảng là: ".$max;
?>