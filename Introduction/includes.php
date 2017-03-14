<?php

	
	include 'baskara.php';

    include 'classCats.php';

    // mesma função do include porém o obrigatório o arquivo ser carregado
    require 'imc.php';

    include 'functions/references.php';
    include 'functions/default.php';
    include 'functions/dinamicArgs.php';
    include 'functions/rec.php';

	echo "Calculando Baskara";
	echo "<br/>";
	echo baskara(1, -2, 1);


	echo "<br/>---------------------------<br/>";
	$obj = new Cats;
	$obj->name = "Frajola";
	$obj->color = "Black";
	$obj->miau();

	echo "<br/>---------------------------<br/>";
	echo "IMC<br/>";
	echo imc(70, 1.7);

	echo "<br/>---------------------------<br/>";
	echo "Functions<br/>";

	// funcões com parametros referenciados
	echo "References<br/>";
	$refe = 0;
	refes($refe, 20);

	//funcção com valor default
	echo "<br/>Default<br/>";
	$defe = 0;
	defes($defe);

	//função com numero de argumentos dinamico
	echo "<br/>Dinamic args<br/>";
	getArgs('Thor', 'Frajola', 'Lola', 'Sheldon', 'Tom');

	//função recursiva
	echo "<br/>Recursividade - rec<br/>";

	echo fatorial(10);
	echo '<br/>';
	echo fatorial(5);




?>