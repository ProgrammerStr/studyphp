<?php

	function baskara($a, $b, $c){

		$delta;
		$x1;
		$x2;
		$result = array();

		$delta = ($b*$b)-4*$a*$c;

		echo "Delta >> " .$delta;
		echo '<br/>';


		if($delta < 0){
			return "Não existe raiz negativa";
		} else {

			$x1 = (-$b + sqrt($delta)) / (2*$a);
			$x2 = (+$b + sqrt($delta)) / (2*$a);

			$result[0] = $x1;

			echo "x1 >> " .$x1;
			echo '<br/>';

			$result[1] = $x2;

			echo "x2 >> " .$x2;
			echo '<br/>';

			return $result[0];
		}

	}

?>