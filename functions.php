<?php

function dd($data) {
	echo "<pre>";

	echo die(var_dump($data));

	echo "</pre>";
}


function fetchAllTasks($pdo) {

	$statement = $pdo->prepare('SELECT * FROM todos');

	$statement->execute();

	return $statement->fetchAll(PDO::FETCH_CLASS);

}