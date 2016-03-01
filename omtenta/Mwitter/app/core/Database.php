<?php

class Database 
{
	
    private static $instance = null;
    private $connection,
            $query,
            $results,
            $error = false,
            $count = 0;

	private function __construct() 
	{
        $dsn = 'mysql:dbname=mwitter;host=localhost';
        $user = 'root';
        $password = 'root';
        try {
            $this->connection = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

	public static function getInstance(){
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }

    public function getFields() {

        return '(username, password)';
    }

    public function getValues() {

        return "('paok', '1234')";
    }

    public function insert($table) {

        $fields = $this->getFields();
        $values = $this->getValues();
        $stm = $this->getConnection()->prepare("INSERT INTO $table $fields VALUES $values ");
        $stm->execute();
    }

    public function select($table, $data) {

        $fields = $this->getFields();
        $values = $this->getValues();
        $stm = $this->getConnection()->prepare("SELECT $fields FROM $table WHERE $values ");
        $stm->execute();
    }

    public function update() {
        
    }

    public function delete() {
        
    }

}