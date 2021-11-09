<?php
class HomeIsolation{
    public $patient_id;
    public $address_Home;
    public $county_Home;
    public $province_Home;
    public $doctor_id;
    public $hospital_id;
    public $status_show;

    public function __construct ($patient_id,$address_Home,$county_Home,$province_Home,$doctor_id,$hospital_id,$status_show)
    {
        $this->patient_id = $patient_id; 
        $this->address_Home = $address_Home;
        $this->county_Home = $county_Home;
        $this->province_Home = $province_Home;
        $this->doctor_id = $doctor_id;
        $this->hospital_id = $hospital_id;
        $this->status_show = $status_show;
    }
    public static function getAll()
    {   
        $HomeList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `Homeisolation`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $patient_id = $my_row[patient_id]; 
            $address_Home = $my_row[address_Home];
            $county_Home = $my_row[county_Home];
            $province_Home = $my_row[province_Home];
            $doctor_id = $my_row[doctor_id];
            $status_show = $my_row[status_show];
            $hospital_id = $my_row[hospital_id];
            $HomeList[] = new HomeIsolation($patient_id,$address_Home,$county_Home,$province_Home,$doctor_id,$hospital_id,$status_show);
        }
        require("connection_close.php");
        
        return $HomeList;
    }
}
?>