<?php
	$dogs = $_POST['dogs'];
	$walkers = $_POST['walkers'];
	$sizes = $_POST['sizes'];
	
	$values = explode(" ", $sizes);
	
	$diff = array();
	
	for($i=0;$i<sizeOf($values)-1;$i++){
		array_push($diff, ($values[$i+1]-$values[$i]));
	}
	
	sort($diff);
	
	$range = $values[sizeof($values)-1] - $values[0];
	$tempSum = 0;
	
	for($i=1;$i<sizeof($diff);$i++){
		$tempSum += $diff[$i];
	}
	$ans = ($range - $tempSum);
	echo "The size of the group is : $ans";
	
?>