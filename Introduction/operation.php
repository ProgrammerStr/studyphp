<?php

 $a = 0;

 echo "<br>-------------------------------</br>";
 echo "Variable a++<br/>";

 for($i = 0; $i < 5; $i++){

 	$a++;

 	echo "<br/>Value of a : " . $a . " in : " . $i;
 	echo "<br/>";
 }

 $a = 0;

 echo "<br>-------------------------------</br>";
 echo "Variable ++a<br/>";

 for($i = 0; $i < 5; $i++){

 	++$a;

 	echo "<br/>Value of a : " . $a . " in : " . $i;
 	echo "<br/>";
 }

 echo "<br/>--------------------------------<br/>";
 for($i = 0; $i < 5; $i++){
 	echo $i;
 	echo "<br/>";
 }

 echo "<br/>-------<br/>";

 for($i = 0; $i < 5; ++$i){
 	echo $i;
 	echo "<br/>";
 }

?>