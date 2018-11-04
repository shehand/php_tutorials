<?php 

	function arraySum ($arr, $n) { 
		$sum = 0; 
		for ($i = 0; $i < $n; $sum += $arr[$i++]); 
		return $sum; 
	} 
	  

	function smallest ($arr, $n) { 
		$small = PHP_INT_MAX; 
		for ($i = 0; $i < $n; $i++) 
			if ($arr[$i] < $small) 
				$small = $arr[$i]; 
		return $small; 
	} 
	  
	function minOp ($arr, $n) { 
		$sum = arraySum ($arr, $n); 
		$small = smallest ($arr, $n); 
		$minOperation = $sum - ($n * $small); 
		return $minOperation; 
	} 

		$n = readline();
		$tmp = readline();
		$arr = explode(" ",$tmp); 
		 
		echo "Minimum Operation = " , (minOp ($arr, $n))%1000000007; 
      
?> 