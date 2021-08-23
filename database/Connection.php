<?php

class Connection {

	public static function make() {

		try {
			return new PDO('mysql:host:127.0.0.1;dbname=pdo_oop', 'root', '');

		} catch (PDOException $e) {
			die($e->getmessage());
			
		}


	}

}

//if the function is not static then use
// $connection = new Connection();

// $connection->make();

//if the function is static then use
// $pdo = Connection::make();