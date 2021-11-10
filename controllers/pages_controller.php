<?php 
class PagesController
{
    public function home() {
        require_once('views/pages/home.php');
    }
    public function error() {
        require_once('views/pages/error.php');
    }

    public function Nindex() {
        $ness_List = NessModel::getAll();
        require_once('views/pages/nessIndex.php');
    }

    public function Sindex() {
        $symptom_list = SympModel::getAll();
        require_once('views/pages/sympIndex.php');
    }

    public function searchN() 
    {
        $key=$_GET['key'];
        $ness_List=NessModel::search($key);
        
        require_once('views/pages/nessIndex.php');
    }

    public function searchS() 
    {
        $key=$_GET['key'];
        $symptom_list=SympModel::search($key);
        require_once('views/pages/sympIndex.php');
    }
}
?>