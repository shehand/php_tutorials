<?php

	$A = readline("Array : ");
	$arr = explode(" ",$A);
	$G = 0;
	
	for($i=0;$i<sizeof($arr);$i++){
		$G += $arr[$i]*$arr[$i]; 
	}
	
	$cnt = 2;
	
	while($cnt<=sizeof($arr)-1){
		
		for($j=0;$cnt){
			$tempArray = array_slice($arr,$j,$cnt);
			G += max($tempArray) + min($tempArray);
			$j++;
		}
		$cnt++;
	}
?>