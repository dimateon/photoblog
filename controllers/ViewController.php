<?php

class ViewController
{
    public function actionIndex()
    {
        $allImages = array();
        $allImages = ImageView::viewImage();


        require_once ROOT.'/views/test/test.php';
        return true;
    }
}