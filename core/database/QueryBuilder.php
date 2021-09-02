<?php 


class QueryBuilder {

	protected $pdo;

	public function __construct(PDO $pdo) {

		$this->pdo = $pdo;

	}

	public function selectAll($table) {

		$query = $this->pdo->prepare("SELECT * FROM {$table}");

		$query->execute();

		return $query->fetchAll(PDO::FETCH_CLASS);

	}

	public function insert($table, $parameters) {

		$columns = implode(', ', array_keys($parameters));

		$values = ':' . implode(', :', array_keys($parameters));

		$sqlstring = sprintf(
			'INSERT INTO %s (%s) VALUES (%s)', $table, $columns, $values
		);

		try {
			
			$query = $this->pdo->prepare($sqlstring);

			$query->execute($parameters);


		} catch (PDOException $e) {
			die('Data not inserted');
		}



	}

}