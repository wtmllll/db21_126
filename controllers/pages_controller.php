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
        require_once('views/pages/homeIndex.php');
    }

    public function Sindex() {
        $symptom_list = SympModel::getAll();
        require_once('views/pages/sympIndex.php');
    }
}
?>