<?php
	
	$in = readline("N M:");
	$tmp = explode(" ", $in);
	$n = $tmp[0];
	$m = $tmp[1];
	$list = array();
	
	while($m>0){
		$tp = readline();
		$tpp = explode(" ", $tp);
		array_push($list, $tpp);
		$m--;
	}
?>