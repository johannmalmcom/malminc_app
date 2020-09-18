<?php

class Model {
    
    private $database;
    private $table;
    
    function __construct($table) {
        $this->database = new Medoo\Medoo([
            'database_type' => "mysql",
            'database_name' => $_ENV["mysql_database"],
            'server' => $_ENV["mysql_host"],
            'username' => $_ENV["mysql_username"],
            'password' => $_ENV["mysql_password"]
        ]);
        
        $this->table = $table;
    }
    
    public function select($columns, $conditions=[]) {
        return $this->database->select($this->table, $columns, $conditions);
    }
    
    public function insert($data) {
        return $this->database->select($this->table, $data);
    }
    
    public function update($data, $conditions) {
        return $this->database->update($this->table, $data, $conditions=[]);
    }
    
    public function delete($conditions) {
        return $this->database->delete($this->table, $conditions=[]);
    }
    
    public function count($conditions) {
        return $this->database->count($this->table, $conditions=[]);
    }
    
    public function id() {
        return $this->database->id();
    }
    
}

?>