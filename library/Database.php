<?php
class Database 
{    
    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = 'suraj@321';
    private $_database = 'store';
    
    protected $connection;
    
    public function __construct()
    {
        if (!isset($this->connection)) {
            
            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
            
            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
        return $this->connection;
    }
}