<?php
$controllers = array('pages'=>['home','error','Nindex','Sindex','searchN','searchS'],
                    'Necessary'=>['index','newNecessary','addNecessary','search','updateFormN','updateN','deleteConfirmN','deleteN'],
                    'Symptoms'=>['index','newSymptoms','addSymptoms','search','updateFormS','updateS','deleteConfirmS','deleteS']
                    );
function call($controller,$action) {
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages":   $controller = new PagesController();
                        require_once("models/NecessaryModel.php");
                        require_once("models/SymptomModel.php");
                        break;
        case "Necessary":   require_once("models/NecessaryModel.php");
                            require_once("models/necessModel.php");
                            require_once("models/HomeIsolationModel.php");
                            $controller = new NessController();
                            break;
        case "Symptoms":    require_once("models/SymptomModel.php");
                            require_once("models/Color.php");
                            require_once("models/HomeIsolationModel.php");
                            $controller = new SympController();
                            break;
    }
    $controller->{$action}();
}
if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller])) {
        call($controller,$action);
    }
    else {
        call('pages','error');
    }
}
else
{
    call('pages','error');
}
?>