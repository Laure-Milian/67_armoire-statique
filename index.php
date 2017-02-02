<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/Controllers/Armoire.php';
$armoire = new Armoire();

if(!isset($_GET['id'])) {
	$chaussettes = $armoire::all(50);
	require __DIR__ . '/Views/tableau.php';
}
elseif(isset($_GET['id'])) {
	$id = $_GET['id'];
	$chaussette = $armoire::get($id);
	require __DIR__ . '/Views/select.php';
}

