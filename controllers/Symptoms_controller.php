<?php 
class SympController 
{
    public function index() 
    {
        $symptom_list = SympModel::getAll();
        require_once('views/Symtoms/SymptomIndex.php');
    }

   public function newSymptoms()
    {
        $HomeList = HomeIsolation::getAll();
        $symptom_list = SympModel::getAll();
        $Color_list = Color::getAll();
        require_once('views/Symtoms/newSymptoms.php');
    }

    public function addSymptoms() 
    {
        $date = $_GET['Date'];
        $pid = $_GET['Patient_id'];
        $color = $_GET['color'];
        $symptom = $_GET['Symptom'];
        SympModel::Add($date,$pid,$color,$symptom);

        SympController::index();
    }

    public function search() 
    {
        $key=$_GET['key'];
        $symptom_list=SympModel::search($key);
        require_once('views/Symtoms/SymptomIndex.php');
    }

    public function updateFormS() 
    {
        $pid = $_GET['Patient_id'];
        $symptom_list= SympModel::get($pid);
        $HomeList = HomeIsolation::getAll();
        $Color_list = Color::getAll();
        require_once('views/Symtoms/updateFormS.php');
    }

    public function updateS() 
    {
        $date = $_GET['Date'];
        $pid = $_GET['Patient_id'];
        $color = $_GET['color_name'];
        $symptom = $_GET['Symptom'];
        SympModel::update($date,$pid,$color,$symptom);

        SympController::index();
    }

    public function deleteConfirmS() 
    {
        $pid = $_GET['Patient_id'];
        $symptom_list=SympModel::get($pid);
        require_once('./views/Symtoms/deleteConfirm.php');
    }

    public function deleteS() 
    {
        $pid = $_GET['Patient_id'];
        SympModel::delete($pid);
        SympController::index();

    }
}
?>