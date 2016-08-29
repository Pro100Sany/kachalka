<?php

class DB_CONFIG {
   public $q;
   
    function connectDataBase () 
   {
        $this->q = new mysqli
        (
        "localhost",
        "Alexander",
        "",
        "prokachalka"
        );//подключение к базе данных
        
        if ($this->q->connect_errno) 
        {
            printf("Не удалось подключиться: %s\n", $this->q->connect_error);
            exit();
        }
        return $this->q;
    }
}