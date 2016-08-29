<?php

class SelectAdmins {
    public $mysqli;
    public $query;
    public $result;
    
    public function __construct($param)
    {
        $this->mysqli = $param;
    }
    public function selectAdmins()
    {  
               $this->query = "SELECT * FROM admins ";
        return $this->result = $this->mysqli->query($this->query) ;
    }
}

