<?php

	$n = readline("N : ");
	$list = explode(" ",$n);
	
	$result = array_unique($list);
	$tmp = 1;
	
	for($i=0; $i<sizeof($result); $i++){
		$tmp *= $result[$i];
	}
	
	$val = sizeof($list) - sizeof($result);
	
	if($val == 0){
		echo $tmp;
	else{
		echo $tmp * $val;
	}
	
?>