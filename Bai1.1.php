<?php 
	$a = 1;
	$b = -3;
	$c = 2;
    if($a == 0){
	    if($b == 0){
	            if($c == 0)
	                echo "Phương trình có vô số nghiệm!";
	            else
	                echo "Phương trình vô nghiệm!";
	        }
	    else
	        echo "Phương trình có nghiệm duy nhất: x = ". -$c/$b;
    }else{
	    $delta = $b*$b - 4*$a*$c;
	    if ($delta < 0)
	        echo "Phương trình vô nghiệm!";
	    else if ($delta == 0)
	        echo "Phương trình có nghiệm kép x1 = x2 = : ". -$b/(2*$a);
	    else
	        echo "Phương trình có 2 nghiệm phân biệt là: <br> x1 = ".(-$b+sqrt($delta))/(2*$a);
	    	echo "<br>x2 = ".(-$b-sqrt($delta))/(2*$a);    
    }    
?>