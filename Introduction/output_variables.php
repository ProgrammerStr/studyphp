<?php
	
		echo "<h1>Hello Word - Welcome to Introduction PHP</h1>";
		echo "<br/>";

		print "First look the variables types<br/>";

		echo "<br/>--------------------------------<br/>";
		print '<br/>Manipulation<br/>';
		$var = "nome";
		$$var = "thor";

		print "Variable >> " . $var;
		echo "<br/>";
		echo "Variable to variable >> " . $nome;

		echo "<br/>--------------------------------<br/>";
		print '<br/>Type boolean<br/>';
		$booleanos = TRUE;

		if($booleanos) {
			echo "Is true i love PHP<br/>";
		}

		echo "Value >> " . $booleanos;
		echo "<br/>";
		echo "Type >> ";
		var_dump($booleanos);


		echo "<br/>--------------------------------<br/>";
		print '<br/>Type number<br/>';

		$inteiro = 10;
		$real = 1.2;


		echo "Value >> " .$inteiro; 
		echo "<br/>";
		echo "Type >> ";
		var_dump($inteiro);


		echo "<br/>Value >> " .$real; 
		echo "<br/>";
		echo "Type >> ";
		var_dump($real);

		echo "<br/>--------------------------------<br/>";
		print '<br/>Type String<br/>';

		$MyString = "Hello Word Again";


		echo "Value >> " .$MyString; 
		echo "<br/>";
		echo "Type >> ";
		var_dump($MyString);

		echo "<br/>--------------------------------<br/>";
		print '<br/>Type Array<br/>';

		$cats = array('thor', 'frajola', 'lola', 'sheldon');

		for($i = 0; $i < 4; $i++){

			echo "Name >> " .$cats[$i];
			echo "<br/>";
		}
		echo "Type >> ";
		var_dump($cats);

		echo "<br/>--------------------------------<br/>";
		print '<br/>Type Object<br/>';

		class Carro{

			public $marca;

			function road(){
				echo "Go Go Go Go {$this->marca} Vrummmmmmmmmmmmmm";
			}

		}

		print "Class Carro<br/>";
		$obj = new Carro;
		$obj->marca = "Ferrari";
		$obj->road();

		class Moto{

			public $marca;
			public $modelo;
			public $cor;

			function showInfos(){
				echo "This is a {$this->marca}";
				echo "<br/>";
				echo "for model {$this->modelo}";
				echo "<br/>";
				echo "With color {$this->cor}";
			}

			function road(){
				echo "<br> Lets go a ride";
			}

		}

		print "<br/>Class Moto<br/>";
		$obj2 = new Moto;
		$obj2->marca = "Honda";
		$obj2->modelo = "XT6";
		$obj2->cor = "Black";
		$obj2->showInfos();
		$obj2->road();

		echo "<br/>Type >> ";
		var_dump($obj);



		class Cats {

			public $name;
			public $age;
			public $color;

			function miau() {
				echo "<br/>Miau Miau I am {$this->name}<br/>";
				echo "I have {$this->age} years<br/>";
				echo "My color is {$this->color}";
			}

		}

		$obj3 = new Cats;
		$obj3->name = "Frajola";
		$obj3->age = 2;
		$obj3->color = "Black";
		$obj3->miau();


		echo "<br/>--------------------------------<br/>";
		print '<br/>Type Contants<br/>';

		define ("max_num", 10);

		echo "Value >> " .max_num;
		echo "<br>Type >> ";
		var_dump(max_num);

?>