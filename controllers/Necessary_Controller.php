
<?php 
class NessController {
    public function index() {
        $ness_List = NessModel::getAll();
        require_once('views/Necessary/NecessaryIndex.php');
    }

    
}
?>