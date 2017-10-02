<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Controle de Estoque</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>

	<div class="container">
		<h1>Listagem de produtos com Laravel </h1>
		<table class="table table-striped table-bordered table-hover">
		<?php foreach ($produtos as $p): ?>
		<tr>
			<td> <?= $p->nome ?> </td>
			<td> <?= $p->valor ?> </td>
			<td> <?= $p->descricao ?> </td>
			<td> <?= $p->quantidade ?> </td>
		</tr>
	<?php endforeach ?>
	</table>
	</div>
	
</body>
</html>