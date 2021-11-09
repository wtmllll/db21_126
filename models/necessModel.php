<?php
class NecessModel{
    public $pid;
    public $smask;
    public $garb;
    public $med;
    public $gel;
    public $therm;
    public $pulse;
    public $NamePeople;
    public $LastnameP; 
    public $address_Home;
    public $county_Home;
    public $province_Home;

    public function __construct ($pid,$smask,$garb,$med,$gel,$therm,$pulse)
    {
        $this->pid = $pid;
        $this->smask = $smask;
        $this->garb = $garb;
        $this->med = $med;
        $this->gel = $gel;
        $this->therm = $therm;
        $this->pulse = $pulse;
        $this->NamePeople = $NamePeople;
        $this->LastnameP = $LastnameP; 
        $this->address_Home = $address_Home;
        $this->county_Home = $county_Home;
        $this->province_Home = $province_Home;
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
            $NamePeople = $my_row[NamePeople];
            $LastnameP = $my_row[LastnameP]; 
            $address_Home = $my_row[address_Home];
            $county_Home = $my_row[county_Home];
            $province_Home = $myrow[province_Home];
            $necessList[] = new NessModel($pid, $smask, $garb, $med, $gel, $therm, $pulse,$NamePeople,$LastnameP,$address_Home,$county_Home,$province_Home);
        }
        require("connection_close.php");
        
        return $necessList;
    }
}
?>