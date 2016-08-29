<?php

class AllExercisesShow {
    public $mysqli;
    public $query;
    public $result;
    

    public function __construct($param)
    {
        $this->mysqli = $param;
    }
    public function selectAllExercises()
    {  
               $this->query = "SELECT * FROM exercises ";
        return $this->result = $this->mysqli->query($this->query) ;
    }
}


 //LIMIT $start,$per_page


