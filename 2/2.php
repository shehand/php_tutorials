<?php

	$a = $_POST['a'];
	$b = $_POST['b'];
	
	$temp = 0;
	$as = array();

	for($i=1;$i<=$b/2;$i++){
		if($b%$i==0){
			$temp++;
		}
	}
	
	for($i=1;$i<=$a;$i++){
		if($a%$i==0){
			array_push($as,%i);
		}
	}
		
	if($temp==1){
		echo "2"; 
	}else{
		$count = 0;
		while($a!=$b){
			
			$tp = $a*$prime[$temp++];
			
			for($j=0$j<sizeof($as);$j++){
				if($b!=$tp/$as[$j]){
					$count++;
				}else{
					return;
				}
			}
		}
		echo $count;
	}

?>