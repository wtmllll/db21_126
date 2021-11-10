<?php
    class SympModel {
        public $date;
        public $pid;
        public $name;
        public $lastname;
        public $color;
        public $symptom;

    public function __construct ($date,$pid,$name,$lastname,$color,$symptom) {
        $this->date = $date;
        $this->pid = $pid;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->color = $color;
        $this->symptom = $symptom;
    }

    public static function get($pid) 
    {
        require("connection_connect.php");
        $sql = "SELECT v.Date, v.Patient_id, pe.NamePeople, pe.LastnameP, v.color_name, v.symptom FROM `Video_Call` AS v
        INNER JOIN Patient AS pa ON v.Patient_id=pa.patient_id NATURAL JOIN People AS pe
        WHERE v.Patient_id = '$pid'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $date = $my_row[Date];
        $pid = $my_row[Patient_id];
        $name = $my_row[NamePeople];
        $lastname = $my_row[LastnameP];
        $color = $my_row[color_name];
        $symptom = $my_row[symptom];
        require("connection_close.php");

        return new sympModel($date,$pid,$name,$lastname,$color,$symptom);
    }

    public static function getAll()
    {
        $SympList= [];
        require("connection_connect.php");
        $sql = "SELECT v.Date, v.Patient_id, pe.NamePeople, pe.LastnameP, v.color_name, v.symptom FROM `Video_Call` AS v
        INNER JOIN Patient AS pa ON v.Patient_id=pa.patient_id NATURAL JOIN People AS pe";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $date = $my_row[Date];
            $pid = $my_row[Patient_id];
            $name = $my_row[NamePeople];
            $lastname = $my_row[LastnameP];
            $color = $my_row[color_name];
            $symptom = $my_row[symptom];
            $SympList[]= new SympModel($date,$pid,$name,$lastname,$color,$symptom);
        }
        
        require("connection_close.php");

        return $SympList;
    }

    public static function search($key) 
    {
        $SympList= [];
        require("connection_connect.php");
        $sql = "SELECT v.Date, v.Patient_id, pe.NamePeople, pe.LastnameP, v.color_name, v.symptom FROM `Video_Call` AS v
        INNER JOIN Patient AS pa ON v.Patient_id=pa.patient_id NATURAL JOIN People AS pe WHERE (v.Date LIKE '%$key%' OR
        v.Patient_id LIKE '%$key%' OR pe.NamePeople LIKE '%$key%' OR pe.LastnameP LIKE '%$key%' OR  
        v.color_name LIKE '%$key%' OR v.symptom LIKE '%$key%')";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $date = $my_row[Date];
            $pid = $my_row[Patient_id];
            $name = $my_row[NamePeople];
            $lastname = $my_row[LastnameP];
            $color = $my_row[color_name];
            $symptom = $my_row[symptom];
            $SympList[]= new SympModel($date,$pid,$name,$lastname,$color,$symptom);
        }
        
        require("connection_close.php");

        return $SympList;
    }

    public static function Add($date,$pid,$color,$symptom) 
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `Video_Call`(`Date`, `Patient_id`, `color_name`, `symptom`) 
        VALUES ('$date','$pid','$color','$symptom')";
        $result = $conn->query($sql);
        require("connection_close.php");

        return "add success $result rows";
    }

    public static function update($date,$pid,$color,$symptom) 
    {
        require("connection_connect.php");
        $sql = "UPDATE `Video_Call` SET `Date`='$date',`color_name`='$color',`symptom`='$symptom' 
        WHERE `Patient_id`='$pid'";
        $result = $conn->query($sql);
        require("connection_close.php");

        return "update success $result row";
    }

    public static function delete($pid) 
    {
        require("connection_connect.php");
        $sql = "DELETE FROM `Video_Call` WHERE Patient_id = '$pid'";
        $result = $conn->query($sql);
        require("connection_close.php");

        return "delete success $result rows";
    }
    }
?>