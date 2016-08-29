<?php


class SelectFilter {
    public $mysqli;
    public $query;
    public $result;
    
    public $back;
    public $breast;
    public $delta;
    public $biceps;
    public $triceps;
    
    public $dumbbells;
    public $bench;
    public $mat;
    public $barbell;
    
    
    
    public function __construct($param, $back, $breast, $delta, $biceps, $triceps,
                                        $dumbbells, $bench, $mat, $barbell )
    {
        $this->mysqli = $param;
        
        $this->back = $back;
        $this->breast = $breast;
        $this->delta = $delta;
        $this->biceps = $biceps;
        $this->triceps = $triceps;
        
        
        $this->dumbbells = $dumbbells;
        $this->bench = $bench;
        $this->mat = $mat;
        $this->barbell = $barbell;
    }
    public function showSelectedMuscles()
    {   
        
        
        if($this->back){$_SESSION["back"]  = "<span class='checked_muscl'>".$this->back."</span>";}
        if($this->breast){$_SESSION["breast"] = "<span class='checked_muscl'>".$this->breast."</span>";}
        if($this->delta){$_SESSION["delta"] = "<span class='checked_muscl'>".$this->delta."</span>";}
        if($this->biceps){$_SESSION["biceps"] = "<span class='checked_muscl'>".$this->biceps."</span>";}
        if($this->triceps){$_SESSION["triceps"] = "<span class='checked_muscl'>".$this->triceps."</span>";}
        //C SESSION пока только пробую, надо чтобы эти значения оставались. Например я выбрал "трицепс" нажал кнопку, потом еще выбрал "спина" нажел кнопку, а галочка и тим и там осталась
        
        echo $_SESSION["back"];
        echo $_SESSION["breast"];
        echo $_SESSION["delta"];
        echo $_SESSION["biceps"];
        echo $_SESSION["triceps"];
    }
    public function showSelectedInventory()
    {  
        if($this->dumbbells){$this->dumbbells = "<span class='checked_inventory'>".$this->dumbbells."</span>";}
        if($this->bench){$this->bench = "<span class='checked_inventory'>".$this->bench."</span>";}
        if($this->mat){$this->mat = "<span class='checked_inventory'>".$this->mat."</span>";}
        if($this->barbell){$this->barbell = "<span class='checked_inventory'>".$this->barbell."</span>";}
        
        
        echo $this->dumbbells;
        echo $this->bench;
        echo $this->mat;
        echo $this->barbell;
    }
    
    public function selectExersises()
    {
               $this->query = "SELECT * FROM exercises WHERE muscles_group  LIKE '%".$this->back."%' "
                                                                           . "OR  '%".$this->breast."%' "
                                                                           . "OR  '%".$this->delta."%' "
                                                                           . "OR  '%".$this->biceps."%' "
                                                                           . "OR  '%".$this->triceps."%' ";
                return $this->result = $this->mysqli->query($this->query) ;
    }
}
