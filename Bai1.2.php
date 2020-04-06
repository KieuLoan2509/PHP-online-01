<?php 
function Giaithua($n) {
    $gt = 1;
    if ($n == 0 || $n == 1) {
        return $gt;
    } else {
        for($i = 2; $i <= $n; $i ++) {
            $gt *= $i;
        }
        return $gt;
    }
}
$n = 5;
$s = 0;
for ($i = 1; $i <= $n; $i++) {  { 
		$s += $i / Giaithua($i);
	}
}
echo "S = ".$s;
?>