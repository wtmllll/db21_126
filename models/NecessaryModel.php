<?php
class NessModel{
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

    public function __construct ($pid,$smask,$garb,$med,$gel,$therm,$pulse,$NamePeople,$LastnameP,$address_Home,$county_Home,$province_Home)
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

    public static function get($pid)
    {   echo "get";
        require("connection_connect.php");
        $sql = "SELECT n.Patient_id, pe.NamePeople, pe.LastnameP, h.address_Home, h.county_Home, h.province_Home, n.surgical_mask, n.garbage, n.medicine, n.gel_alcohol, n.thermometer, n.PulseOximeter 
        FROM `Necessary` AS n NATURAL JOIN Homeisolation AS h NATURAL JOIN Patient NATURAL JOIN People AS pe
        WHERE n.Patient_id = '$pid'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
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
        $province_Home = $my_row[province_Home];
        echo $pid;
        require("connection_close.php");

        return new NessModel($pid,$smask,$garb,$med,$gel,$therm,$pulse,$NamePeople,$LastnameP,$address_Home,$county_Home,$province_Home);
    }

    public static function getAll()
    {   
        $nessList = [];
        require("connection_connect.php");
        $sql = "SELECT n.Patient_id, pe.NamePeople, pe.LastnameP, h.address_Home, h.county_Home, h.province_Home, n.surgical_mask, n.garbage, n.medicine, n.gel_alcohol, n.thermometer, n.PulseOximeter 
        FROM `Necessary` AS n NATURAL JOIN Homeisolation AS h NATURAL JOIN Patient NATURAL JOIN People AS pe";
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
            $province_Home = $my_row[province_Home];
            $nessList[] = new NessModel($pid, $smask, $garb, $med, $gel, $therm, $pulse,$NamePeople,$LastnameP,$address_Home,$county_Home,$province_Home);
            echo $pid;        
        }
        require("connection_close.php");
        
        return $nessList;
    }

    public static function search($key)
    {   echo "serchmo";
        echo $key;
        $ness_List = [];
        require("connection_connect.php");
        $sql = "SELECT n.Patient_id, pe.NamePeople, pe.LastnameP, h.address_Home, h.county_Home, h.province_Home, n.surgical_mask, 
        n.garbage, n.medicine, n.gel_alcohol, n.thermometer, n.PulseOximeter FROM Necessary AS n NATURAL JOIN Homeisolation AS h 
        NATURAL JOIN Patient NATURAL JOIN People AS pe WHERE (n.Patient_id LIKE '%$key%' OR pe.NamePeople LIKE '%$key%' 
        OR pe.LastnameP LIKE '%$key%' OR h.address_Home LIKE '%$key%' OR h.county_Home LIKE '%$key%' OR h.province_Home LIKE '%$key%'
        n.surgical_mask LIKE '%$key%' OR n.garbage LIKE '%$key%' OR n.medicine LIKE '%$key%' OR n.gel_alcohol LIKE '%$key%'
        OR n.thermometer LIKE '%$key%' OR n.PulseOximeter LIKE '%$key%')";
        echo $key;
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
            $province_Home = $my_row[province_Home];
            $ness_List[] = new NessModel($pid, $smask, $garb, $med, $gel, $therm, $pulse,$NamePeople,$LastnameP,$address_Home,$county_Home,$province_Home);
            echo $pid;        
        }
        require("connection_close.php");
        echo $ness_List[0];
        return $ness_List;
    }
    public static function Add($pid, $smask, $garb, $med, $gel, $therm, $pulse) {
        require("connection_connect.php");
        $sql = "INSERT INTO `Necessary`(`Patient_id`, `surgical_mask`, `garbage`, `medicine`, `gel_alcohol`, `thermometer`, `PulseOximeter`) 
        VALUES ('$pid',$smask,$garb,$med,$gel,$therm,$pulse)";
        $result = $conn->query($sql);
        require("connection_close.php");
        echo $pid;
        return "add success $result rows";
    }

    public static function update($pid,$smask, $garb, $med, $gel, $therm, $pulse) {
        require("connection_connect.php");
        $sql = "UPDATE `Necessary` SET `surgical_mask`=$smask,`garbage`=$garb,`medicine`=$med,
        `gel_alcohol`=$gel,`thermometer`=$therm,`PulseOximeter`=$pulse
        WHERE Patient_id = '$pid'";
        $result = $conn->query($sql);
        require("connection_close.php");

        return "update success $result row";
    }

    public static function delete($PDid) {
        require("connection_connect.php");
        $sql = "DELETE FROM Necessary WHERE Patient_id = '$pid";
        $result = $conn->query($sql);
        require("connection_close.php");

        return "delete success $result rows";
    }
    

}
?>