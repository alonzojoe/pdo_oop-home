<?php 

namespace App\Controllers;

class PagesController {

	public function home() {


		return view('index');

	}

	public function about() {

		$company = 'DevOps';


		return view('about', ['company' => $company]);

	}

	public function contact() {

		$contact = '09051234567';

		return view('contact', ['contact' => $contact]);

	}

	public function culture() {


		return view('about-culture');

	}



}