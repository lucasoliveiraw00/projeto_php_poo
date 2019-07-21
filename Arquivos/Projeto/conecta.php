<?php

	define("BASE", "http://localhost/Projeto/");

	$server = "localhost";
	$dbname = "projeto";
	$user = "root";
	$pass = "";

global $db;
try {
	$db = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8",$user,$pass);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}