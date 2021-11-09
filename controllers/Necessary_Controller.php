
<?php 
class NessController {
    public function index() {
        echo "indexjaa";
        $ness_List = NessModel::getAll();
        require_once('views/Necessary/NecessaryIndex.php');
    }

    public function newNecessary()
    {
        $Home_List = HomeIsolation::getAll();
        $ness_List = NessModel::getAll();
        require_once('views/Necessary/NewNecessary.php');
    }

    public function addNecessary() {
        $pid = $_GET['Patient_id'];
        $smask = $_GET['surgical_mask'];
        $garb = $_GET['garbage'];
        $med = $_GET['medicine'];
        $gel = $_GET['gel_alcohol'];
        $therm = $_GET['thermometer'];
        $pulse = $_GET['PulseOximeter'];
        echo $pid;
        NessModel::Add($pid, $smask, $garb, $med, $gel, $therm, $pulse);
       echo "say hi!";
        NessController::index();

    }

    public function search() {
        echo "sefcon";
        $key=$_GET['key'];
        echo $key;
        $ness_List=NessModel::search($key);
        
        require_once('views/Necessary/NecessaryIndex.php');
    }

    public function updateFormN() {
        $pid = $_GET['Patient_id'];
        $ness_List= NessModel::get($pid);
        $Home_List=HomeIsolation::getAll();
        require_once('views/Necessary/updateFormN.php');
    }

    public function updateN() {
        echo "upN1";
        $pid = $_GET['Patient_id'];
        $pids = $_GET['Patientid'];
        $smask = $_GET['surgical_mask'];
        $garb = $_GET['garbage'];
        $med = $_GET['medicine'];
        $gel = $_GET['gel_alcohol'];
        $therm = $_GET['thermometer'];
        $pulse = $_GET['PulseOximeter'];
        
        NessModel::update($pid,$pids, $smask, $garb, $med, $gel, $therm, $pulse);
        NessController::index();
    }

    public function deleteConfirm() {
        $PDid = $_GET['PDid'];
        $minQty=$_GET['minQty'];
        $ProductPrice=ProductPrice::get($PDid,$minQty);
        require_once('./views/productprice/deleteConfirm.php');
    }

    public function delete() {
        $PDid = $_GET['PDid'];
        $MinQty=$_GET['MinQty'];
        ProductPrice::delete($PDid, $MinQty);
        ProductController::index();

    }
    
}
?>