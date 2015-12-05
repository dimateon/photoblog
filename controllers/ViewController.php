<?php
require_once ROOT.'/models/Image/categoryBehavior.php';
require_once ROOT.'/models/Image/viewFull.php';


class ViewController
{
    protected $actionIndex;
    public function actionIndex($category, $id)
    {
        $returnParams = array();
        $returnParams = viewFull::view($category, $id);



        require_once ROOT.'/views/gallery/fullSize.php';
        return true;
    }
}