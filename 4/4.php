<?php
	$tmp = readline();
	$tmpVal = explode("\n", $tmp);
	
	$arr = array();
	
	for($i=0;$i<sizeof($tmpVal);$i++){
		$t = $tmpVal[$i];
		array_push($arr, explode(" ",$t));
	}
?>