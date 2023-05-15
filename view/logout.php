<?php
include '../controllers/UtilisateurController.php';
include '../controllers/ClientController.php';

$client = new ClientController();
$client->logout();
header('location: ../index.php');

$client = new UtilisateurController();
$client->logout();
header('location: ../index.php');
