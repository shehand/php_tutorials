<?php

	$ls = readline();
	$lst = explode(" ",$ls);
	
	$M = $lst[0];
	$A = $lst[1];
	$b = $lst[2];
	
	function fibbonacci($num){
		if($num==0 || $num==1){
			return 1;
		}else{
			return fibbonacci($num-1) + fibbonacci($num-2);
		}
	}
	
	$i = 1;
	while($i != 1000000007){
		$tmp = fibbonacci($i);
		$tmp2 = fibbonacci($i+1);
		
		if($tmp%$M==$A and $tmp2%M==$B){
			echo $i;
			break;
		}else if($i == 1000000006){
			echo "-1";
			break;
		}else{
			$i++;
		}
	}
?>