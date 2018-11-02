<?php
$n = readline("N: ");
$integers = readline();
$numbers = explode(" ",$integers);
$cnt = 0;

for($i=o;$i<sizeof($numbers);$i++){
	
	for($j=0;$j<sizeof($numbers);$j++){
		$a = gmp_init($numbers[$j]);
		$b = gmp_init($numbers[$i]);
		$xor = gmp_intval($a) ^ gmp_intval($b);
		
		for($k=0;$k<sizeof($numbers);$k++){
			if($xor == gmp_init($numbers[$k])){
				continue;
			}else{
				array_push($numbers,$numbers[$k]);
				cnt++;
				break;
			}
		}
	}
}

echo $cnt;

?>