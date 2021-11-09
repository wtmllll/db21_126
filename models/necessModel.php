<?php
class NecessModel{
    public $pid;
    public $smask;
    public $garb;
    public $med;
    public $gel;
    public $therm;
    public $pulse;

    public function __construct ($pid,$smask,$garb,$med,$gel,$therm,$pulse)
    {
        $this->$pid = $pid;
        $this->$smask = $smask;
        $this->$garb = $garb;
        $this->$med = $med;
        $this->$gel = $gel;
        $this->$therm = $therm;
        $this->$pulse = $pulse;
    }
    public static function getAll()
    {   
        $necessList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `Necessary`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $pid = $my_row[Patient_id];
            $smask = $my_row[surgical_mask];
            $garb = $my_row[garbage];
            $med = $my_row[medicine];
            $gel = $my_row[gel_alcohol];
            $therm = $my_row[thermometer];
            $pulse = $my_row[PulseOximeter];
            $necessList[] = new NessModel($pid, $smask, $garb, $med, $gel, $therm, $pulse);
        }
        require("connection_close.php");
        
        return $necessList;
    }
}
?>