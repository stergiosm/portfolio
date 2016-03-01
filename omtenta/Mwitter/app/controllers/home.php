<?php

class Home extends Controller 
{
	
	public function index() {

		$this->view('login');	
	}

	public function say($word=' ', $second = '') {
		echo 'say' . ' ' . $word . ' ' . $second;
	} 
}
