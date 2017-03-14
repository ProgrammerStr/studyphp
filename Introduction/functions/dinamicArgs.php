<?php

	function getArgs(){

		$args  = func_get_args();
		$values = func_num_args();

		for($n = 0; $n < $values; $n++){

			echo "Value: ".$n." Arg: ".$args[$n].'<br/>';

		}

	}

?>