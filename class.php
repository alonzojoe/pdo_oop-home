<?php


require 'functions.php';
// function ageChecker($age){

// 	if($age < 21){
// 		echo "Sorry you are not allowed to enter the night club.";
// 	}else{
// 		echo "Welcome, Please Come In.";
// 	}

// }

// ageChecker(20);


class Task {

	public $description;

	public $completed = false;

	public function __construct($description) {

		$this->description = $description;

	}

	public function complete() {

		$this->completed = true;

	}

	public function isComplete() {

		return $this->completed;

	}

}

