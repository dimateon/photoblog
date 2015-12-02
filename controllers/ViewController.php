<?php
require_once ROOT.'/models/Image/categoryBehavior.php';

class ViewController
{
    protected $actionIndex;
    public function actionIndex()
    {
        $allImages = array();
        $allImages = ImageView::viewImage();


        require_once ROOT.'/views/test/test.php';
        return true;
    }
}