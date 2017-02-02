<?php

require __DIR__ . '/Armoire.php';

$armoire = new Armoire();

$chaussettes = $armoire::all(50);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tableau 50 premières entrées</title>
</head>
<body>
	<table>
		<tr>
			<th>Id</th>
			<th>Pointure</th>
			<th>Temp lavage</th>
			<th>Description</th>
			<th>Couleur</th>
			<th>Date lavage</th>
		</tr>
		<?php foreach ($chaussettes as $chaussette) : ?>
			<tr>
				<td><?= $chaussette->id ?></td>
				<td><?= $chaussette->pointure ?></td>
				<td><?= $chaussette->temp_lavage ?></td>
				<td><?= $chaussette->description ?></td>
				<td><?= $chaussette->couleur ?></td>
				<td><?= $chaussette->date_lavage ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>