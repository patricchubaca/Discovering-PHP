<?php

	include("conexao.php");

	$input = $_POST['input'];

	$query = "SELECT * FROM incritos WHERE nome LIKE '%{$input}%'";

	$stmt = $conn->prepare($query);

	$stmt->exec();

	var_dump($stmt);