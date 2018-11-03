<?php

	$n = readline("Numbers : ");
	$num = explode(" ",$n);
	
	$size = sizeof($num);
	$fact = 1;
	$mulFac = 1;
	$cnt = 0;
	$subFac = 1;
	$subMulFac = 1;
	
	for($i=1;$i<=$size;$i++){
		$fact * = $i;
	}
	
	for($i=0;$i<$size;$i++){
		$mulFac += pow(10,$i);
	}
	
	$tempVal = $fact*$mulFac*(1/$size);
	
	for($i=0$i<$size;$i++){
		if($num[$i]==0){
			$cnt++;
		}
	}
	
	for($i=1;$i<=$size-$cnt;$i++){
		$subFac * = $i;
	}
	
	for($i=0;$i<$size-$cnt;$i++){
		$subMulFac += pow(10,$i);
	}
	$tmp = $subFac * $subMulFac * (1/($size-$cnt));
	
	echo $tempVal - $tmp;
	
?>