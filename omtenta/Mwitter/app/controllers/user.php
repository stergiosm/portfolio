<?php


class User extends Controller
{

	public function index() {

		$this->view('login');
	}

	public function login() {
		$this->view('mypage');
	}

	public function logout() {

		session_destroy();
		
		$this->view('login');
	}
	
	public function register() {
		$data = array(
            "username" => $_POST['username'],
            // "email" => $_POST['email'],
            "password" => password_hash($_POST['password'], PASSWORD_BCRYPT)
        );

		$this->db->insert("users");
		$this->view('mypage');


		// $stm = $this->db->getConnection()->prepare("INSERT INTO users (username, password) VALUES ('paok', '1234')");
		// $stm->execute();
	}



}