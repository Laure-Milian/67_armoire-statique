<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/Controllers/Armoire.php';

if(!isset($_GET['id'])) {
	$chaussettes = Armoire::all(50);
	require __DIR__ . '/Views/tableau.php';
}
elseif(isset($_GET['id'])) {
	$id = $_GET['id'];
	$chaussette = Armoire::get($id);
	require __DIR__ . '/Views/select.php';
}

