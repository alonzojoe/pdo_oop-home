<?php

class Connection {

	public static function make($config) {
		try {
			
			return new PDO(

				$config['connection'].';dbname='.$config['name'],

				$config['username'],

				$config['password'],

				$config['options']

			);	

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

}

//if the function is not static then use
// $connection = new Connection();

// $connection->make();

//if the function is static then use
// $pdo = Connection::make();