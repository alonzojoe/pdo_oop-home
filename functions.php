<?php

function dd($data) {
	echo "<pre>";

	echo die(var_dump($data));

	echo "</pre>";
}

function connectToDb() {
	try {
		return new PDO('mysql:host=127.0.0.1;dbname=pdo_oop', 'root', '1234');
	} catch (PDOException $e) {
		die("Could not Connect: $e");
	}	

}

function fetchAllTasks($pdo){

	$statement = $pdo->prepare('SELECT * FROM todos');

	$statement->execute();

	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}
