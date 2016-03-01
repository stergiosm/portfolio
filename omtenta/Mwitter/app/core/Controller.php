<?php

class Controller 
{
	protected $db;

	public function __construct() {
		$this->db = Database::getInstance();
	}

	public function view($view, $data) 
	{
		require_once '../app/views/' . $view . '.php';
	}
	
}