<?php
	$saluto = 'Ciao a tutti ciao quanti! ciao';
	$nuovo_saluto = str_replace('ciao', 'Buongiorno', $saluto, $num_sostituzioni);
	$arr_saluto = explode(' ', $saluto);
	var_dump($arr_saluto);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2><?= $saluto; ?></h2>
	<h2>Lunghezza saluto: <?= strlen($saluto); ?></h2>
	<h2><?= $nuovo_saluto; ?></h2>
	<h2>Ho sostituito la parola <?= $num_sostituzioni; ?> volte</h2>
</body>
</html>